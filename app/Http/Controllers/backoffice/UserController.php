<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\backoffice\UserStoreRequest;
use App\Http\Requests\backoffice\UserUpdateRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('backoffice.users.index', compact('users'));
    }

    public function create()
    {
        return view('backoffice.users.create');
    }

    public function store(UserStoreRequest $request)
    {
        User::create([
            'agency_id' => $request->agency_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('backoffice.users.index')
            ->with('success', 'Utilisateur créé avec succès.');
    }

    public function edit(User $user)
    {
        return view('backoffice.users.edit', compact('user'));
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $data = $request->validated();

        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        return redirect()
            ->route('backoffice.users.index')
            ->with('success', 'Utilisateur mis à jour avec succès.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()
            ->route('backoffice.users.index')
            ->with('success', 'Utilisateur supprimé.');
    }
}
