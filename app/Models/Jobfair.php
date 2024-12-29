<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jobfair extends Model
{
    protected $casts = [
        'industry' => 'json',
    ];

    protected $guarded = ['id'];
    
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
