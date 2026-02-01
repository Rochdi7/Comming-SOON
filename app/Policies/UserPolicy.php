<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Check if user is super admin
     */
    private function isSuperAdmin(?User $user): bool
    {
        return $user && $user->hasRole('super-admin', 'backoffice');
    }

    /**
     * Check if user can access another user (same agency or super-admin)
     */
    private function canAccess(?User $authUser, User $targetUser): bool
    {
        if ($this->isSuperAdmin($authUser)) {
            return true;
        }

        return $authUser
            && $authUser->agency_id === $targetUser->agency_id;
    }

    public function viewAny(User $user): bool
    {
        return true; // All logged-in users can view their own agency's users
    }

    public function view(User $user, User $targetUser): bool
    {
        return $this->canAccess($user, $targetUser);
    }

    public function create(User $user): bool
    {
        return true; // All logged-in users can create users (agency admin creates for their agency)
    }

    public function update(User $user, User $targetUser): bool
    {
        return $this->canAccess($user, $targetUser);
    }

    public function delete(User $user, User $targetUser): bool
    {
        return $this->canAccess($user, $targetUser);
    }

    public function restore(User $user, User $targetUser): bool
    {
        return $this->isSuperAdmin($user);
    }

    public function forceDelete(User $user, User $targetUser): bool
    {
        return $this->isSuperAdmin($user);
    }
}
