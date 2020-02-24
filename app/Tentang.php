<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    protected $table = 'tentangs';

    protected $fillable = [
    	'id' ,
    	'isi'
    ];
}
