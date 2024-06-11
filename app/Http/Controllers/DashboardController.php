<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $role = Auth()->user()->role;

            if ($role == 'admin') {
                return view('admin.beranda_penjual');
            } elseif ($role == 'pembeli') {
                return view('pembeli.dashboard');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
}
