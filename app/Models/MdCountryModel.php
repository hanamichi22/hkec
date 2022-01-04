<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MdCountryModel extends Model
{
    function get_all($params){
        $md_country = DB::table('md_country')
                ->where(DB::raw('lower(name)'), 'like', '%' . strtolower(request()->search) . '%')
                ->OrWhere(DB::raw('lower(nicename)'), 'like', '%' . strtolower(request()->search) . '%')
                ->OrWhere(DB::raw('lower(phonecode)'), 'like', '%' . strtolower(request()->search) . '%')
                ->OrWhere(DB::raw('lower(iso)'), 'like', '%' . strtolower(request()->search) . '%')
                ->OrWhere(DB::raw('lower(iso3)'), 'like', '%' . strtolower(request()->search) . '%')
                ->orderBy('id', 'ASC')
                ->paginate(10);
        return $md_country;
    }
    function get_country($id){
        $md_country = DB::table('md_country')
                ->where('id',$id)
                ->first();
        return $md_country;
    }
    function insert_data($data){
        return DB::table('md_country')->insert($data);
    }
    function update_data($data,$id){
        return DB::table('md_country')->where('id',$id)->update($data);
    }
    function delete_data($id){
        return DB::delete("delete from md_country where id='".$id."'");
    }
}
