<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SeriesModel extends Model
{
    public function get_peserta_negara(){
        return DB::table('md_country')->whereIn('id', array(100,169,177,226,95,80,199,73,150,58,105,3,223,103,206,13,172,177))->get();
    }
}
