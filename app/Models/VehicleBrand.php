<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class VehicleBrand extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'agency_id',
        'name',
    ];

    /* =======================
     |  MEDIA LIBRARY
     ======================= */

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('vehicle_brand_logo')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif'])
            ->useFallbackUrl('/images/placeholder.jpg')
            ->useFallbackPath('/images/placeholder.jpg');
    }

    /* =======================
     |  ACCESSORS
     ======================= */

    public function getLogoUrlAttribute(): ?string
    {
        return $this->getFirstMediaUrl('vehicle_brand_logo') ?: null;
    }

    public function getLogoMediaAttribute()
    {
        return $this->getFirstMedia('vehicle_brand_logo');
    }

    /* =======================
     |  RELATIONSHIPS
     ======================= */

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    public function models()
    {
        return $this->hasMany(VehicleModel::class);
    }

    public function vehicles()
    {
        return $this->hasManyThrough(Vehicle::class, VehicleModel::class, 'vehicle_brand_id', 'vehicle_model_id');
    }
}
