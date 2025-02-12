<?php
return [
    'event_loop'       => '',
    'stop_timeout'     => 2,
    'pid_file'         => runtime_path() . '/t2engine.pid',
    'status_file'      => runtime_path() . '/t2engine.status',
    'stdout_file'      => runtime_path() . '/logs/stdout.log',
    'log_file'         => runtime_path() . '/logs/workerman.log',
    'max_package_size' => 10 * 1024 * 1024
];
