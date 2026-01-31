<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleVignette extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'vehicle_id',
        'date',
        'amount',
        'year',
        'notes',
    ];

    protected $casts = [
        'date' => 'date',
        'amount' => 'decimal:2',
        'year' => 'integer',
    ];

    /* =======================
     |  RELATIONSHIPS
     ======================= */

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
