<?php

namespace App\Http\Controllers\Backoffice\Vehicles;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Models\VehicleControl;
use App\Models\User;
use App\Http\Requests\Backoffice\VehicleControl\VehicleControlStoreRequest;
use App\Http\Requests\Backoffice\VehicleControl\VehicleControlUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ControlController extends Controller
{
    use AuthorizesRequests;

    public function index(Vehicle $vehicle)
    {
        $this->authorize('view', $vehicle);

        $controls = $vehicle->controls()
            ->with('performedBy')
            ->latest()
            ->paginate(15);

        return view('Backoffice.vehicles.controls.index', compact('vehicle', 'controls'));
    }

    public function create(Vehicle $vehicle)
    {
        $this->authorize('update', $vehicle);

        $users = User::where('agency_id', Auth::user()->agency_id)
            ->where('status', 'active')
            ->orderBy('name')
            ->get();

        return view('Backoffice.vehicles.controls.create', compact('vehicle', 'users'));
    }

    public function store(VehicleControlStoreRequest $request, Vehicle $vehicle)
    {
        $this->authorize('update', $vehicle);

        $data = $request->validated();
        $data['vehicle_id'] = $vehicle->id;
        $data['agency_id'] = Auth::user()->agency_id;

        VehicleControl::create($data);

        return redirect()
            ->route('Backoffice.vehicles.controls.index', $vehicle)
            ->with('success', 'Contrôle de véhicule créé avec succès.');
    }

    public function show(Vehicle $vehicle, VehicleControl $control)
    {
        $this->authorize('view', $vehicle);
        $this->verifyResource($vehicle, $control);

        return view('Backoffice.vehicles.controls.show', compact('vehicle', 'control'));
    }

    public function edit(Vehicle $vehicle, VehicleControl $control)
    {
        $this->authorize('update', $vehicle);
        $this->verifyResource($vehicle, $control);

        $users = User::where('agency_id', Auth::user()->agency_id)
            ->where('status', 'active')
            ->orderBy('name')
            ->get();

        return view('Backoffice.vehicles.controls.edit', compact('vehicle', 'control', 'users'));
    }

    public function update(VehicleControlUpdateRequest $request, Vehicle $vehicle, VehicleControl $control)
    {
        $this->authorize('update', $vehicle);
        $this->verifyResource($vehicle, $control);

        $control->update($request->validated());

        return redirect()
            ->route('Backoffice.vehicles.controls.show', [$vehicle, $control])
            ->with('success', 'Contrôle de véhicule mis à jour avec succès.');
    }

    public function destroy(Vehicle $vehicle, VehicleControl $control)
    {
        $this->authorize('delete', $vehicle);
        $this->verifyResource($vehicle, $control);

        $control->delete();

        return redirect()
            ->route('Backoffice.vehicles.controls.index', $vehicle)
            ->with('success', 'Contrôle de véhicule supprimé.');
    }

    private function verifyResource(Vehicle $vehicle, VehicleControl $control)
    {
        if ($control->vehicle_id !== $vehicle->id) {
            abort(404);
        }
    }
}
