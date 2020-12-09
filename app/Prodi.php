<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
	public function siswa(){

      return $this->belongsTo(Siswa::class,'id');
  }

  public function fakultas(){

      return $this->HasMany(Fakultas::class,'id');
  }
}
