<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebReview extends Model
{
    protected $table = 'web_reviews';

 protected $fillable = ['author', 'content', 'rating'];

}
