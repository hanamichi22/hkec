<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MdCountryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $md_country = DB::table('md_country');
        $data = array('md_country' => $md_country);
        return view('backend/b_md_country', $data);
        // return view('backend/b_md_country');
    }
}
