<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    public function user()
    {
        return $this->hasMany('App\User','idRole','id');
    }
    
}
