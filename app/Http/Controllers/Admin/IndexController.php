<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use Auth;

class IndexController extends AdminController
{
    public function logout(Request $request)
    {
        Auth::logout();
        return $this->success([], 'OK');
    }

    public function me(Request $request)
    {
        $user = Auth::user();
        $ret = [
            'id' => $user->id,
            'username' => $user->username,
            'nickname' => $user->nickname,
        ];

        return $this->success($ret, 'OK');
    }
}
