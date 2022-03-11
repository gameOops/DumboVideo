<?php


namespace App\Services;

use App\Chanel;
use App\Sub;
use App\User;

class SubscriberService
{
    public function index($user_id)
    {
        return Sub::with('channel')->where('subscriber',$user_id)->get();
    }

    public function checkSub($token,$channel_id)
    {
        $user = User::where('remember_token',$token)->first();
        $channel = Chanel::where('user_id',$user->id)->first();
        $issetSub = Sub::where('subscriber',$channel->id)->where('channel_id',$channel_id)->first();

        if(isset($issetSub->id))
        {
            return response()->json([
                'status'=>'subscribed'
            ]);
        } else {
            return response()->json([
                'status'=>'not subscribed'
            ]);
        }
    }

    public function create($token,$channel_id)
    {
        $user = User::where('remember_token',$token)->first();
        $channel = Chanel::where('user_id',$user->id)->first();
        $issetSub = Sub::where('subscriber',$channel->id)->where('channel_id',$channel_id)->first();

        if(isset($issetSub->id))
        {
            $issetSub->delete();

            return response()->json([
                'status'=>'success'
            ]);
        }

        $sub = new Sub();
        $sub->subscriber = $channel->id;
        $sub->channel_id = $channel_id;
        $sub->save();

        return response()->json([
            'status'=>'success',
            'data' => $sub
        ]);
    }
}
