<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgencySubscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency_id',
        'plan_name',
        'is_active',
        'starts_at',
        'ends_at',
        'trial_ends_at',
        'billing_cycle',
        'provider',
        'provider_subscription_id',
        'notes',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
        'trial_ends_at' => 'datetime',
    ];

    /* =======================
     |  RELATIONSHIPS
     ======================= */

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    /* =======================
     |  HELPERS
     ======================= */

    public function isExpired(): bool
    {
        return $this->ends_at !== null && now()->gt($this->ends_at);
    }

    public function isOnTrial(): bool
    {
        return $this->trial_ends_at !== null && now()->lt($this->trial_ends_at);
    }
}
