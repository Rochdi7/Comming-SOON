<?php

return [

    /*
    |--------------------------------------------------------------------------
    | The disk on which to store added files and derived images by default.
    |--------------------------------------------------------------------------
    |
    | IMPORTANT: on force "media" pour obtenir /media/... au lieu de /storage/...
    |
    */
    'disk_name' => env('MEDIA_DISK', 'media'),

    /*
    |--------------------------------------------------------------------------
    | Maximum file size of an item in bytes.
    |--------------------------------------------------------------------------
    */
    'max_file_size' => env('MEDIA_MAX_FILE_SIZE', 1024 * 1024 * 50), // 50MB

    /*
    |--------------------------------------------------------------------------
    | Queue connection name.
    |--------------------------------------------------------------------------
    */
    'queue_connection_name' => env('QUEUE_CONNECTION', 'sync'),

    /*
    |--------------------------------------------------------------------------
    | Queue name.
    |--------------------------------------------------------------------------
    */
    'queue_name' => env('MEDIA_QUEUE_NAME', ''),

    /*
    |--------------------------------------------------------------------------
    | The fully qualified class name of the media model.
    |--------------------------------------------------------------------------
    */
    'media_model' => Spatie\MediaLibrary\MediaCollections\Models\Media::class,

    /*
    |--------------------------------------------------------------------------
    | The fully qualified class name of the temporary upload model.
    |--------------------------------------------------------------------------
    */
    'temporary_upload_model' => Spatie\MediaLibrary\MediaCollections\Models\TemporaryUpload::class,

    /*
    |--------------------------------------------------------------------------
    | The directory where all files will be stored.
    |--------------------------------------------------------------------------
    */
    'prefix' => env('MEDIA_PREFIX', ''),

    /*
    |--------------------------------------------------------------------------
    | Path generator
    |--------------------------------------------------------------------------
    |
    | IMPORTANT: remplace le dossier basé sur "id" (/7/) par 8 chars du uuid
    | Exemple: /media/92a94192/filename.jpg
    |
    */
    'path_generator' => App\Support\MediaLibrary\ShortUuidPathGenerator::class,

    /*
    |--------------------------------------------------------------------------
    | URL generator
    |--------------------------------------------------------------------------
    */
    'url_generator' => Spatie\MediaLibrary\Support\UrlGenerator\DefaultUrlGenerator::class,

    /*
    |--------------------------------------------------------------------------
    | Versioning of urls
    |--------------------------------------------------------------------------
    */
    'version_urls' => false,

    /*
    |--------------------------------------------------------------------------
    | File namer
    |--------------------------------------------------------------------------
    */
    'file_namer' => Spatie\MediaLibrary\Support\FileNamer\DefaultFileNamer::class,

    /*
    |--------------------------------------------------------------------------
    | Image driver
    |--------------------------------------------------------------------------
    | Supported: 'gd' or 'imagick'
    */
    'image_driver' => env('MEDIA_IMAGE_DRIVER', 'gd'),

    /*
    |--------------------------------------------------------------------------
    | FFMpeg
    |--------------------------------------------------------------------------
    */
    'ffmpeg_path' => env('FFMPEG_PATH', '/usr/bin/ffmpeg'),
    'ffprobe_path' => env('FFPROBE_PATH', '/usr/bin/ffprobe'),

    /*
    |--------------------------------------------------------------------------
    | Temporary directory
    |--------------------------------------------------------------------------
    */
    'temporary_directory_path' => storage_path('media-library/temp'),

    /*
    |--------------------------------------------------------------------------
    | Jobs
    |--------------------------------------------------------------------------
    */
    'jobs' => [
        'perform_conversions' => Spatie\MediaLibrary\Conversions\Jobs\PerformConversionsJob::class,
        'generate_responsive_images' => Spatie\MediaLibrary\ResponsiveImages\Jobs\GenerateResponsiveImagesJob::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Responsive images
    |--------------------------------------------------------------------------
    |
    | Tu as dit "pas de conversion" => on laisse ça désactivé.
    |
    */
    'responsive_images' => [
        'use_tiny_placeholders' => false,
        'tiny_placeholder_generator' => Spatie\MediaLibrary\ResponsiveImages\TinyPlaceholderGenerator\Blurred::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Remote
    |--------------------------------------------------------------------------
    */
    'remote' => [
        'extra_headers' => [
            'CacheControl' => 'max-age=604800',
        ],
    ],

];
