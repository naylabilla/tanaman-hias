<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        return view('pembeli.profile.index', compact('user'));
    }
    public function edit(Request $request)
    {
        $user = $request->user();
        $foto = $user->foto;
        return view('pembeli.profile.edit', compact('user', 'foto'));
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // $request->user()->fill($request->validated());
        $request->validated();

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $user = $request->user();
        $foto = $request->user()->foto;

        if ($foto) {
            if ($request->hasFile('foto')) {

                //upload new image
                $image = $request->file('foto');
                $image->storeAs('public/assets/images/profile', $image->hashName());

                //delete old image
                Storage::delete('public/assets/images/profile/' . $foto);

                //update profile with new image
                $user->update([
                    'profile_name' => $request->profile_name,
                    'foto' => $image->hashName()
                ]);
            } else {

                //update category without image
                $user->update([
                    'category_name' => $request->category_name
                ]);
            }
        }


        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
}
