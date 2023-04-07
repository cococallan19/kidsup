<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //説明会・問合せ取得API
        '/v1/get/customer'
       ,'/v1/get/getReservationMeta'
       ,'/v1/get/school'
       ,'/v1/update'
       ,'v1/update/sub'
    ];
}
