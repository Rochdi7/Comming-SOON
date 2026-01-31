<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class VehicleInsurance extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'vehicle_id',
        'company_name',
        'policy_number',
        'date',
        'amount',
        'next_insurance_date',
        'notes',
    ];

    protected $casts = [
        'date' => 'date',
        'next_insurance_date' => 'date',
        'amount' => 'decimal:2',
    ];

    /* =======================
     |  MEDIA LIBRARY
     ======================= */

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('insurance_documents')
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
