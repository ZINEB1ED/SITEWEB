<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebClasse extends Model
{
    protected $table = 'web_classes';

    protected $fillable = [
        'name',
        'description',
        'image',
    ];
}
