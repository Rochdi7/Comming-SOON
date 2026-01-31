<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class VehicleTechnicalCheck extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'vehicle_id',
        'date',
        'amount',
        'next_check_date',
        'notes',
    ];

    protected $casts = [
        'date' => 'date',
        'next_check_date' => 'date',
        'amount' => 'decimal:2',
    ];

    /* =======================
     |  MEDIA LIBRARY
     ======================= */

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('technical_check_documents')
            ->acceptsMimeTypes([
                'application/pdf',
                'image/jpeg',
                'image/png',
            ]);
    }

    /* =======================
     |  RELATIONSHIPS
     ======================= */

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
