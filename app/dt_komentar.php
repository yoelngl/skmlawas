<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dt_komentar extends Model
{
	protected $table = 'komentar';
    protected $fillable = ['kategori_layanan','ulasan'];
}
