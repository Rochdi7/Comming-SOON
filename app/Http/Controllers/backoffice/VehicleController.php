<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Models\VehicleModel;
use App\Http\Requests\Backoffice\Vehicle\VehicleStoreRequest;
use App\Http\Requests\Backoffice\Vehicle\VehicleUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class VehicleController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $vehicles = Vehicle::where('agency_id', Auth::user()->agency_id)
            ->with('model.brand')
            ->latest()
            ->paginate(15);

        return view('Backoffice.vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        $models = VehicleModel::where('agency_id', Auth::user()->agency_id)
            ->with('brand')
            ->orderBy('name')
            ->get();

        return view('Backoffice.vehicles.create', compact('models'));
    }

    public function store(VehicleStoreRequest $request)
    {
        $data = $request->validated();
        $data['agency_id'] = Auth::user()->agency_id;

        // Important: si le form envoie has_gps/has_air_conditioning via checkbox
        $data['has_gps'] = (bool) ($data['has_gps'] ?? false);
        $data['has_air_conditioning'] = (bool) ($data['has_air_conditioning'] ?? false);

        unset($data['photos'], $data['documents']);

        $vehicle = Vehicle::create($data);

        // Photos (multiple)
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $file) {
                if ($file) {
                    $vehicle->addMedia($file)->toMediaCollection('vehicle_photos');
                }
            }
        }

        // Documents (optional)
        if ($request->hasFile('documents')) {
            foreach ($request->file('documents') as $file) {
                if ($file) {
                    $vehicle->addMedia($file)->toMediaCollection('vehicle_documents');
                }
            }
        }

        return redirect()
            ->route('Backoffice.vehicles.show', $vehicle)
            ->with('success', 'Véhicule créé avec succès.');
    }

    public function show(Vehicle $vehicle)
    {
        $this->authorize('view', $vehicle);

        $vehicle->load('model.brand');

        return view('Backoffice.vehicles.show', compact('vehicle'));
    }

    public function edit(Vehicle $vehicle)
    {
        $this->authorize('update', $vehicle);

        $models = VehicleModel::where('agency_id', Auth::user()->agency_id)
            ->with('brand')
            ->orderBy('name')
            ->get();

        $vehicle->load('model.brand');

        return view('Backoffice.vehicles.edit', compact('vehicle', 'models'));
    }

    public function update(VehicleUpdateRequest $request, Vehicle $vehicle)
    {
        $this->authorize('update', $vehicle);

        $data = $request->validated();

        $data['has_gps'] = (bool) ($data['has_gps'] ?? false);
        $data['has_air_conditioning'] = (bool) ($data['has_air_conditioning'] ?? false);

        unset($data['photos'], $data['documents']);

        $vehicle->update($data);

        // Add new photos (append)
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $file) {
                if ($file) {
                    $vehicle->addMedia($file)->toMediaCollection('vehicle_photos');
                }
            }
        }

        // Add new documents (append)
        if ($request->hasFile('documents')) {
            foreach ($request->file('documents') as $file) {
                if ($file) {
                    $vehicle->addMedia($file)->toMediaCollection('vehicle_documents');
                }
            }
        }

        return redirect()
            ->route('Backoffice.vehicles.show', $vehicle)
            ->with('success', 'Véhicule mis à jour avec succès.');
    }

    public function destroy(Vehicle $vehicle)
    {
        $this->authorize('delete', $vehicle);

        $vehicle->delete();

        return redirect()
            ->route('Backoffice.vehicles.index')
            ->with('success', 'Véhicule supprimé.');
    }
}
