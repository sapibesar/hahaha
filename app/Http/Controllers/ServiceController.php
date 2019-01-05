<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function view(){

        return view('member/services');
    }

    public function search(Request $request){
        $province = $request->input('provinsi');
        $year = $request->input('tahun');
        //$fishdata = DB::select('select * from ? where tahun = ?',['aceh', '2013']);

        $fishdata = DB::table($province)->where('tahun', $year)->get();

        return view('member/serviceData', compact('fishdata'));
    }
}
