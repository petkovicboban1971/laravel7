<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $guarded = [];

    public function Sample_data(){

    	return $this->hasMany(Sample_data::class);

    }
}
