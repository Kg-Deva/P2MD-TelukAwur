<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpotPantai extends Model
{
    use HasFactory;
    protected $table ='spot_pantai';
    protected $primaryKey = 'id';
    protected $fillable = [
       
        'id' ,
        'nama_spot' ,
        'gambar'
    ];
    protected $hidden;
}
