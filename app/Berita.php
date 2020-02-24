<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'beritas';

    protected $fillable = [
    	'judul',
    	'juduls', 
    	'isi',
    	'penulis',
    	'gambar',
        'created_at'
    ];
}
