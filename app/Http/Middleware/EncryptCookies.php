<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as BaseEncrypter;

class EncryptCookies extends BaseEncrypter
{
    /**
     * 不加密的cookie的名称。
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
