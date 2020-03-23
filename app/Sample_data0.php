<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample_data0 extends Model
{
    protected $guarded = [
     'permissions_id'
    ];

    public function Sample_data0()
	{
	    return $this->belongsTo('App\Permissions')->withDefault();
	}
}
