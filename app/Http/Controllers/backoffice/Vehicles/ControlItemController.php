<?php

namespace App\Http\Controllers\Backoffice\Vehicles;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Models\VehicleControl;
use App\Models\VehicleControlItem;
use App\Http\Requests\Backoffice\VehicleControlItem\VehicleControlItemStoreRequest;
use App\Http\Requests\Backoffice\VehicleControlItem\VehicleControlItemUpdateRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ControlItemController extends Controller
{
    use AuthorizesRequests;

    public function index(Vehicle $vehicle, VehicleControl $control)
    {
        $this->authorize('view', $vehicle);
        $this->verifyControl($vehicle, $control);

        $items = $control->items()->get();

        return view('Backoffice.vehicles.controls.items.index', compact('vehicle', 'control', 'items'));
    }

    public function create(Vehicle $vehicle, VehicleControl $control)
    {
        $this->authorize('update', $vehicle);
        $this->verifyControl($vehicle, $control);

        return view('Backoffice.vehicles.controls.items.create', compact('vehicle', 'control'));
    }

    public function store(VehicleControlItemStoreRequest $request, Vehicle $vehicle, VehicleControl $control)
    {
        $this->authorize('update', $vehicle);
        $this->verifyControl($vehicle, $control);

        $data = $request->validated();
        $data['vehicle_control_id'] = $control->id;

        VehicleControlItem::create($data);

        return redirect()
            ->route('Backoffice.vehicles.controls.items.index', [$vehicle, $control])
            ->with('success', 'Élément de contrôle créé avec succès.');
    }

    public function edit(Vehicle $vehicle, VehicleControl $control, VehicleControlItem $item)
    {
        $this->authorize('update', $vehicle);
        $this->verifyControl($vehicle, $control);
        $this->verifyItem($control, $item);

        return view('Backoffice.vehicles.controls.items.edit', compact('vehicle', 'control', 'item'));
    }

    public function update(VehicleControlItemUpdateRequest $request, Vehicle $vehicle, VehicleControl $control, VehicleControlItem $item)
    {
        $this->authorize('update', $vehicle);
        $this->verifyControl($vehicle, $control);
        $this->verifyItem($control, $item);

        $item->update($request->validated());

        return redirect()
            ->route('Backoffice.vehicles.controls.items.index', [$vehicle, $control])
            ->with('success', 'Élément de contrôle mis à jour avec succès.');
    }

    public function destroy(Vehicle $vehicle, VehicleControl $control, VehicleControlItem $item)
    {
        $this->authorize('delete', $vehicle);
        $this->verifyControl($vehicle, $control);
        $this->verifyItem($control, $item);

        $item->delete();

        return redirect()
            ->route('Backoffice.vehicles.controls.items.index', [$vehicle, $control])
            ->with('success', 'Élément de contrôle supprimé.');
    }

    private function verifyControl(Vehicle $vehicle, VehicleControl $control)
    {
        if ($control->vehicle_id !== $vehicle->id) {
            abort(404);
        }
    }

    private function verifyItem(VehicleControl $control, VehicleControlItem $item)
    {
        if ($item->vehicle_control_id !== $control->id) {
            abort(404);
        }
    }
}
