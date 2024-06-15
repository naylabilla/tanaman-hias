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
        $request->validated();

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $user = $request->user();
        $foto = $user->foto;

        if ($foto) {
            if ($request->hasFile('foto')) {

                //upload foto baru
                $image = $request->file('foto');
                $image->storeAs('public/assets/images/profile', $image->hashName());
                //delete old image
                Storage::delete('public/assets/images/profile/' . $foto);

                // Mengisi data
                $request->user()->fill($request->validated());
                $request->user()->foto = $image->hashName();

                //update profile dengan foto baru
                $request->user()->save();
            } else {
                //update profile tanpa foto
                $user->update([
                    'nama' => $request->nama_pengguna,
                    'email' => $request->email,
                    'nomor_hp' => $request->nomor_hp,
                    'alamat' => $request->alamat,
                ]);
            }
        } else {
            if ($request->hasFile('foto')) {

                //upload foto
                $image = $request->file('foto');
                $image->storeAs('public/assets/images/profile', $image->hashName());

                $request->user()->fill($request->validated());
                $request->user()->foto = $image->hashName();

                //update profile dengan foto baru
                $request->user()->save();
            } else {
                //update profile tanpa foto
                $user->update([
                    'nama' => $request->nama_pengguna,
                    'email' => $request->email,
                    'nomor_hp' => $request->nomor_hp,
                    'alamat' => $request->alamat,
                ]);
            }
        }

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
}