<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenjang extends Model
{
    protected $table = 'data_jenjang_pendidikan';
    public $timestamps = false;
    public function prodi()
    {
      return $this->hasMany('App\Prodi');
    }
}
