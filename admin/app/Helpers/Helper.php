<?php

namespace App\Helpers;
use DB;
use Illuminate\Database\Eloquent\Model;

class Helper{
    public static function getHomepageLoans($id=null){
        $value = DB::table('con_medicine')->where('id', $id)->get();
		return $value;
    }

    public static function get_volunter_by_id($id=null){
        $value = DB::table('our_volunteers')->where('id', 4)->first();
		return $value;
    }
    
}