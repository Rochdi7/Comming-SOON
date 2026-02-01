<?php

namespace App\Http\Controllers\Backoffice\Vehicles;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Models\VehicleInsurance;
use App\Http\Requests\Backoffice\VehicleInsurance\VehicleInsuranceStoreRequest;
use App\Http\Requests\Backoffice\VehicleInsurance\VehicleInsuranceUpdateRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class InsuranceController extends Controller
{
    use AuthorizesRequests;
    public function index(Vehicle $vehicle)
    {
        $this->authorize('view', $vehicle);

        $insurances = $vehicle->insurances()
            ->latest()
            ->paginate(15);

        return view('Backoffice.vehicles.insurances.index', compact('vehicle', 'insurances'));
    }

    public function create(Vehicle $vehicle)
    {
        $this->authorize('update', $vehicle);
        return view('Backoffice.vehicles.insurances.create', compact('vehicle'));
    }

    public function store(VehicleInsuranceStoreRequest $request, Vehicle $vehicle)
    {
        $this->authorize('update', $vehicle);

        $data = $request->validated();
        $data['vehicle_id'] = $vehicle->id;

        // Remove documents from main data
        $documents = $data['documents'] ?? null;
        unset($data['documents']);

        $insurance = VehicleInsurance::create($data);

        // Handle document uploads via Media Library
        if ($documents) {
            foreach ($documents as $document) {
                $insurance->addMediaFromRequest('documents')
                    ->toMediaCollection('insurance_documents');
            }
        }

        return redirect()
            ->route('Backoffice.vehicles.insurances.index', $vehicle)
            ->with('success', 'Assurance créée avec succès.');
    }

    public function edit(Vehicle $vehicle, VehicleInsurance $insurance)
    {
        $this->authorize('update', $vehicle);
        $this->verifyResource($vehicle, $insurance);

        return view('Backoffice.vehicles.insurances.edit', compact('vehicle', 'insurance'));
    }

    public function update(VehicleInsuranceUpdateRequest $request, Vehicle $vehicle, VehicleInsurance $insurance)
    {
        $this->authorize('update', $vehicle);
        $this->verifyResource($vehicle, $insurance);

        $data = $request->validated();

        // Remove documents from main data
        $documents = $data['documents'] ?? null;
        unset($data['documents']);

        $insurance->update($data);

        // Handle document uploads via Media Library
        if ($documents) {
            foreach ($documents as $document) {
                $insurance->addMediaFromRequest('documents')
                    ->toMediaCollection('insurance_documents');
            }
        }

        return redirect()
            ->route('Backoffice.vehicles.insurances.index', $vehicle)
            ->with('success', 'Assurance mise à jour avec succès.');
    }

    public function destroy(Vehicle $vehicle, VehicleInsurance $insurance)
    {
        $this->authorize('delete', $vehicle);
        $this->verifyResource($vehicle, $insurance);

        $insurance->delete();

        return redirect()
            ->route('Backoffice.vehicles.insurances.index', $vehicle)
            ->with('success', 'Assurance supprimée.');
    }

    private function verifyResource(Vehicle $vehicle, VehicleInsurance $insurance)
    {
        if ($insurance->vehicle_id !== $vehicle->id) {
            abort(404);
        }
    }
}
