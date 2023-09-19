<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuliner extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    protected $table ='kuliner';
    protected $primaryKey = 'id';
    protected $fillable = [
       
        'id' ,
        'nama_kuliner',
        'deskripsi' ,
        'nama_warung' ,
        'harga' ,
        'gambar'
    ];
    protected $hidden;
}
