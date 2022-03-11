<?php


namespace App\Services;

use App\Chanel;

class ChannelService
{
    public function index()
    {
        return Chanel::withCount('subs')->get();
    }

    public function get($id)
    {
        return Chanel::with('videos')->where('id', $id)->first();
    }
}
