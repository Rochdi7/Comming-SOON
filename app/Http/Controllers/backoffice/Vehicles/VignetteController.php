<?php

namespace App\Http\Controllers\Backoffice\Vehicles;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Models\VehicleVignette;
use App\Http\Requests\Backoffice\VehicleVignette\VehicleVignetteStoreRequest;
use App\Http\Requests\Backoffice\VehicleVignette\VehicleVignetteUpdateRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class VignetteController extends Controller
{
    use AuthorizesRequests;

    public function index(Vehicle $vehicle)
    {
        // $this->authorize('view', $vehicle);

        $vignettes = $vehicle->vignettes()
            ->latest()
            ->paginate(15);

        return view('backoffice.vehicles.vignettes.index', compact('vehicle', 'vignettes'));
    }

    public function create(Vehicle $vehicle)
    {
        $this->authorize('update', $vehicle);
        return view('backoffice.vehicles.vignettes.create', compact('vehicle'));
    }

    public function store(VehicleVignetteStoreRequest $request, Vehicle $vehicle)
    {
        $this->authorize('update', $vehicle);

        $data = $request->validated();
        $data['vehicle_id'] = $vehicle->id;

        VehicleVignette::create($data);

        return redirect()
            ->route('backoffice.vehicles.vignettes.index', $vehicle)
            ->with('success', 'Vignette créée avec succès.');
    }

    public function edit(Vehicle $vehicle, VehicleVignette $vignette)
    {
        $this->authorize('update', $vehicle);
        $this->verifyResource($vehicle, $vignette);

        return view('backoffice.vehicles.vignettes.edit', compact('vehicle', 'vignette'));
    }

    public function update(VehicleVignetteUpdateRequest $request, Vehicle $vehicle, VehicleVignette $vignette)
    {
        $this->authorize('update', $vehicle);
        $this->verifyResource($vehicle, $vignette);

        $vignette->update($request->validated());

        return redirect()
            ->route('backoffice.vehicles.vignettes.index', $vehicle)
            ->with('success', 'Vignette mise à jour avec succès.');
    }

    public function destroy(Vehicle $vehicle, VehicleVignette $vignette)
    {
        $this->authorize('delete', $vehicle);
        $this->verifyResource($vehicle, $vignette);

        $vignette->delete();

        return redirect()
            ->route('backoffice.vehicles.vignettes.index', $vehicle)
            ->with('success', 'Vignette supprimée.');
    }

    private function verifyResource(Vehicle $vehicle, VehicleVignette $vignette)
    {
        if ($vignette->vehicle_id !== $vehicle->id) {
            abort(404);
        }
    }
}
