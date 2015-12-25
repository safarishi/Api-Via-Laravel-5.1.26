<?php

namespace App\Http\Controllers;

use LucaDegasperi\OAuth2Server\Authorizer;

class ArticleController extends CommonController
{
    public function __construct(Authorizer $authorizer)
    {
        parent::__construct($authorizer);
        // $this->middleware('oauth', ['except' => ['todo']]);
    }

}