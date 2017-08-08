<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataIklan extends Model
{
    //
    protected $fillable = [
    'id_akun', 'judul_iklan', 'id_merek', 'kondisi', 'harga', 'tahun', 'id_wilayah', 'deskripsi'];

    public function User(){
    	return $this->belongsTo('App\User');
    }


}
