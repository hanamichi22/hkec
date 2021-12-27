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
}
