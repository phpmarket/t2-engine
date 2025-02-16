<?php

namespace App\demo\controller;

use App\Request;
use App\Response;

class Index
{
    /**
     * @param Request $request
     *
     * @return false|mixed|string
     */
    public function index(Request $request): mixed
    {
        static $readme;
        if (!$readme) {
            $readme = file_get_contents(base_path('README.md'));
        }
        return $readme;
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function view(Request $request): Response
    {
        return view('index/view', ['name' => 'webman']);
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function json(Request $request): Response
    {
        return json(['code' => 0, 'msg' => 'ok']);
    }
}