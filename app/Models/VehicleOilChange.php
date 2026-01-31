<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleOilChange extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'vehicle_id',
        'date',
        'amount',
        'mileage',
        'next_mileage',
        'mechanic_name',
        'observations',
    ];

    protected $casts = [
        'date' => 'date',
        'amount' => 'decimal:2',
        'mileage' => 'integer',
        'next_mileage' => 'integer',
    ];

    /* =======================
     |  RELATIONSHIPS
     ======================= */

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
