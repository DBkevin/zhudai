<?php

namespace App\Http\Controllers;

use App\Models\Hot;
use Illuminate\Http\Request;

class HotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hot=Hot::all()->first();
        
        return view('hot.index',compact('hot'));
    }

}
