<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agency extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'legal_name',
        'tp_number',
        'rc_number',
        'if_number',
        'ice_number',
        'vat_number',
        'creation_date',
        'description',
        'email',
        'website',
        'phone',
        'address',
        'city',
        'country',
        'settings',
        'default_currency',
    ];

    protected $casts = [
        'settings' => 'array',
        'creation_date' => 'date',
    ];

    /* =======================
     |  RELATIONSHIPS
     ======================= */

    // Utilisateurs liés à l’agence
    public function users()
    {
        return $this->hasMany(User::class);
    }

    // Abonnement SaaS (1 agence = 1 abonnement)
    public function subscription()
    {
        return $this->hasOne(AgencySubscription::class);
    }

    /* =======================
     |  HELPERS (optionnel)
     ======================= */

    public function isActive(): bool
    {
        return $this->subscription?->is_active ?? false;
    }

    public function onTrial(): bool
    {
        return $this->subscription?->trial_ends_at !== null
            && now()->lt($this->subscription->trial_ends_at);
    }
}
