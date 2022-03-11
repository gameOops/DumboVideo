<?php

namespace App\Services;

use App\User;
use Illuminate\Support\Facades\Hash;
use App\Chanel;
use Illuminate\Support\Str;

class RegisterService
{
    public function create($registrationData)
    {
        $passHash = Hash::make($registrationData['password']);

        $user = new User();

        $user->email = $registrationData['email'];
        $user->name = $registrationData['name'];
        $user->password = $passHash;

        $user->save();

        $network = new Chanel();
        $network->user_id = $user->id;
        $network->name = $registrationData['name'];
        $network->image = 's1.png';
        $network->bg = 's1.png';
        $network->verify = '0';
        $network->about = ' ';
        $network->save();

        return response()->json([
            'status' => 'success',
            'data' => $user
        ], 200);
    }
}
