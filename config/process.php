<?php

use App\Log;
use App\Request;

global $argv;

return [
    'T2Engine' => [
        'handler'     => T2\App::class,
        'listen'      => 'http://0.0.0.0:8787',
        'count'       => cpu_count() * 4,
        'user'        => '',
        'group'       => '',
        'reusePort'   => false,
        'eventLoop'   => '',
        'context'     => [],
        'constructor' => [
            'requestClass' => Request::class,
            'logger'       => Log::channel(),
            'appPath'      => app_path(),
            'publicPath'   => public_path()
        ]
    ],

    // File update detection and automatic reload
    'Monitor'  => [
        'enable'      => true,
        'handler'     => App\Monitor::class,
        'reloadable'  => false,
        'constructor' => [
            // Monitor these directories
            'monitorDir'        => array_merge([
                app_path(),
                config_path(),
                web_path(),
                base_path() . '/resource',
                base_path() . '/.env',
            ]),
            // Files with these suffixes will be monitored
            'monitorExtensions' => [
                'php', 'html', 'htm', 'twig', 'env'
            ],
            'options'           => [
                'enable_file_monitor'   => !in_array('-d', $argv) && DIRECTORY_SEPARATOR === '/',
                'enable_memory_monitor' => DIRECTORY_SEPARATOR === '/',
            ]
        ]
    ]
];
