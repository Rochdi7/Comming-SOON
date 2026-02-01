<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\VehicleBrand;
use App\Http\Requests\Backoffice\VehicleBrand\VehicleBrandStoreRequest;
use App\Http\Requests\Backoffice\VehicleBrand\VehicleBrandUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class VehicleBrandController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $brands = VehicleBrand::where('agency_id', Auth::user()->agency_id)
            ->latest()
            ->paginate(15);

        return view('Backoffice.vehicle-brands.index', compact('brands'));
    }

    public function create()
    {
        return view('Backoffice.vehicle-brands.create');
    }

    public function store(VehicleBrandStoreRequest $request)
    {
        $data = $request->validated();
        $data['agency_id'] = Auth::user()->agency_id;

        // Extract logo file from validated data
        $logo = $data['logo'] ?? null;
        unset($data['logo']);

        // Create brand with non-file fields
        $brand = VehicleBrand::create($data);

        // Attach logo to media collection if provided
        if ($logo) {
            $brand->addMediaFromRequest('logo')
                ->toMediaCollection('vehicle_brand_logo');
        }

        return redirect()
            ->route('Backoffice.vehicle-brands.index')
            ->with('toast', [
                'title'   => 'Created',
                'message' => 'Marque de véhicule créée avec succès.',
                'dot'     => '#198754', // green
                'delay'   => 3500,
                'time'    => 'now',
            ]);
    }

    public function show(VehicleBrand $vehicleBrand)
    {
        $this->authorize('view', $vehicleBrand);
        return view('Backoffice.vehicle-brands.show', compact('vehicleBrand'));
    }

    public function edit(VehicleBrand $vehicleBrand)
    {
        $this->authorize('update', $vehicleBrand);
        return view('Backoffice.vehicle-brands.edit', compact('vehicleBrand'));
    }

    public function update(VehicleBrandUpdateRequest $request, VehicleBrand $vehicleBrand)
    {
        $this->authorize('update', $vehicleBrand);

        $data = $request->validated();

        // Extract logo file from validated data
        $logo = $data['logo'] ?? null;
        unset($data['logo']);

        // Update non-file fields
        $vehicleBrand->update($data);

        // Handle logo update
        if ($logo) {
            $vehicleBrand->clearMediaCollection('vehicle_brand_logo');
            $vehicleBrand->addMediaFromRequest('logo')
                ->toMediaCollection('vehicle_brand_logo');
        }

        return redirect()
            ->route('Backoffice.vehicle-brands.index')
            ->with('toast', [
                'title'   => 'Updated',
                'message' => 'Marque de véhicule mise à jour avec succès.',
                'dot'     => '#0d6efd', // blue
                'delay'   => 3500,
                'time'    => 'now',
            ]);
    }

    public function destroy(VehicleBrand $vehicleBrand)
    {
        $this->authorize('delete', $vehicleBrand);

        $vehicleBrand->delete();

        return redirect()
            ->route('Backoffice.vehicle-brands.index')
            ->with('toast', [
                'title'   => 'Deleted',
                'message' => 'Marque de véhicule supprimée.',
                'dot'     => '#dc3545', // red
                'delay'   => 3500,
                'time'    => 'now',
            ]);
    }
}
