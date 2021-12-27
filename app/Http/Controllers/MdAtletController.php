<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MdAtletModel;

class MdAtletController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->MdAtlet = new MdAtletModel();
    }
    
    public function index()
    {
        // $param['search'] = "";
        
        $param['search'] = strtolower(request()->search) ? strtolower(request()->search) : "";
        $param['_token'] = strtolower(request()->_token) ? strtolower(request()->_token) : "";
        // $param['search'] = strtolower(request()->search);
        // $param['_token'] = strtolower(request()->_token);
        
        $data['md_atlet'] = $this->MdAtlet->get_all($param);
        return view('backend/b_md_atlet',$data);
    }
}
