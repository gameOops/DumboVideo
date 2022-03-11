<?php


namespace App\Services;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthService
{
    public function attempt($data)
    {

        $user = User::where('email',$data->email)->firstOrFail();

        if(!Hash::check($data->password,$user->password) == true) {
            return response()->json([
                'status' => 'error',
                'message' => 'incorrect password'
            ], 200);
        }

        $user->remember_token = Str::random(60);

        $user->save();

        return response()->json([
            'status' => 'success',
            'token' =>  $user->remember_token
        ], 200);
    }
}
