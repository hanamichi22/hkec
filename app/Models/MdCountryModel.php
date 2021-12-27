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
                ->paginate(10);
        return $md_country;
    }
}
