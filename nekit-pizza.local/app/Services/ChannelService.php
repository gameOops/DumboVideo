<?php


namespace App\Services;

use App\Chanel;

class ChannelService
{
    public function index($limit)
    {
        if($limit > 0)
        {
            return Chanel::withCount('subs')->limit($limit)->get();
        } else {
            return Chanel::withCount('subs')->get();
        }

    }

    public function get($id)
    {
        return Chanel::with('videos')->where('id', $id)->first();
    }
}
