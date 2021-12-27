<?php

namespace App\Http\Controllers;

use App\Models\MdCountryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MdCountryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->MdCountry = new MdCountryModel();
    }
    
    public function index()
    {
        $param['search'] = strtolower(request()->search) ? strtolower(request()->search) : "";
        $param['_token'] = strtolower(request()->_token) ? strtolower(request()->_token) : "";
     
        $data['md_country'] = $this->MdCountry->get_all($param);
        return view('backend/b_md_country', $data);
    }
    public function filter(){
    }
}
