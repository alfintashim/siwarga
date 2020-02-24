<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
	protected $table = 'wargas';
	
    protected $fillable = [
    	'no_KK',
    	'namas'
    ];
}
