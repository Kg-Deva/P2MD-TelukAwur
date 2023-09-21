<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    protected $table ='wisata';
    protected $primaryKey = 'id';
    protected $fillable = [
       
        'id' ,
        'nama_paket',
        'tujuan_wisata',
        'durasi',
        'harga' ,
        'deskripsi' ,
        'gambar'
    ];
    protected $hidden;
}
