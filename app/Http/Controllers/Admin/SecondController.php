<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SecondController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('auth')->except('showString2');
    }

    public function showString(){
        return "Islam String";
    }

    public function showString2(){
        return "Islam String22222";
    }
}
