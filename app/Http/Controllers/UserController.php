<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;

class UserController extends Controller
{
    public function userindex()
    {
        $homedata= Home::all();
        $aboutdata= About::all();
        $experiencetdata= Experience::all();
        $educationdata= Education::all();
        $skilldata= Skill::all();
        $servicedata= Service::all();
        $projectdata= Project::all();
        $clientdata= Client::all();
        $blogdata= Blog::all();


        return view('user.index',compact('homedata','aboutdata','experiencetdata','educationdata','skilldata','servicedata','projectdata','clientdata','blogdata'));

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
