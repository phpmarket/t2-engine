<?php

use T2\Route;

// 处理404
Route::fallback(function () {
    return json(['code' => 404, 'msg' => '404 not found']);
});