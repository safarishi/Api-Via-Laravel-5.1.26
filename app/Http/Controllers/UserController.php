<?php

namespace App\Http\Controllers;

use App\Exceptions\ValidationException;
use LucaDegasperi\OAuth2Server\Authorizer;

class UserController extends CommonController
{
    public function __construct(Authorizer $authorizer)
    {
        parent::__construct($authorizer);
        $this->middleware('oauth', ['except' => ['todo']]);
        $this->middleware('validation');
    }

    private static $_validate = [
        // 'functionName' => [
        //     //
        // ],
    ];

}