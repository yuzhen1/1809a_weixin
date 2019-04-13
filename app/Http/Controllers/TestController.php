<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TestController extends Controller
{
    public function show(){
        $data=DB::table('User')->first();
//        var_dump($data);die;
        return view('test/show',compact('data'));
    }
}
