<?php

namespace App\Http\Controllers\BackendController;

use App\Models\MdSeriesModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MdSeriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->MdSeries = new MdSeriesModel();
    }
    public function index()
    {
        $param['search'] = strtolower(request()->search) ? strtolower(request()->search) : "";
        $param['_token'] = strtolower(request()->_token) ? strtolower(request()->_token) : "";
     
        $data['md_series'] = $this->MdSeries->get_all($param);
        return view('backend/b_md_series', $data);
    }
    public function add(){
        return view('backend/b_md_series_add');
    }
    public function add_ac(){
        Request()->validate([
            'name' => ['required', 'min:4', 'max:255'],
            'tanggal_mulai' => ['required', 'min:4', 'max:255'],
            'tanggal_selesai' => ['required', 'min:4', 'max:255'],
            'location' => ['required', 'min:1', 'max:255'],
         ]);

        
        $data = [
            'name' => request()->name,
            'location' => request()->location,
            'tanggal_mulai' => request()->tanggal_mulai,
            'tanggal_selesai' => request()->tanggal_selesai,
        ];

        $this->MdSeries->insert_data($data);
        return redirect('/mdseries')->with('pesan','Data Berhasil di tambahkan');
    }
    public function edit($id){
        $data['md_series'] = $this->MdSeries->get_series($id);
        return view('backend/b_md_series_edit',$data);
    }
    public function edit_ac(){
        Request()->validate([
            'name' => ['required', 'min:4', 'max:255'],
            'tanggal_mulai' => ['required', 'min:4', 'max:255'],
            'tanggal_selesai' => ['required', 'min:4', 'max:255'],
            'location' => ['required', 'min:1', 'max:255'],
         ]);

        
        $data = [
            'name' => request()->name,
            'location' => request()->location,
            'tanggal_mulai' => request()->tanggal_mulai,
            'tanggal_selesai' => request()->tanggal_selesai,
        ];

        $this->MdSeries->update_data($data,request()->id);
        return redirect('/mdseries')->with('pesan','Data Berhasil di update');
    }
    public function delete_ac($id){
        $this->MdSeries->deleteData($id);
        return redirect('/mdseries')->with('pesan','Data Berhasil di hapus');
    }
}
