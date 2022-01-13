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
    public function add(){
        $data['md_country'] = $this->MdAtlet->get_country_all();
        return view('backend/b_md_atlet_add',$data);
    }
    public function add_ac(){
        Request()->validate([
            'name' => ['required', 'min:4', 'max:255'],
            'id_country' => ['required'],
            'group' => ['required', 'min:4', 'max:30'],
            'continent' => ['required', 'min:4', 'max:10'],
            'city' => ['required', 'min:4', 'max:10'],
            'gender' => ['required'],
            'photo' => ['required','mimes:jpg,jfif,jpeg,bmp,png'],
         ]);

        $file = request()->photo;
        $fileName = md5(date('Y-m-d h:i:s')).'.'.$file->extension();
        $file->move(public_path('foto_atlet'),$fileName);
        
        $data = [
            'name' => request()->name,
            'id_country' => request()->id_country,
            'group' => request()->group,
            'continent' => request()->continent,
            'city' => request()->city,
            'gender' => request()->gender,
            'photo' => $fileName
        ];

        $this->MdAtlet->insert_atlet($data);
        return redirect('/mdatlet')->with('pesan','Data Berhasil di tambahkan');
    }
    public function edit($id){
        $data['md_atlet'] = $this->MdAtlet->get_atlet($id);
        $data['md_country'] = $this->MdAtlet->get_country_all();
        // print_r($data['md_country']);
        return view('backend/b_md_atlet_edit',$data);
    }
    public function edit_ac(){
        Request()->validate([
            'name' => ['required', 'min:4', 'max:255'],
            'id_country' => ['required'],
            'group' => ['required', 'min:4', 'max:30'],
            'continent' => ['required', 'min:4', 'max:10'],
            'city' => ['required', 'min:4', 'max:10'],
            'gender' => ['required'],
            'photo' => ['mimes:jpg,jfif,jpeg,bmp,png'],
         ]);

        
        $data = [
            'name' => request()->name,
            'id_country' => request()->id_country,
            'group' => request()->group,
            'continent' => request()->continent,
            'city' => request()->city,
            'gender' => request()->gender
        ];

        if(request()->photo <> ""){
            $file = request()->photo;
            $fileName = md5(date('Y-m-d h:i:s')).'.'.$file->extension();
            $file->move(public_path('foto_atlet'),$fileName);
            $data = array_merge($data, ['photo'=>$fileName]);

            if(file_exists(public_path("foto_atlet").'/'.request()->photo)){
                unlink(public_path("foto_atlet").'/'.request()->photo);
            }
        }

        $this->MdAtlet->update_atlet($data,request()->id);
        return redirect('/mdatlet')->with('pesan','Data Berhasil di update');
    }
    public function delete_ac($id){
        $photo = $this->MdAtlet->get_atlet($id)->photo;
        
        if ($photo != "") {
            if(file_exists(public_path("foto_atlet").'/'.$photo_lama)){
                # code...
                unlink(public_path("foto_atlet").'/'.$photo_lama);
            }
        }
        $this->MdAtlet->deleteData($id);
        return redirect('/mdatlet')->with('pesan','Data Berhasil di hapus');
    }
}
