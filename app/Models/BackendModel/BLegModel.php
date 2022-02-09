<?php

namespace App\Models\BackendModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BLegModel extends Model
{
    function get_all($params){
        $bleg = DB::table('md_leg')
            ->select('md_leg.*','md_series.name as series_name')
            ->join('md_series', 'md_leg.id_series', '=', 'md_series.id')
                ->where(DB::raw('lower(md_leg.name)'), 'like', '%' . strtolower($params['search']) . '%')
                ->OrWhere(DB::raw('lower(md_series.name)'), 'like', '%' . strtolower($params['search']) . '%')
                ->paginate(10);
        return $bleg;
    }
    function get_leg($id){
        return DB::table('md_leg')->where('id',$id)->first();
    }
    function get_series_all(){
        return DB::table('md_series')->orderBy('name', 'asc')->get();
    }
    function insert_data($data){
        return DB::table('md_leg')->insert($data);
    }
    function update_data($data,$id){
        return  DB::table('md_leg')->where('id',$id)->update($data);
    }
    function deleteData($id){
        return DB::delete("delete from md_leg where id='".$id."'");
    }
}
