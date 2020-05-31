<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='post';
    protected $fillable=['Nama','Judul','Target','Harga','file', 'idUser'];
}
