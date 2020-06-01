<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    //
    protected $fillable = ['estado'];

    public function cliente(){

        return $this->belongsTo('App\Cliente');
    }
}
