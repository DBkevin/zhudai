<?php

namespace App\Http\Controllers;

use App\Models\Huishou;
use App\Http\Requests\HuishouReuqest;
class recycleController extends Controller
{
    //
    public function index(){
        return view('huishou.index');
    }
    public function  store(HuishouReuqest $request){
        $data=$request->validated();
        $huishou=new Huishou();
        foreach($data as $key=>$value){
            $huishou[$key]=$value;
        }
        $huishou->save();
        return response(array('success' => true));
    }
}
