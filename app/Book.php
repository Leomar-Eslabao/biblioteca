<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = [
            'titulo',
            'autor',
            'id',
            'titulo',
            'autor',
            'sinopse',
            'isbn',
            'exemplar',
            'tipo',
            'status',
            'genero',
            'editora',
        ];
}

