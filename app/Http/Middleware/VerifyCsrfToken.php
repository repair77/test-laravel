<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * 需要排除CSRF验证的URI
     * @var array
     */
    protected $except = [
        //
    ];
}
