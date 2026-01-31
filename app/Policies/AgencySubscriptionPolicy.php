<?php

namespace App\Policies;

use App\Models\AgencySubscription;
use App\Models\User;

class AgencySubscriptionPolicy
{
    /**
     * Super Admin only (guard backoffice)
     */
    private function isSuperAdmin(?User $user): bool
    {
        return $user
            && $user->hasRole('super-admin', 'backoffice');
    }

    public function viewAny(User $user): bool
    {
        return $this->isSuperAdmin($user);
    }

    public function view(User $user, AgencySubscription $agencySubscription): bool
    {
        return $this->isSuperAdmin($user);
    }

    public function create(User $user): bool
    {
        return $this->isSuperAdmin($user);
    }

    public function update(User $user, AgencySubscription $agencySubscription): bool
    {
        return $this->isSuperAdmin($user);
    }

    public function delete(User $user, AgencySubscription $agencySubscription): bool
    {
        return $this->isSuperAdmin($user);
    }

    public function restore(User $user, AgencySubscription $agencySubscription): bool
    {
        return $this->isSuperAdmin($user);
    }

    public function forceDelete(User $user, AgencySubscription $agencySubscription): bool
    {
        return $this->isSuperAdmin($user);
    }
}
