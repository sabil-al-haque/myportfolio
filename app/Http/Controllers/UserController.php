<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Home;

class UserController extends Controller
{
    public function userindex()
    {
        $data= Home::all();


        return view('user.index',compact('data'));

    }



    public function addcontactinfostore(Request $request)
{
    $data = new Contact;

    $data->name = $request->name;
    $data->email = $request->email;
    $data->subject = $request->subject;
    $data->message = $request->message;



    $data->save();

    return redirect()->back()->with('message', 'About request successful. We will contact you soon.');
}






}
