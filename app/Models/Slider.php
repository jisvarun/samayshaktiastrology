<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'slider',
        'slider_order',
        'slider_file',
        'status',
    ];
}
