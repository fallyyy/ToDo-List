<?php

return [

    // Default Filesystem Disk
    'default' => env('FILESYSTEM_DRIVER', 'local'),

    // Default Cloud Filesystem Disk
    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    //  Filesystem Disk
    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'endpoint' => env('AWS_URL'),
        ],

    ],

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];