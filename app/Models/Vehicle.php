<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Vehicle extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'agency_id',
        'vehicle_model_id',
        'registration_number',
        'registration_city',
        'year',
        'color',
        'current_mileage',
        'status',
        'daily_rate',
        'deposit_amount',
        'has_gps',
        'has_air_conditioning',
        'notes',
        'vin',
        'fuel_policy',
        'fuel_level_out',
        'fuel_level_in',
    ];

    protected $casts = [
        'year' => 'integer',
        'current_mileage' => 'integer',
        'daily_rate' => 'decimal:2',
        'deposit_amount' => 'decimal:2',
        'has_gps' => 'boolean',
        'has_air_conditioning' => 'boolean',
        'fuel_level_out' => 'integer',
        'fuel_level_in' => 'integer',
    ];

    /* =======================
     |  MEDIA LIBRARY
     ======================= */

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('vehicle_photos')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif'])
            ->useFallbackUrl('/images/placeholder.jpg')
            ->useFallbackPath('/images/placeholder.jpg');

        $this->addMediaCollection('vehicle_documents')
            ->acceptsMimeTypes([
                'application/pdf',
                'image/jpeg',
                'image/png',
                'application/msword',
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            ]);
    }

    // Helpers
    public function getMainPhotoUrlAttribute(): string
    {
        return $this->getFirstMediaUrl('vehicle_photos') ?: '/images/placeholder.jpg';
    }

    public function getPhotosAttribute()
    {
        return $this->getMedia('vehicle_photos');
    }

    public function getDocumentsAttribute()
    {
        return $this->getMedia('vehicle_documents');
    }

    /* =======================
     |  RELATIONSHIPS
     ======================= */

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    public function model()
    {
        return $this->belongsTo(VehicleModel::class, 'vehicle_model_id');
    }

    // Accessor simple (pas une relation)
    public function getBrandAttribute()
    {
        return $this->relationLoaded('model')
            ? ($this->model?->brand)
            : $this->model()->with('brand')->first()?->brand;
    }

    public function vignettes()
    {
        return $this->hasMany(VehicleVignette::class);
    }

    public function insurances()
    {
        return $this->hasMany(VehicleInsurance::class);
    }

    public function technicalChecks()
    {
        return $this->hasMany(VehicleTechnicalCheck::class);
    }

    public function oilChanges()
    {
        return $this->hasMany(VehicleOilChange::class);
    }

    public function controls()
    {
        return $this->hasMany(VehicleControl::class);
    }
}
