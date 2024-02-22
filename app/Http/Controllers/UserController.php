<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class UserController extends Controller
{
    public function userindex()
    {
        $data= Home::all();


        return view('user.index',compact('data'));

    }






}
