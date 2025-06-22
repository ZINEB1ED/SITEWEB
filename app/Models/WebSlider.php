<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebSlider extends Model
{
    protected $table = 'web_sliders';

    protected $fillable = [
        'image',
        'title',
        'description',
        'status',
    ];
}
