<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MdAtletModel extends Model
{
    function get_all($params){
        $md_atlet = DB::table('md_atlet')
            ->select('md_atlet.*','md_country.name as cts')
            ->join('md_country', 'md_atlet.id_country', '=', DB::raw('CAST(md_country.id as text)'))
                ->where(DB::raw('lower(md_atlet.name)'), 'like', '%' . strtolower($params['search']) . '%')
                ->OrWhere(DB::raw('lower(md_country.name)'), 'like', '%' . strtolower($params['search']) . '%')
                ->paginate(10);
        return $md_atlet;
    }
    function get_atlet($id){
        $md_atlet = DB::table('md_atlet')->where('id',$id)->first();
        return $md_atlet;
    }
    function get_country_all(){
        $md_country = DB::table('md_country')->orderBy('name', 'asc')->get();
        return $md_country;
    }
    function insert_atlet($data){
        return DB::table('md_atlet')->insert($data);
    }
    function update_atlet($data,$id){
        return  DB::table('md_atlet')->where('id',$id)->update($data);
    }
    function deleteData($id){
        return DB::delete("delete from md_atlet where id='".$id."'");
    }
    
}
