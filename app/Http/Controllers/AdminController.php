<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Home;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminindex()
    {
        $contactdata= Contact::all();


        return view('admin.index',compact('contactdata'));

    }





// home functionality

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

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            if ($image->isValid()) {
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move('aboutimage', $imageName);
                $data->image = $imageName;
            } else {
                return redirect()->back()->with('error', 'Invalid file.');
            }
        }

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



// experience functionality

public function addexperienceinfo()
{
    return view('admin.addexperienceinfo');
}
public function addexperienceinfostore(Request $request)
{
    $data = new Experience;

    $data->title = $request->title;
    $data->company = $request->company;
    $data->period = $request->period;
    $data->details = $request->details;


    $data->save();

    return redirect()->back()->with('message', 'About request successful. We will contact you soon.');
}

public function viewexperienceinfo()
{
    return view('admin.viewexperienceinfo');
}

public function showexperienceinfo()
{
    $data= Experience::all();
    return view('admin.viewexperienceinfo',compact('data'));
}

public function editexperienceinfo()
{
    return view('admin.editexperienceinfo');
}



// education functionality

public function addeducationinfo()
{
    return view('admin.addeducationinfo');
}
public function addeducationinfostore(Request $request)
{
    $data = new Education;

    $data->exam_name = $request->exam_name;
    $data->exam_year = $request->exam_year;
    $data->institute = $request->institute;
    $data->details = $request->details;


    $data->save();

    return redirect()->back()->with('message', 'About request successful. We will contact you soon.');
}

public function vieweducationinfo()
{
    return view('admin.vieweducationinfo');
}

public function showeducationinfo()
{
    $data= About::all();
    return view('admin.vieweducationinfo',compact('data'));
}

public function editeducationinfo()
{
    return view('admin.editaboutinfo');
}



// skill functionality

public function addskillinfo()
{
    return view('admin.addskillinfo');
}
public function addskillinfostore(Request $request)
{
    $data = new Skill;

    $data->title = $request->title;
    $data->percentage = $request->percentage;

    $data->save();

    return redirect()->back()->with('message', 'About request successful. We will contact you soon.');
}

public function viewskillinfo()
{
    return view('admin.viewaboutinfo');
}

public function showskillinfo()
{
    $data= About::all();
    return view('admin.viewaboutinfo',compact('data'));
}

public function editskillinfo()
{
    return view('admin.editaboutinfo');
}



// service functionality

public function addserviceinfo()
{
    return view('admin.addserviceinfo');
}
public function addserviceinfostore(Request $request)
{
    $data = new Service;

    $data->title = $request->title;
    $data->details = $request->details;



    $data->save();

    return redirect()->back()->with('message', 'About request successful. We will contact you soon.');
}

public function viewserviceinfo()
{
    return view('admin.viewaboutinfo');
}

public function showserviceinfo()
{
    $data= About::all();
    return view('admin.viewaboutinfo',compact('data'));
}

public function editserviceinfo()
{
    return view('admin.editaboutinfo');
}



// project functionality

public function addprojectinfo()
{
    return view('admin.addprojectinfo');
}
public function addprojectinfostore(Request $request)
{
    $data = new Project;

    $data->project_name = $request->projectname;


    if ($request->hasFile('file')) {
        $image = $request->file('file');
        if ($image->isValid()) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('projectimage', $imageName);
            $data->project_image = $imageName;
        } else {
            return redirect()->back()->with('error', 'Invalid file.');
        }
    }

    $data->save();

    return redirect()->back()->with('message', 'Home request successful. We will contact you soon.');
}

public function viewprojectinfo()
{
    return view('admin.viewaboutinfo');
}

public function showprojectinfo()
{
    $data= About::all();
    return view('admin.viewaboutinfo',compact('data'));
}

public function editprojectinfo()
{
    return view('admin.editaboutinfo');
}



// client functionality

public function addclientinfo()
{
    return view('admin.addclientinfo');
}
public function addclientinfostore(Request $request)
{
    $data = new Client;

    $data->name = $request->name;
    $data->profession = $request->profession;
    $data->say = $request->say;


    if ($request->hasFile('file')) {
        $image = $request->file('file');
        if ($image->isValid()) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('clientimage', $imageName);
            $data->image = $imageName;
        } else {
            return redirect()->back()->with('error', 'Invalid file.');
        }
    }

    $data->save();

    return redirect()->back()->with('message', 'Home request successful. We will contact you soon.');
}

public function viewclientinfo()
{
    return view('admin.viewaboutinfo');
}

public function showclientinfo()
{
    $data= About::all();
    return view('admin.viewaboutinfo',compact('data'));
}

public function editclientinfo()
{
    return view('admin.editaboutinfo');
}



// blog functionality

public function addbloginfo()
{
    return view('admin.addbloginfo');
}
public function addbloginfostore(Request $request)
{
    $data = new Blog;

    $data->day = $request->day;
    $data->month = $request->month;
    $data->content = $request->content;


    if ($request->hasFile('file')) {
        $image = $request->file('file');
        if ($image->isValid()) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('blogimage', $imageName);
            $data->image = $imageName;
        } else {
            return redirect()->back()->with('error', 'Invalid file.');
        }
    }

    $data->save();

    return redirect()->back()->with('message', 'Home request successful. We will contact you soon.');
}

public function viewbloginfo()
{
    return view('admin.viewaboutinfo');
}

public function showbloginfo()
{
    $data= About::all();
    return view('admin.viewaboutinfo',compact('data'));
}

public function editbloginfo()
{
    return view('admin.editaboutinfo');
}







}
