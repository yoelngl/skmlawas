<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class responden extends Model
{     protected $table = 'responden';
      protected $fillable = [
      'no_hp','tgl','tahun','jam','gender','age','pen','pek','jen','taman_id','created_at'
  ];
}
