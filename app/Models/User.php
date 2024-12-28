<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use App\Models\Achievement;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    // public function canAccessPanel(Panel $panel): bool
    // {
    //     return str_ends_with($this->email, '@smkn1kasreman.site') && $this->hasVerifiedEmail();
    //     return true;
    // }
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function achievements(): HasMany
    {
        return $this->hasMany(Achievement::class);
    }
    
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    public function jobfairs(): HasMany
    {
        return $this->hasMany(Jobfair::class);
    }
}
