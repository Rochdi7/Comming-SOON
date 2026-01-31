<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleControlItem extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'vehicle_control_id',
        'item_key',
        'label',
        'status',
        'comment',
    ];

    /* =======================
     |  RELATIONSHIPS
     ======================= */

    public function control()
    {
        return $this->belongsTo(VehicleControl::class, 'vehicle_control_id');
    }
}
