<?php

namespace App\Http\Controllers;

use App\Models\Perjalanan;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index( )
    {
        $data=[
            'petugas'=> user::where('role','Admin')->count(),
            'pengguna'=> user::where('role','user')->count(),
            'perjalanan'=> Perjalanan::all()->count(),
        ];
        return view('admin.home',$data);
    }

    public function profile( )
    {
        return view('admin.user.profil');
    }
}
