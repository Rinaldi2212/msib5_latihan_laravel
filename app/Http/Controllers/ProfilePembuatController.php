<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilePembuatController extends Controller
{
    public function index()
    {
        return view('profile_pembuat');
    }
}
