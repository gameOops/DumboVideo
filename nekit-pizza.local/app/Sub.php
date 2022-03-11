<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub extends Model
{
    protected $table = 'subscribes';

    public function channel()
    {
        return $this->hasOne('App\Chanel','id','channel_id');
    }
}
