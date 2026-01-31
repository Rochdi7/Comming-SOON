<?php

namespace App\Http\Controllers\Backoffice\Vehicles;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Models\VehicleTechnicalCheck;
use App\Http\Requests\Backoffice\VehicleTechnicalCheck\VehicleTechnicalCheckStoreRequest;
use App\Http\Requests\Backoffice\VehicleTechnicalCheck\VehicleTechnicalCheckUpdateRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TechnicalCheckController extends Controller
{
    use AuthorizesRequests;
    public function index(Vehicle $vehicle)
    {
        $this->authorize('view', $vehicle);

        $technicalChecks = $vehicle->technicalChecks()
            ->latest()
            ->paginate(15);

        return view('backoffice.vehicles.technical-checks.index', compact('vehicle', 'technicalChecks'));
    }

    public function create(Vehicle $vehicle)
    {
        $this->authorize('update', $vehicle);
        return view('backoffice.vehicles.technical-checks.create', compact('vehicle'));
    }

    public function store(VehicleTechnicalCheckStoreRequest $request, Vehicle $vehicle)
    {
        $this->authorize('update', $vehicle);

        $data = $request->validated();
        $data['vehicle_id'] = $vehicle->id;

        // Remove documents from main data
        $documents = $data['documents'] ?? null;
        unset($data['documents']);

        $technicalCheck = VehicleTechnicalCheck::create($data);

        // Handle document uploads via Media Library
        if ($documents) {
            foreach ($documents as $document) {
                $technicalCheck->addMediaFromRequest('documents')
                    ->toMediaCollection('technical_check_documents');
            }
        }

        return redirect()
            ->route('backoffice.vehicles.technical-checks.index', $vehicle)
            ->with('success', 'Visite technique créée avec succès.');
    }

    public function edit(Vehicle $vehicle, VehicleTechnicalCheck $technicalCheck)
    {
        $this->authorize('update', $vehicle);
        $this->verifyResource($vehicle, $technicalCheck);

        return view('backoffice.vehicles.technical-checks.edit', compact('vehicle', 'technicalCheck'));
    }

    public function update(VehicleTechnicalCheckUpdateRequest $request, Vehicle $vehicle, VehicleTechnicalCheck $technicalCheck)
    {
        $this->authorize('update', $vehicle);
        $this->verifyResource($vehicle, $technicalCheck);

        $data = $request->validated();

        // Remove documents from main data
        $documents = $data['documents'] ?? null;
        unset($data['documents']);

        $technicalCheck->update($data);

        // Handle document uploads via Media Library
        if ($documents) {
            foreach ($documents as $document) {
                $technicalCheck->addMediaFromRequest('documents')
                    ->toMediaCollection('technical_check_documents');
            }
        }

        return redirect()
            ->route('backoffice.vehicles.technical-checks.index', $vehicle)
            ->with('success', 'Visite technique mise à jour avec succès.');
    }

    public function destroy(Vehicle $vehicle, VehicleTechnicalCheck $technicalCheck)
    {
        $this->authorize('delete', $vehicle);
        $this->verifyResource($vehicle, $technicalCheck);

        $technicalCheck->delete();

        return redirect()
            ->route('backoffice.vehicles.technical-checks.index', $vehicle)
            ->with('success', 'Visite technique supprimée.');
    }

    private function verifyResource(Vehicle $vehicle, VehicleTechnicalCheck $technicalCheck)
    {
        if ($technicalCheck->vehicle_id !== $vehicle->id) {
            abort(404);
        }
    }
}
