<?php

namespace App\Support\MediaLibrary;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;

class ShortUuidPathGenerator implements PathGenerator
{
    private function base(Media $media): string
    {
        $uuid = $media->uuid ?: (string) $media->id;
        $short = substr(str_replace('-', '', $uuid), 0, 8);

        return $short . '/';
    }

    public function getPath(Media $media): string
    {
        return $this->base($media);
    }

    public function getPathForConversions(Media $media): string
    {
        return $this->base($media) . 'conversions/';
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->base($media) . 'responsive-images/';
    }
}
