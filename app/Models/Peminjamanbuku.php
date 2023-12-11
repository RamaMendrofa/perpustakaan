<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjamanbuku extends Model
{
    protected $fillable = ['id_peminjaman', 'id_pengembalian', 'tanggal_peminjaman', 'tanggal_pengembalian','buku_id'];
    
    public function buku ()
    {
    return $this->belongsTo('App\Models\buku');
    }

}

