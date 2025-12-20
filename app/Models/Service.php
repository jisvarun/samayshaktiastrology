<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'service',
        'service_hn',
        'service_order',
        'service_file',
        'status',
    ];
}
