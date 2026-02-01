<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backoffice\VehicleModel\VehicleModelStoreRequest;
use App\Http\Requests\Backoffice\VehicleModel\VehicleModelUpdateRequest;
use App\Models\VehicleBrand;
use App\Models\VehicleModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class VehicleModelController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $models = VehicleModel::where('agency_id', Auth::user()->agency_id)
            ->with('brand')
            ->latest()
            ->paginate(15);

        $brands = VehicleBrand::where('agency_id', Auth::user()->agency_id)
            ->orderBy('name')
            ->get();

        return view('Backoffice.vehicle-models.index', compact('models', 'brands'));
    }

    public function create()
    {
        $brands = VehicleBrand::where('agency_id', Auth::user()->agency_id)
            ->orderBy('name')
            ->get();

        return view('Backoffice.vehicle-models.create', compact('brands'));
    }

    public function store(VehicleModelStoreRequest $request)
    {
        $data = $request->validated();
        $data['agency_id'] = Auth::user()->agency_id;

        VehicleModel::create($data);

        return redirect()
            ->route('Backoffice.vehicle-models.index')
            ->with('toast', [
                'title'   => 'Créé',
                'message' => 'Modèle de véhicule créé avec succès.',
                'dot'     => '#198754', // green
                'delay'   => 3500,
                'time'    => 'now',
            ]);
    }

    public function show(VehicleModel $vehicleModel)
    {
        $this->authorize('view', $vehicleModel);

        $vehicleModel->load('brand');

        return view('Backoffice.vehicle-models.show', compact('vehicleModel'));
    }

    public function edit(VehicleModel $vehicleModel)
    {
        $this->authorize('update', $vehicleModel);

        $brands = VehicleBrand::where('agency_id', Auth::user()->agency_id)
            ->orderBy('name')
            ->get();

        return view('Backoffice.vehicle-models.edit', compact('vehicleModel', 'brands'));
    }

    public function update(VehicleModelUpdateRequest $request, VehicleModel $vehicleModel)
    {
        $this->authorize('update', $vehicleModel);

        $vehicleModel->update($request->validated());

        return redirect()
            ->route('Backoffice.vehicle-models.index')
            ->with('toast', [
                'title'   => 'Mis à jour',
                'message' => 'Modèle de véhicule mis à jour avec succès.',
                'dot'     => '#0d6efd', // blue
                'delay'   => 3500,
                'time'    => 'now',
            ]);
    }

    public function destroy(VehicleModel $vehicleModel)
    {
        $this->authorize('delete', $vehicleModel);

        $vehicleModel->delete();

        return redirect()
            ->route('Backoffice.vehicle-models.index')
            ->with('toast', [
                'title'   => 'Supprimé',
                'message' => 'Modèle de véhicule supprimé.',
                'dot'     => '#dc3545', // red
                'delay'   => 3500,
                'time'    => 'now',
            ]);
    }
}
