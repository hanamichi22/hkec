<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BackendModel\BLegModel;

class BLegController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->BLeg = new BLegModel();
    }
    public function index()
    {
        $param['search'] = strtolower(request()->search) ? strtolower(request()->search) : "";
        $param['_token'] = strtolower(request()->_token) ? strtolower(request()->_token) : "";
        
        $data['BLeg'] = $this->BLeg->get_all($param);
        return view('backend/b_leg',$data);
    }
    public function add(){
        $data['md_series'] = $this->BLeg->get_series_all();
        return view('backend/b_leg_add',$data);
    }
    public function add_ac(){
        Request()->validate([
            'name' => ['required', 'min:4', 'max:255'],
            'id_series' => ['required'],
            'photo' => ['required','mimes:jpg,jfif,jpeg,bmp,png'],
         ]);

        $file = request()->photo;
        $fileName = md5(date('Y-m-d h:i:s')).'.'.$file->extension();
        $file->move(public_path('leg'),$fileName);
        
        $data = [
            'name' => request()->name,
            'id_series' => request()->id_series,
            'photo' => $fileName
        ];

        $this->BLeg->insert_data($data);
        return redirect('/bleg')->with('pesan','Data Berhasil di tambahkan');
    }
    public function edit($id){
        $data['bleg'] = $this->BLeg->get_leg($id);
        $data['md_series'] = $this->BLeg->get_series_all();
        // print_r($data['md_country']);
        return view('backend/b_leg_edit',$data);
    }
    public function edit_ac(){
        Request()->validate([
            'name' => ['required', 'min:4', 'max:255'],
            'id_series' => ['required'],
            'photo' => ['mimes:jpg,jfif,jpeg,bmp,png'],
        ]);

         
        $data = [
             'name' => request()->name,
             'id_series' => request()->id_series,
        ];
            
        if(request()->photo <> ""){
            $file = request()->photo;
            $fileName = md5(date('Y-m-d h:i:s')).'.'.$file->extension();
            $file->move(public_path('leg'),$fileName);
            $data = array_merge($data, ['photo'=>$fileName]);

            if(file_exists(public_path("leg").'/'.request()->photo)){
                unlink(public_path("leg").'/'.request()->photo);
            }
        }
        

        $this->BLeg->update_data($data,request()->id);
        return redirect('/bleg')->with('pesan','Data Berhasil di update');
    }
    public function delete_ac($id){
        $photo = $this->BLeg->get_leg($id)->photo;
        
        if ($photo != "") {
            if(file_exists(public_path("leg").'/'.$photo)){
                # code...
                unlink(public_path("leg").'/'.$photo);
            }
        }
        $this->BLeg->deleteData($id);
        return redirect('/bleg')->with('pesan','Data Berhasil di hapus');
    }
}
