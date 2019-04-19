<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\JsonableResponse;
use Auth;
use Hash;

class AuthController extends Controller
{
    use JsonableResponse;

    public function check(Request $request)
    {
        $username = $request->input('username', '');
        $password = $request->input('password', '');

        $user = User::where('username', $username)->first();
        if (empty($user) || ! Hash::check($password, $user->password)) {
            return $this->failed([], '登录失败！');
        }

        Auth::login($user);

        return $this->success([], 'OK');
    }
}
