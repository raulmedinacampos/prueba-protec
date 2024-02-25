<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model{
    protected $table = "posts";
    protected $primaryKey = "id";
    protected $fillable = [
        'titulo',
        'autor',
        'fecha',
        'contenido'
    ];
}
