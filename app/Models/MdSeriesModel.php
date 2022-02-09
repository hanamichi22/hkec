<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MdSeriesModel extends Model
{
    use HasFactory;
    function get_all($params){
        $md_series = DB::table('md_series')
                ->where(DB::raw('lower(name)'), 'like', '%' . strtolower(request()->search) . '%')
                ->orderBy('id', 'ASC')
                ->paginate(10);
        return $md_series;
    }
    function get_series($id){
        $md_series = DB::table('md_series')
                ->where('id',$id)
                ->first();
        return $md_series;
    }
    function insert_data($data){
        return DB::table('md_series')->insert($data);
    }
    function update_data($data,$id){
        return  DB::table('md_series')->where('id',$id)->update($data);
    }
    function deleteData($id){
        return DB::delete("delete from md_series where id='".$id."'");
    }
}
