<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResepRequest;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getData(ResepRequest $request)
    {
        $payload = $request->validated();
        return $payload['obat'];
        // foreach($request->obat as $key => $d){
        //     echo $d['obat'];
        // }
    }
}
