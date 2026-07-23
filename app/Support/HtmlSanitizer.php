<?php

namespace App\Support;

use DOMDocument;
use DOMElement;
use DOMNode;

class HtmlSanitizer
{
    private const ALLOWED_TAGS = [
        'a', 'blockquote', 'br', 'div', 'em', 'h2', 'h3', 'h4', 'i', 'li', 'ol', 'p', 'span', 'strong', 'u', 'ul',
    ];

    private const ALLOWED_ATTRIBUTES = [
        'a' => ['href', 'title', 'target', 'rel'],
    ];

    public static function sanitize(?string $html): string
    {
        if (blank($html)) {
            return '';
        }

        $document = new DOMDocument;
        libxml_use_internal_errors(true);
        $document->loadHTML('<?xml encoding="utf-8" ?><body>'.$html.'</body>', LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        self::sanitizeNode($document->documentElement);

        $sanitized = '';
        foreach ($document->documentElement->childNodes as $child) {
            $sanitized .= $document->saveHTML($child);
        }

        return $sanitized;
    }

    private static function sanitizeNode(DOMNode $node): void
    {
        foreach (iterator_to_array($node->childNodes) as $child) {
            if ($child instanceof DOMElement) {
                self::sanitizeElement($child);
            }

            self::sanitizeNode($child);
        }
    }

    private static function sanitizeElement(DOMElement $element): void
    {
        if (! in_array($element->tagName, self::ALLOWED_TAGS, true)) {
            $element->parentNode?->removeChild($element);

            return;
        }

        foreach (iterator_to_array($element->attributes) as $attribute) {
            $allowed = self::ALLOWED_ATTRIBUTES[$element->tagName] ?? [];

            if (! in_array($attribute->name, $allowed, true)) {
                $element->removeAttribute($attribute->name);

                continue;
            }

            if ($attribute->name === 'href' && ! self::hasSafeUrl($attribute->value)) {
                $element->removeAttribute('href');
            }
        }

        if ($element->tagName === 'a') {
            $element->setAttribute('rel', 'nofollow noopener noreferrer');
        }
    }

    private static function hasSafeUrl(string $url): bool
    {
        if (str_starts_with($url, '/') || str_starts_with($url, '#')) {
            return true;
        }

        return in_array(parse_url($url, PHP_URL_SCHEME), ['http', 'https', 'mailto', 'tel'], true);
    }
}
