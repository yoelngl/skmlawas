<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
	 protected $table = 'nilai';
     protected $fillable = [
      'no_hp','u1','u2','u3','u4','u5','u6','u7','u8','u9','tahun','taman_id','created_at'
  ];
}
