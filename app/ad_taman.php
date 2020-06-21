<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ad_taman extends Model
{
	protected $table = 'taman';
    protected $fillable = ['nama_taman','gambar','fungsi','layanan','alamat'];
}

