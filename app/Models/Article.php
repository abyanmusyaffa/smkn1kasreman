<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $casts = [
        'tags' => 'json',
    ];

    protected $guarded = ['id'];
}
