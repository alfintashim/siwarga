<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UserAndroid;
use App\Warga;

class Keluarga extends Model
{
    protected $table = 'keluargas';

    protected $fillable = [
    	'id',
        'no_KK' ,
    	'alamat', 
    	'kepala_keluarga',
        'kepala_keluargas'
    ];

    public function warga()
    {
        // return Warga::where('no_KK', $this->no_KK)->first()->NIK;
        // return $this->belongsTo('Warga');
        return $this->hasOne('Warga');
    }

    /* Jika user sudah ada maka return false */
    public function checkUser()
    {
        $user = UserAndroid::where('no_KK', $this->no_KK)->first();
        return (is_null($user) ? true : false);
    }
}
