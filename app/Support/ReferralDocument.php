<?php

namespace App\Support;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ReferralDocument
{
    public const PATH_KEY = 'supporting_document_path';
    public const ORIGINAL_NAME_KEY = 'supporting_document_original_name';
    public const SIZE_KEY = 'supporting_document_size';
    public const MIME_KEY = 'supporting_document_mime';

    public static function store(TemporaryUploadedFile|UploadedFile $file, ?string $oldPath = null): array
    {
        self::delete($oldPath);

        $path = $file->store('referral-documents', 'local');

        return [
            self::PATH_KEY => $path,
            self::ORIGINAL_NAME_KEY => $file->getClientOriginalName(),
            self::SIZE_KEY => $file->getSize(),
            self::MIME_KEY => $file->getMimeType(),
        ];
    }

    public static function delete(?string $path): void
    {
        if ($path) {
            Storage::disk('local')->delete($path);
        }
    }

    public static function hasDocument(array $formData): bool
    {
        return filled($formData[self::PATH_KEY] ?? null);
    }

    public static function originalName(array $formData): ?string
    {
        return $formData[self::ORIGINAL_NAME_KEY] ?? null;
    }

    public static function metadataKeys(): array
    {
        return [
            self::PATH_KEY,
            self::ORIGINAL_NAME_KEY,
            self::SIZE_KEY,
            self::MIME_KEY,
        ];
    }
}
