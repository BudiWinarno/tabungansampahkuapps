<?php

namespace App\Http\Controllers;

use App\Models\ManagementPengguna;
use Illuminate\Http\Request;

class ManagementpenggunaController extends Controller
{
    public function index()
    {
        $managementpengguna = ManagementPengguna::latest()->get();

        return view(
            'dashboard.managementpengguna.index',
            compact('managementpengguna')
        );
    }

    public function create()
    {
        return view(
            'dashboard.managementpengguna.create'
        );
    }
}
