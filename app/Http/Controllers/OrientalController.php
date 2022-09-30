<?php

namespace App\Http\Controllers;
use App\Models\Stok;
use Illuminate\Http\Request;

class OrientalController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function profil()
    {
        $data = Stok::all();
        return view('profil', ['data' => $data]);
    }

    public function booking()
    {
        return view('booking');
    }
}
