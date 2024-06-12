<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pembeli.profile.edit', compact('user'));
    }
}
