<?php

//namespace App\Http\Controllers;
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function showUserName()
    {
        return 'Islam Sameh';
    }

    public function getIndex()
    {
        $data=[];
        $data['id']=10;
        $data['name']='Islam Sameh';
        return view('welcome', $data);
    }

}
