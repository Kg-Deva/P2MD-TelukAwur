<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uploadgambar extends Model
{
    use HasFactory;
    protected $table ='uploadgambar';
    protected $primaryKey = 'id';
    protected $fillable = [
       
        'id' ,
        'deskripsi' ,
        'gambar'
    ];
    protected $hidden;
}

