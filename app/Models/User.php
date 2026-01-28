<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasFactory, Notifiable, SoftDeletes, InteractsWithMedia;

    /**
     * Mass assignable attributes
     */
    protected $fillable = [
        'agency_id',
        'name',
        'email',
        'password',
        'phone',
        'status',
        'last_login_at',
    ];

    /**
     * Hidden attributes
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casts
     */
    protected $casts = [
        'last_login_at' => 'datetime',
        'password' => 'hashed',
    ];

    /* =======================
     |  MEDIA LIBRARY
     ======================= */

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatar')
            ->useDisk('media')   // ✅ force disk media => URL /media/...
            ->singleFile();      // ✅ un seul avatar
    }

    // ✅ PAS DE registerMediaConversions() => aucune conversion

    /* =======================
     |  RELATIONSHIPS
     ======================= */

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    public function agents()
    {
        return $this->hasMany(Agent::class);
    }
}
