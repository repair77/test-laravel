<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | 注册 & 登陆 Controller
    |--------------------------------------------------------------------------
    |
    | 该控制器处理新用户的注册，以及对现有用户的认证  
    | 默认情况下，该控制器使用一个简单的特性来添加这些行为。你为什么不去探索一下呢？
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * 登录/注册后重定向用户到何处。
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * 创建一个 new authentication controller 的实例.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * 注册验证器
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * 有效注册后创建新的用户实例.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
