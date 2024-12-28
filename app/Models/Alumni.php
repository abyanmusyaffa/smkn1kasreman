<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alumni extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function testimonials(): HasOne
    {
        return $this->hasOne(Testimonial::class);
    }

    public function majors(): BelongsTo
    {
        return $this->belongsTo(Major::class, 'major_id');
    }
}
