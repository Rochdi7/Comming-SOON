<?php

namespace App\Policies;

use App\Models\Agency;
use App\Models\User;

class AgencyPolicy
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

    public function view(User $user, Agency $agency): bool
    {
        return $this->isSuperAdmin($user);
    }

    public function create(User $user): bool
    {
        return $this->isSuperAdmin($user);
    }

    public function update(User $user, Agency $agency): bool
    {
        return $this->isSuperAdmin($user);
    }

    public function delete(User $user, Agency $agency): bool
    {
        return $this->isSuperAdmin($user);
    }

    public function restore(User $user, Agency $agency): bool
    {
        return $this->isSuperAdmin($user);
    }

    public function forceDelete(User $user, Agency $agency): bool
    {
        return $this->isSuperAdmin($user);
    }
}
