<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backoffice\UpdateProfileRequest;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('Backoffice.profile.profile-setting');
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = $request->user();

        $user->update([
            'name'  => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        if ($request->filled('password')) {
            $user->update([
                'password' => $request->password,
            ]);
        }

        if ($request->hasFile('avatar')) {
            $user->clearMediaCollection('avatar');

            $user->addMediaFromRequest('avatar')
                ->toMediaCollection('avatar'); // ✅ disk sera pris depuis la collection
        }

        return back()->with('success', 'Profile updated successfully.');
    }
}
