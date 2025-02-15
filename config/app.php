<?php

use App\Env;
use App\Request;

return [
    'debug'             => Env::get('APP.DEBUG', false),
    'error_reporting'   => E_ALL,
    'default_timezone'  => Env::get('APP.DEFAULT_TIMEZONE', 'Asia/Shanghai'),
    'request_class'     => Request::class,
    'public_path'       => base_path() . DIRECTORY_SEPARATOR . 'public',
    'runtime_path'      => base_path(false) . DIRECTORY_SEPARATOR . 'runtime',
    'controller_suffix' => 'Controller',
    'controller_reuse'  => false,
];
