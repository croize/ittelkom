<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'data_prodi';
    public $timestamps = false;
    public function jenjang()
    {
      return $this->belongsTo('App\Jenjang','jenjang_id','id');
    }
    public function pendaftar()
    {
      return $this->hasMany('App\Siswa');
    }
}
