<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'data_siswa';
    public $timestamps = false;
    public function prodi()
    {
      return $this->belongsTo('App\Prodi','jurusan_id','id');
    }
}
