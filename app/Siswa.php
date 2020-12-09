<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public function prodi(){
    	return $this->hasMany(Prodi::class, 'id');
    }
}
