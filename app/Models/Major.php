<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Major extends Model
{
    protected $casts = [
        'photo' => 'json',
    ];
    
    protected $guarded = ['id'];

    public function alumnis(): HasMany
    {
        return $this->hasMany(Alumni::class);
    }
}
