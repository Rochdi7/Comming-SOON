<?php

namespace App\Policies;

use App\Models\User;
use App\Models\VehicleBrand;

class VehicleBrandPolicy
{
    /**
     * Delete the vehicle brand.
     */
    public function delete(User $user, VehicleBrand $vehicleBrand): bool
    {
        return $user->agency_id === $vehicleBrand->agency_id;
    }

    /**
     * Update the vehicle brand.
     */
    public function update(User $user, VehicleBrand $vehicleBrand): bool
    {
        return $user->agency_id === $vehicleBrand->agency_id;
    }

    /**
     * View the vehicle brand.
     */
    public function view(User $user, VehicleBrand $vehicleBrand): bool
    {
        return $user->agency_id === $vehicleBrand->agency_id;
    }
}
