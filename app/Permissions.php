<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $fillable = [];

    public function Permissions(){

    	return $this->hasMany('App\Sample_data0')->withDefault();

    }
}
