<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $fillable = [
        'title','synopsis','author'
    ];

    protected $connection = 'app-10-old';
}
