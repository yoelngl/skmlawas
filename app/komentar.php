<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
	protected $table = 'komentar';

    protected $fillable = ['taman_id', 'NO_HP','kategori_layanan','ulasan'];
}

