<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';
    protected $primarykey = 'id' ;
    protected $fillable = ['id', 'judul', 'deskripsi', 'gambar'];
}
