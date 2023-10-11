<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penginapan extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    protected $table ='penginapan';
    protected $primaryKey = 'id';
    protected $fillable = [
       
        'id' ,
        'nama_penginapan',
        'harga' ,
        'deskripsi' ,
        'gmaps' ,
        'gambar'
    ];
    protected $hidden;
}
