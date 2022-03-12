<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function channel()
    {
        return $this->hasOne('App\Chanel','id','user_id')->with('subs');
    }

    public function likes()
    {
        return $this->hasMany('App\Like','video_id','id');
    }
}
