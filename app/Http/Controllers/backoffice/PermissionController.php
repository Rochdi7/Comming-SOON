<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backoffice\Permission\PermissionStoreRequest;
use App\Http\Requests\Backoffice\Permission\PermissionUpdateRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(Request $request)
    {
        $query = Permission::query()
            ->where('guard_name', 'backoffice')
            ->orderBy('name');

        if ($search = trim((string) $request->get('q'))) {
            $query->where('name', 'like', "%{$search}%");
        }

        $permissions = $query->paginate(200)->withQueryString();

        return view('Backoffice.permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('Backoffice.permissions.create');
    }

    public function store(PermissionStoreRequest $request)
    {
        $data = $request->validated();

        $permission = Permission::create([
            'name'       => $data['name'],
            'guard_name' => 'backoffice',
        ]);

        return redirect()
            ->route('Backoffice.roles-permissions.index', ['tab' => 'permissions'])
            ->with('toast', [
                'title'   => 'Création réussie',
                'message' => "La permission « {$permission->name} » a été créée avec succès.",
                'dot'     => 'success',
                'delay'   => 4500,
                'time'    => now()->format('H:i'),
            ]);
    }

    public function show(Permission $permission)
    {
        abort_unless($permission->guard_name === 'backoffice', 404);

        return view('Backoffice.permissions.show', compact('permission'));
    }

    public function edit(Permission $permission)
    {
        abort_unless($permission->guard_name === 'backoffice', 404);

        return view('Backoffice.permissions.edit', compact('permission'));
    }

    public function update(PermissionUpdateRequest $request, Permission $permission)
    {
        abort_unless($permission->guard_name === 'backoffice', 404);

        $data = $request->validated();

        $permission->update([
            'name' => $data['name'],
        ]);

        return redirect()
            ->route('Backoffice.roles-permissions.index', ['tab' => 'permissions'])
            ->with('toast', [
                'title'   => 'Modification réussie',
                'message' => "La permission « {$permission->name} » a été mise à jour avec succès.",
                'dot'     => 'info',
                'delay'   => 4500,
                'time'    => now()->format('H:i'),
            ]);
    }

    public function destroy(Permission $permission)
    {
        abort_unless($permission->guard_name === 'backoffice', 404);

        $name = $permission->name;
        $permission->delete();

        return redirect()
            ->route('Backoffice.roles-permissions.index', ['tab' => 'permissions'])
            ->with('toast', [
                'title'   => 'Suppression réussie',
                'message' => "La permission « {$name} » a été supprimée avec succès.",
                'dot'     => 'danger',
                'delay'   => 4500,
                'time'    => now()->format('H:i'),
            ]);
    }
}
