<?php

namespace App\Interfaces\UserInterfaces;

use App\Chanel;
use App\User;
use Illuminate\Http\JsonResponse;

class UserInterface
{
    public function __is_valid_token($token): JsonResponse
    {
        $user_exe = User::query()->where('remember_token',$token)->first();

        if (!isset($user_exe))
        {
            return response()->json([
               'message'=>'invalid'
            ]);
        } else {
            return response()->json([
                'message'=>'valid'
            ]);
        }
    }

    public function __get_user_channel($token)
    {
        $user = User::query()->where('remember_token',$token)->first();
        $channel = Chanel::query()->where('user_id',$user->id)->first();

        if(!$channel)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'The user does not have a channel'
            ]);
        }

        return $channel;
    }
}
