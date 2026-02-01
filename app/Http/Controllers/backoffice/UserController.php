<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backoffice\User\UserStoreRequest;
use App\Http\Requests\Backoffice\User\UserUpdateRequest;
use App\Models\Agency;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    use AuthorizesRequests;

    public function index(): View
    {
        $this->authorize('viewAny', User::class);

        /** @var \App\Models\User $currentUser */
        $currentUser = Auth::guard('backoffice')->user();

        $query = User::query();

        // Multi-tenant: agency admin sees only their agency users
        if (!$currentUser->hasRole('super-admin')) {
            $query->where('agency_id', $currentUser->agency_id);
        }

        $users = $query->latest()->paginate(15);

        // ✅ IMPORTANT: agencies needed for modals in index (create/edit)
        $agencies = collect();
        if ($currentUser->hasRole('super-admin')) {
            $agencies = Agency::query()->orderBy('name')->get();
        }

        return view('Backoffice.users.index', compact('users', 'agencies'));
    }

    public function create(): View
    {
        $this->authorize('create', User::class);

        /** @var \App\Models\User $currentUser */
        $currentUser = Auth::guard('backoffice')->user();

        $agencies = collect();
        if ($currentUser->hasRole('super-admin')) {
            $agencies = Agency::query()->orderBy('name')->get();
        }

        return view('Backoffice.users.create', compact('agencies'));
    }

    public function store(UserStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', User::class);

        /** @var \App\Models\User $currentUser */
        $currentUser = Auth::guard('backoffice')->user();

        $data = $request->validated();

        // Force agency_id for non super-admin
        if (!$currentUser->hasRole('super-admin')) {
            $data['agency_id'] = $currentUser->agency_id;
        }

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        // ✅ Media Library avatar
        if ($request->hasFile('avatar')) {
            $user->addMediaFromRequest('avatar')->toMediaCollection('avatar');
        }

        return redirect()
            ->route('backoffice.users.index')
            ->with('toast', [
                'title'   => 'Création réussie',
                'message' => "L'utilisateur « {$user->name} » a été créé avec succès.",
                'dot'     => '#198754',
                'delay'   => 3500,
                'time'    => 'now',
            ]);
    }

    public function show(User $user): View
    {
        $this->authorize('view', $user);

        /** @var \App\Models\User $currentUser */
        $currentUser = Auth::guard('backoffice')->user();

        if (!$currentUser->hasRole('super-admin') && $user->agency_id !== $currentUser->agency_id) {
            abort(403);
        }

        return view('Backoffice.users.show', compact('user'));
    }

    public function edit(User $user): View
    {
        $this->authorize('update', $user);

        /** @var \App\Models\User $currentUser */
        $currentUser = Auth::guard('backoffice')->user();

        if (!$currentUser->hasRole('super-admin') && $user->agency_id !== $currentUser->agency_id) {
            abort(403);
        }

        $agencies = collect();
        if ($currentUser->hasRole('super-admin')) {
            $agencies = Agency::query()->orderBy('name')->get();
        }

        return view('Backoffice.users.edit', compact('user', 'agencies'));
    }

    public function update(UserUpdateRequest $request, User $user): RedirectResponse
    {
        $this->authorize('update', $user);

        /** @var \App\Models\User $currentUser */
        $currentUser = Auth::guard('backoffice')->user();

        if (!$currentUser->hasRole('super-admin') && $user->agency_id !== $currentUser->agency_id) {
            abort(403);
        }

        $data = $request->validated();

        // Force agency_id for non super-admin
        if (!$currentUser->hasRole('super-admin')) {
            $data['agency_id'] = $currentUser->agency_id;
        }

        // Password optional in update
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        // ✅ Remove avatar if requested
        if ($request->boolean('remove_avatar')) {
            $user->clearMediaCollection('avatar');
        }

        // ✅ Replace avatar if uploaded
        if ($request->hasFile('avatar')) {
            $user->clearMediaCollection('avatar');
            $user->addMediaFromRequest('avatar')->toMediaCollection('avatar');
        }

        return redirect()
            ->route('backoffice.users.index')
            ->with('toast', [
                'title'   => 'Modification réussie',
                'message' => "L'utilisateur « {$user->name} » a été modifié avec succès.",
                'dot'     => '#0d6efd',
                'delay'   => 3500,
                'time'    => 'now',
            ]);
    }

    public function destroy(User $user): RedirectResponse
    {
        $this->authorize('delete', $user);

        /** @var \App\Models\User $currentUser */
        $currentUser = Auth::guard('backoffice')->user();

        if (!$currentUser->hasRole('super-admin') && $user->agency_id !== $currentUser->agency_id) {
            abort(403);
        }

        $name = $user->name;

        $user->delete();

        return redirect()
            ->route('backoffice.users.index')
            ->with('toast', [
                'title'   => 'Suppression réussie',
                'message' => "L'utilisateur « {$name} » a été supprimé avec succès.",
                'dot'     => '#dc3545',
                'delay'   => 3500,
                'time'    => 'now',
            ]);
    }
}
