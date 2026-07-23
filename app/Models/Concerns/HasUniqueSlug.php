<?php

namespace App\Models\Concerns;

use Illuminate\Database\QueryException;
use Illuminate\Support\Str;
use RuntimeException;

trait HasUniqueSlug
{
    public static function generateUniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $baseSlug = Str::slug($title) ?: Str::random(8);
        $slug = $baseSlug;
        $suffix = 2;

        while (static::where('slug', $slug)->when($ignoreId, fn ($query) => $query->whereKeyNot($ignoreId))->exists()) {
            $slug = "{$baseSlug}-{$suffix}";
            $suffix++;
        }

        return $slug;
    }

    public static function createWithUniqueSlug(array $attributes): static
    {
        $lastException = null;

        for ($attempt = 0; $attempt < 5; $attempt++) {
            $attributes['slug'] = static::slugForAttempt($attributes['title'], $attempt);

            try {
                return static::create($attributes);
            } catch (QueryException $exception) {
                if (! static::isUniqueSlugConstraintViolation($exception)) {
                    throw $exception;
                }

                $lastException = $exception;
            }
        }

        throw $lastException ?? new RuntimeException('Unable to create a unique slug.');
    }

    public function saveWithUniqueSlug(): bool
    {
        $lastException = null;

        for ($attempt = 0; $attempt < 5; $attempt++) {
            $this->slug = static::slugForAttempt($this->title, $attempt, $this->getKey());

            try {
                return $this->save();
            } catch (QueryException $exception) {
                if (! static::isUniqueSlugConstraintViolation($exception)) {
                    throw $exception;
                }

                $lastException = $exception;
            }
        }

        throw $lastException ?? new RuntimeException('Unable to save a unique slug.');
    }

    private static function slugForAttempt(string $title, int $attempt, ?int $ignoreId = null): string
    {
        if ($attempt === 0) {
            return static::generateUniqueSlug($title, $ignoreId);
        }

        return static::generateUniqueSlug($title.' '.Str::random(6), $ignoreId);
    }

    private static function isUniqueSlugConstraintViolation(QueryException $exception): bool
    {
        $message = $exception->getMessage();

        return str_contains($message, 'slug')
            && (str_contains((string) $exception->getCode(), '23000')
                || str_contains($message, 'UNIQUE')
                || str_contains($message, 'Duplicate'));
    }
}
