<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAndroid extends Model
{
    protected $table = 'user_androids';

    protected $fillable = [
    	'no_KK',
    	'password',
    	'created_at'
    ];
}
