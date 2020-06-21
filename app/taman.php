<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class taman extends Model
{
	protected $table = 'taman';
    protected $fillable = ['taman_id','nama_taman','gambar','fungsi','layanan','alamat'];
}

