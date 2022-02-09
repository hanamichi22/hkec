<?php

namespace App\Http\Controllers\BackendController;

use App\Models\MdCountryModel;
use App\Http\Controllers\Controller;

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
    public function add(){
        return view('backend/b_md_country_add');
    }
    public function edit($id){
        $data['md_country'] = $this->MdCountry->get_country($id);
        return view('backend/b_md_country_edit',$data);
    }
    
    public function add_ac(){
        Request()->validate([
            'iso' => ['required','max:2'],
            'name' => ['required', 'min:4', 'max:255'],
            'nicename' => ['required', 'min:4', 'max:255'],
            'iso3' => ['required', 'max:3'],
            'numcode' => ['required', 'max:6'],
            'phonecode' => ['required', 'max:5'],
            'photo' => ['mimes:jpg,jfif,jpeg,bmp,png'],
         ]);

        $file = request()->photo;
        $fileName = md5(date('Y-m-d h:i:s')).'.'.$file->extension();
        $file->move(public_path('foto_country'),$fileName);
        
        $data = [
            'iso' => request()->iso,
            'name' => request()->name,
            'nicename' => request()->nicename,
            'iso3' => request()->iso3,
            'numcode' => request()->numcode,
            'phonecode' => request()->phonecode,
            'photo' => $fileName
        ];

        $this->MdCountry->insert_data($data);
        return redirect('/mdcountry')->with('pesan','Data Berhasil di tambahkan');
    }
    
    public function edit_ac(){
        Request()->validate([
            'iso' => ['required','max:2'],
            'name' => ['required', 'min:4', 'max:255'],
            'nicename' => ['required', 'min:4', 'max:255'],
            'iso3' => ['required', 'max:3'],
            'numcode' => ['required', 'max:6'],
            'phonecode' => ['required', 'max:5'],
            'photo' => ['mimes:jpg,jfif,jpeg,bmp,png'],
         ]);

        $data = [
            'iso' => request()->iso,
            'name' => request()->name,
            'nicename' => request()->nicename,
            'iso3' => request()->iso3,
            'numcode' => request()->numcode,
            'phonecode' => request()->phonecode,
        ];

        if(request()->photo <> ""){
            $file = request()->photo;
            $fileName = md5(date('Y-m-d h:i:s')).'.'.$file->extension();
            $file->move(public_path('foto_country'),$fileName);
            $data = array_merge($data, ['photo'=>$fileName]);

            if(file_exists(public_path("foto_country").'/'.request()->photo_lama)){
                unlink(public_path("foto_country").'/'.request()->photo_lama);
            }
         }

        $this->MdCountry->update_data($data,request()->id);
        return redirect('/mdcountry')->with('pesan','Data Berhasil di update');
    }
    public function delete_ac($id){
        $photo_lama = $this->MdCountry->get_atlet($id)->photo;
        
        if ($photo_lama != "") {
            if(file_exists(public_path("foto_atlet").'/'.$photo_lama)){
                # code...
                unlink(public_path("foto_atlet").'/'.$photo_lama);
            }
        }
        $this->MdCountry->deleteData($id);
        return redirect('/mdcountry')->with('pesan','Data Berhasil di hapus');
    }
}
