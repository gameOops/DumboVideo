<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function channel()
    {
        return $this->hasOne('App\Chanel','id','user_id');
    }
}
