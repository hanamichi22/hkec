<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;

class FhomeController extends Controller
{
    public function index()
    {
        $sponsors = Sponsor::latest()->get();
        return view('front.f_home', compact('sponsors'));
    }
}
