<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'bukus';
    protected $primarykey = 'id' ;
    protected $fillable = ['id', 'judul_buku', 'nama_pengarang', 'penerbit', 'tahun_terbit', 'gambar'];
}
