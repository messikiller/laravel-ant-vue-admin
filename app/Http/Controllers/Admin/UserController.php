<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Models\User;

class UserController extends AdminController
{
    public function list(Request $request)
    {
        $pageno = $request->query('pageno', 1);
        $pagesize = $request->query('pagesize', 20);

        $query = User::query()->where('id', '>', 1)->orderBy('created_at', 'desc');

        $list = $query->limit($pagesize)->offset(($pageno - 1) * $pagesize)->get();

        $ret = [];
        foreach ($list as $index => $item)
        {
            $push = $item->toArray();

            $push['index'] = ($pageno - 1) * $pagesize + $index + 1;
            $push['created_at'] = date('Y-m-d', $item->created_at);

            unset($push['password']);

            $ret[] = $push;
        }

        return $this->success($ret, 'OK');
    }

    public function add(Request $reuqest)
    {
        $username = $request->input('username', '');
        $password = $request->input('password', '');

        if (User::where('username', $username)->count() > 0) {
            return $this->failed([], '用户名已被使用！');
        }

        User::create([
            'username' => $username,
            'nickname' => $request->input('nickname', ''),
            'password' => bcrypt($password),
            'created_at' => time(),
        ]);

        return $this->success([], 'OK');
    }

    public function resetPassword(Request $request)
    {
        $id = $request->query('id', 0);
        $password = $request->input('password', '');

        User::find($id)->update(['password' => bcrypt($password)]);

        return $this->success([], 'OK');
    }
}
