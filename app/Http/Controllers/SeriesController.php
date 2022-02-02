<?php

namespace App\Http\Controllers;
use App\Models\SeriesModel;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function __construct()
    {
        $this->SeriesModel = new SeriesModel();
    }
    public function listpesertanegara(){
        $data['peserta_negara'] = $this->SeriesModel->get_peserta_negara();
        return view('front/f_series_list_peserta_negara',$data);
    }
}
