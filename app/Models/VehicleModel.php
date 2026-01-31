<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'agency_id',
        'vehicle_brand_id',
        'name',
        'doors',
        'seats',
        'transmission',
        'fuel_type',
        'category',
    ];

    protected $casts = [
        'doors' => 'integer',
        'seats' => 'integer',
    ];

    /* =======================
     |  RELATIONSHIPS
     ======================= */

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    public function brand()
    {
        return $this->belongsTo(VehicleBrand::class, 'vehicle_brand_id');
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
