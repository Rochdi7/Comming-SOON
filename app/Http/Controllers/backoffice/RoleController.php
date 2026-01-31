<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backoffice\Role\RoleStoreRequest;
use App\Http\Requests\Backoffice\Role\RoleUpdateRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $query = Role::query()
            ->where('guard_name', 'backoffice')
            ->withCount('permissions')
            ->orderBy('name');

        if ($search = trim((string) $request->get('q'))) {
            $query->where('name', 'like', "%{$search}%");
        }

        $roles = $query->paginate(15)->withQueryString();

        return view('backoffice.roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::query()
            ->where('guard_name', 'backoffice')
            ->orderBy('name')
            ->get();

        return view('backoffice.roles.create', compact('permissions'));
    }

    public function store(RoleStoreRequest $request)
    {
        $data = $request->validated();

        $role = Role::create([
            'name'       => $data['name'],
            'guard_name' => 'backoffice',
        ]);

        $permissionIds = $data['permissions'] ?? [];
        if (!empty($permissionIds)) {
            $permissions = Permission::where('guard_name', 'backoffice')
                ->whereIn('id', $permissionIds)
                ->get();

            $role->syncPermissions($permissions);
        }

        return redirect()
            ->route('backoffice.roles-permissions.index', ['tab' => 'roles'])
            ->with('toast', [
                'title'   => 'Création réussie',
                'message' => "Le rôle « {$role->name} » a été créé avec succès.",
                'dot'     => 'success',
                'delay'   => 4500,
                'time'    => now()->format('H:i'),
            ]);
    }

    public function show(Role $role)
    {
        abort_unless($role->guard_name === 'backoffice', 404);

        $role->load('permissions');

        return view('backoffice.roles.show', compact('role'));
    }

    public function edit(Role $role)
    {
        abort_unless($role->guard_name === 'backoffice', 404);

        $permissions = Permission::query()
            ->where('guard_name', 'backoffice')
            ->orderBy('name')
            ->get();

        $role->load('permissions');
        $assigned = $role->permissions->pluck('id')->all();

        return view('backoffice.roles.edit', compact('role', 'permissions', 'assigned'));
    }

    public function update(RoleUpdateRequest $request, Role $role)
    {
        abort_unless($role->guard_name === 'backoffice', 404);

        $data = $request->validated();

        $role->update([
            'name' => $data['name'],
        ]);

        $permissionIds = $data['permissions'] ?? [];
        $permissions = Permission::where('guard_name', 'backoffice')
            ->whereIn('id', $permissionIds)
            ->get();

        $role->syncPermissions($permissions);

        return redirect()
            ->route('backoffice.roles-permissions.index', ['tab' => 'roles'])
            ->with('toast', [
                'title'   => 'Modification réussie',
                'message' => "Le rôle « {$role->name} » a été mis à jour avec succès.",
                'dot'     => 'info',
                'delay'   => 4500,
                'time'    => now()->format('H:i'),
            ]);
    }

    public function destroy(Role $role)
    {
        abort_unless($role->guard_name === 'backoffice', 404);

        if (in_array($role->name, ['super-admin', 'super_admin', 'Super Admin'], true)) {
            return back()->with('toast', [
                'title'   => 'Action refusée',
                'message' => "Le rôle « {$role->name} » ne peut pas être supprimé.",
                'dot'     => 'warning',
                'delay'   => 5000,
                'time'    => now()->format('H:i'),
            ]);
        }

        $name = $role->name;
        $role->delete();

        return redirect()
            ->route('backoffice.roles-permissions.index', ['tab' => 'roles'])
            ->with('toast', [
                'title'   => 'Suppression réussie',
                'message' => "Le rôle « {$name} » a été supprimé avec succès.",
                'dot'     => 'danger',
                'delay'   => 4500,
                'time'    => now()->format('H:i'),
            ]);
    }
}
