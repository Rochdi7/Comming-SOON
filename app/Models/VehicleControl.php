<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleControl extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'agency_id',
        'rental_contract_id',
        'control_number',
        'vehicle_id',
        'start_mileage',
        'end_mileage',
        'notes',
        'performed_by',
    ];

    protected $casts = [
        'start_mileage' => 'integer',
        'end_mileage' => 'integer',
    ];

    /* =======================
     |  RELATIONSHIPS
     ======================= */

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function rentalContract()
    {
        return $this->belongsTo(RentalContract::class);
    }

    public function performedBy()
    {
        return $this->belongsTo(User::class, 'performed_by');
    }

    public function items()
    {
        return $this->hasMany(VehicleControlItem::class);
    }
}
