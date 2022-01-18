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
    public function praeventdanpromosi($kategori)
    {
        $data['kategori'] = $kategori;
        if($kategori == 'swim'){
            $data['kategori_text'] = "Swimming";
            $data['folder_kategori_text'] = "swimming";
        }elseif($kategori == 'cycle'){
            $data['kategori_text'] = "Cycling";
            $data['folder_kategori_text'] = "cycling";
        }else{
            $data['kategori_text'] = "Running";
            $data['folder_kategori_text'] = "running";
        }
        return view('front/f_praeventdanpromosi',$data);
    }
}
