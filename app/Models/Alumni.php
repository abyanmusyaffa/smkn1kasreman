<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alumni extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    // protected function casts(): array
    // {
    //     return [
    //         'password' => 'hashed',
    //     ];
    // }

    public function testimonials(): HasOne
    {
        return $this->hasOne(Testimonial::class);
    }

    public function majors(): BelongsTo
    {
        return $this->belongsTo(Major::class, 'major_id');
    }

    protected static function booted()
    {
        static::deleting(function ($alumni) {
            if ($alumni->photo && $alumni->photo !== '/default/alumni.svg') {
                Storage::disk('public')->delete($alumni->photo);
            }
        });
    
        // Menghapus file lama saat record diperbarui
        static::updating(function ($alumni) {
            if ($alumni->isDirty('photo')) {
                $oldPhoto = $alumni->getOriginal('photo');
                if ($oldPhoto && $oldPhoto !== '/default/alumni.svg') {
                    Storage::disk('public')->delete($oldPhoto);
                }
            }
        });
    }
       
}
