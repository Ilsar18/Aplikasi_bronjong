<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'content',
        'image1',
        'image2',
        'image3'
    ];
}
