<?php

namespace App;

use DB;
use App\Http\Controllers\MultiplexController;

class PasswordVerifier
{
    public function verify($username, $password)
    {
        var_dump(MultiplexController::getAvatarUrl());exit;
        $client = MultiplexController::getWebServiceClient();

        $parameter = [
            'UserName' => $username,
            'UserPass' => $password,
            'Inner'    => 1,
            'IsEncry'  => 0,
        ];
        $data = $client->LoginUser($parameter);

        $data = json_decode($data->LoginUserResult);

        var_dump(($data->RstValue === '0')
            ? self::associateLocalUser($data->UserId)
            : false);exit;

        return ($data->RstValue === '0')
            ? self::associateLocalUser($data->UserId)
            : false;
    }

    protected static function associateLocalUser($uuid)
    {
        $user = DB::collection('user');

        $exist = $user->where('uuid', $uuid)->first();
        if ($exist) {
            return $exist['_id'];
        }

        $avatarUrl = MultiplexController::getAvatarUrl();
        $insertData = [
            'uuid'       => $uuid,
            'avatar_url' => $avatarUrl,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        // todo
        // $insertId = $user->

        var_dump($user);
        exit;
    }

}