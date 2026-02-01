<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agency;
use App\Http\Requests\Backoffice\User\UserStoreRequest;
use App\Http\Requests\Backoffice\User\UserUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('agency')->paginate(10);
        return view('backoffice.users.index', compact('users'));
    }

    public function create()
    {
        $agencies = Agency::all();
        return view('backoffice.users.create', compact('agencies'));
    }

    public function store(UserStoreRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        User::create($data);

        return redirect()->route('backoffice.users.index')->with('success', 'Utilisateur créé avec succès.');
    }

    public function show(User $user)
    {
        return view('backoffice.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $agencies = Agency::all();
        return view('backoffice.users.edit', compact('user', 'agencies'));
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

        return redirect()->route('backoffice.users.index')->with('success', 'Utilisateur mis à jour avec succès.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('backoffice.users.index')->with('success', 'Utilisateur supprimé avec succès.');
    }
}
