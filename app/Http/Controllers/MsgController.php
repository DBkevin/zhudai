<?php

namespace App\Http\Controllers;

use App\Models\msg;
use Illuminate\Http\Request;

class MsgController extends Controller
{
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        //
        $msg=new msg;
        $msg->product_name=$request->product_name;
        $msg->name=$request->name;
        $msg->phone=$request->phone;
        $msg->save();
    }

   
}
