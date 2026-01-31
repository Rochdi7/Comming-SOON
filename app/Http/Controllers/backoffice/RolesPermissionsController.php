<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesPermissionsController extends Controller
{
    public function index(Request $request)
    {
        $q = trim((string) $request->get('q'));

$rolesQuery = Role::query()
    ->where('guard_name', 'backoffice')
    ->with(['permissions:id,name,guard_name'])
    ->orderBy('name');

if ($q !== '') {
    $rolesQuery->where('name', 'like', "%{$q}%");
}

$roles = $rolesQuery->get();


        $permissionsQuery = Permission::query()
            ->where('guard_name', 'backoffice')
            ->orderBy('name');

        if ($q !== '') {
            $permissionsQuery->where('name', 'like', "%{$q}%");
        }

        $permissions = $permissionsQuery->paginate(10)->withQueryString();

        $allPermissions = Permission::query()
            ->where('guard_name', 'backoffice')
            ->orderBy('name')
            ->get();

        return view('Backoffice.roles-permissions.index', compact('roles', 'permissions', 'allPermissions'));
    }
}
