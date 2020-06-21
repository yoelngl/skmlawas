<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pertanyaan extends Model
{
	protected $table = 'pertanyaan';
    protected $fillable = [
      'id_pertanyaan','no_pertanyaan','pertanyaan','a','b','c','d','created_at'
  ];
}
