<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CrudController extends Controller
{
    public function insert($table,$data){
        // echo '<pre>';
        // print_r($data);
        // die;
        DB::table($table)->insert($data);
        return true;
    }

    public function update($table,$id,$data){
        // echo '<pre>';
        // print_r($data);
        // echo $id;
        // die;
        DB::table($table)->where('id', $id)->update($data);
        return true;
	}
    public function delete($table,$id){
        DB::table($table)->where('id',$id)->delete();
        return true;
    }
}
