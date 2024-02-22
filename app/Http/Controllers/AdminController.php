<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Home;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminindex()
    {

        return view('admin.index');

    }





// about functionality

    public function addhomeinfo()
    {
        return view('admin.addhomeinfo');
    }

    // public function viewhomeinfo()
    // {
    //     return view('admin.viewhomeinfo');
    // }

    public function showhomeinfo()
    {
        $data= Home::all();


        return view('admin.viewhomeinfo',compact('data'));
    }


    public function addhomeinfostore(Request $request)
    {
        $data = new Home;

        $data->name = $request->name;


        if ($request->hasFile('file')) {
            $image = $request->file('file');
            if ($image->isValid()) {
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move('homeimage', $imageName);
                $data->image = $imageName;
            } else {
                return redirect()->back()->with('error', 'Invalid file.');
            }
        }

        $data->save();

        return redirect()->back()->with('message', 'Home request successful. We will contact you soon.');
    }





    public function edithomeinfo()
    {
        return view('admin.edithomeinfo');
    }



// about functionality

    public function addaboutinfo()
    {
        return view('admin.addaboutinfo');
    }


    public function addaboutinfostore(Request $request)
    {
        $data = new About;

        $data->title = $request->title;
        $data->content = $request->content;
        $data->name = $request->name;
        $data->birthday = $request->birthday;
        $data->degree = $request->degree;
        $data->experience = $request->experience;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->freelance = $request->freelance;

        $data->save();

        return redirect()->back()->with('message', 'About request successful. We will contact you soon.');
    }



    public function viewaboutinfo()
    {
        return view('admin.viewaboutinfo');
    }

    public function showaboutinfo()
    {
        $data= About::all();


        return view('admin.viewaboutinfo',compact('data'));
    }

    public function editaboutinfo()
    {
        return view('admin.editaboutinfo');
    }







}
