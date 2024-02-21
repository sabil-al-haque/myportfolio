<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminindex()
    {

        return view('admin.index');

    }


    public function addhomeinfo()
    {
        return view('admin.addhomeinfo');
    }

    public function viewhomeinfo()
    {
        return view('admin.viewhomeinfo');
    }

    public function edithomeinfo()
    {
        return view('admin.edithomeinfo');
    }





    public function addaboutinfo()
    {
        return view('admin.addaboutinfo');
    }

    public function viewaboutinfo()
    {
        return view('admin.viewaboutinfo');
    }

    public function editaboutinfo()
    {
        return view('admin.editaboutinfo');
    }






}
