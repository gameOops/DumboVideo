<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chanel extends Model
{
    protected $table = 'channels';

    public function videos()
    {
        return $this->hasMany('App\Video','user_id','id');
    }

    public function subs()
    {
        return $this->hasMany('App\Sub','channel_id','id');
    }
}
