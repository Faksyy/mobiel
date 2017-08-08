<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MerekMobil extends Model
{
    //

    protected $fillable - [
    'nama_merek', 'id_tipe'];


    public function Tipemobil(){

    	return $this->belongsTo('App\Tipemobil');
    }

    public function Dataiklan(){

    	return $this->hasMany('App\Dataiklan');
    }
}
