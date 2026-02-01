<?php

namespace App\Http\Controllers\Backoffice\Vehicles;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Models\VehicleOilChange;
use App\Http\Requests\Backoffice\VehicleOilChange\VehicleOilChangeStoreRequest;
use App\Http\Requests\Backoffice\VehicleOilChange\VehicleOilChangeUpdateRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class OilChangeController extends Controller
{
    use AuthorizesRequests;
    public function index(Vehicle $vehicle)
    {
        $this->authorize('view', $vehicle);

        $oilChanges = $vehicle->oilChanges()
            ->latest()
            ->paginate(15);

        return view('Backoffice.vehicles.oil-changes.index', compact('vehicle', 'oilChanges'));
    }

    public function create(Vehicle $vehicle)
    {
        $this->authorize('update', $vehicle);
        return view('Backoffice.vehicles.oil-changes.create', compact('vehicle'));
    }

    public function store(VehicleOilChangeStoreRequest $request, Vehicle $vehicle)
    {
        $this->authorize('update', $vehicle);

        $data = $request->validated();
        $data['vehicle_id'] = $vehicle->id;

        VehicleOilChange::create($data);

        return redirect()
            ->route('Backoffice.vehicles.oil-changes.index', $vehicle)
            ->with('success', 'Vidange d\'huile créée avec succès.');
    }

    public function edit(Vehicle $vehicle, VehicleOilChange $oilChange)
    {
        $this->authorize('update', $vehicle);
        $this->verifyResource($vehicle, $oilChange);

        return view('Backoffice.vehicles.oil-changes.edit', compact('vehicle', 'oilChange'));
    }

    public function update(VehicleOilChangeUpdateRequest $request, Vehicle $vehicle, VehicleOilChange $oilChange)
    {
        $this->authorize('update', $vehicle);
        $this->verifyResource($vehicle, $oilChange);

        $oilChange->update($request->validated());

        return redirect()
            ->route('Backoffice.vehicles.oil-changes.index', $vehicle)
            ->with('success', 'Vidange d\'huile mise à jour avec succès.');
    }

    public function destroy(Vehicle $vehicle, VehicleOilChange $oilChange)
    {
        $this->authorize('delete', $vehicle);
        $this->verifyResource($vehicle, $oilChange);

        $oilChange->delete();

        return redirect()
            ->route('Backoffice.vehicles.oil-changes.index', $vehicle)
            ->with('success', 'Vidange d\'huile supprimée.');
    }

    private function verifyResource(Vehicle $vehicle, VehicleOilChange $oilChange)
    {
        if ($oilChange->vehicle_id !== $vehicle->id) {
            abort(404);
        }
    }
}
