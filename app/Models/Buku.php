<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = ['tahun_buku', 'nama_buku', 'kategori_buku','buku'];
}
