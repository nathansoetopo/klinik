<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getData(Request $request)
    {
        dd($request);
        // foreach($request->obat as $key => $d){
        //     echo $d['obat'];
        // }
    }
}
