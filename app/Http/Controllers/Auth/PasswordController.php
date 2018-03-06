<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | 密码重置
    |--------------------------------------------------------------------------
    | 这个控制器负责处理密码重置请求，并使用一个简单的特性来包含此行为。
    | 您可以自由探索此特性并重写任何希望调整的方法。
    |
    */

    use ResetsPasswords;

    /**
     * 创建一个密码控制器实例
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
