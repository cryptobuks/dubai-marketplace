<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'pages';
    	
	public function getRouteKeyName()
    {
    	return 'slug';
    }
}
