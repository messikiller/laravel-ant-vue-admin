<?php

namespace App\Traits;

defined('HTTP_OK') || define('HTTP_OK', 200);
defined('HTTP_ERROR') || define('HTTP_ERROR', 500);
defined('HTTP_UNAUTHORIZED') || define('HTTP_UNAUTHORIZED', 401);
defined('HTTP_FORBIDDEN') || define('HTTP_FORBIDDEN', 403);

Trait JsonableResponse
{
    protected function respond($status, $data, $msg = '', $ext = [])
    {
        return response()->json([
            'code' => $status,
            'data' => (array) $data,
            'msg' => $msg,
            'ext' => $ext
        ]);
    }

    protected function success($data, $msg = '', $ext = [])
    {
        return $this->respond(HTTP_OK, $data, $msg, $ext);
    }

    protected function failed($data, $msg = '', $ext = [])
    {
        return $this->respond(HTTP_ERROR, $data, $msg, $ext);
    }
}
