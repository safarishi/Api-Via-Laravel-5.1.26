<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use LucaDegasperi\OAuth2Server\Authorizer;

class OAuthController extends ApiController
{
    /**
     * [$authorizer description]
     * @var \LucaDegasperi\OAuth2Server\Authorizer
     */
    protected $authorizer;

    public function __construct(Authorizer $authorizer)
    {
        $this->authorizer = $authorizer;
    }

    public function postAccessToken()
    {
        return $this->authorizer->issueAccessToken();
    }

}