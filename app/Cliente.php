<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    public function zona(){
        return $this->hasOne('App\Zona');
    }
}
