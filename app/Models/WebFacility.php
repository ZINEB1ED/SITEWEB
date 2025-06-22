<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebFacility extends Model
{
    protected $table = 'web_facilities';

    protected $fillable = [
        'image',
        'name',
        'description',
        'bg_color',
        'text_color',
    ];
}
