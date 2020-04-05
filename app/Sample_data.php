<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample_data extends Model
{
    protected $guarded = [];

    public function Permissions()
	{
	    return $this->belongsTo(Permissions::class, 'permission_id');
	}
}