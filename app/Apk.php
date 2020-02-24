<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apk extends Model
{
    protected $table = 'apks';

    protected $fillable = [
    	'link'
    ];
}
