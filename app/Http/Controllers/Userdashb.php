<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Coursereview;
use App\Courses;
use App\gallerysprite;
use App\Paidcourses;
use App\Students;

class Userdashb extends Controller
{

    public function __construct()
    {
        $this->middleware('Isstudent');
    }

    public function dashboardindex (){
        $data = [];
        $data['title'] = "student dashboard";
        $user = Students::where('email', Auth::user()->email)->first();
        if ($user == null) {
            # code...
            Alert::error("Account validation failed", "Please croscheck your registered emails! we can not log you into student dashboard");
            return back()->with("error", "Please croscheck your registered emails! we can not log you into student dashboard");

        }
        $studentcourse = Paidcourses::where('studentid',$user->id)->first();
        $allcourses = Courses::all();

        $data['studentcourse'] = $studentcourse;
        $data['allcourses'] = $allcourses;
        $data['studentid'] = $user->id;
        $data['title'] = "student dashboard";
        return view('dashboard.dashindex', $data);
    }

    public function studentstory(Request $req){

        $pictitle = $req->pictitle;
        $description = $req->description;
        $skill = $req->skill;
        $user = Students::where('email', Auth::user()->email)->first();
        if ($user == null) {
            # code...
            Alert::error("Account validation failed", "Please croscheck your registered emails!");
            return back();
        }



        $file_extension = $req->file('pic')->getClientOriginalExtension();
        if ($file_extension == "jpg") {
            # code...
            $save_file_extension = "jpg";
        } elseif ($file_extension == "jpeg") {
            # code...
            $save_file_extension = "jpeg";
        } elseif ($file_extension == "pdf") {
            # code...
            $save_file_extension = "pdf";
        } elseif ($file_extension == "doc") {
            # code...
            $save_file_extension = "doc";
        } else {
            $save_file_extension = "png";
        }
        $fileName = time() . $skill . '.' . $save_file_extension;
        $path = $req->file('pic')->storeAS("gallery", $fileName);
        /* Store $fileName name in DATABASE from HERE */

        $addgallery = new gallerysprite();

        $addgallery->description = $description;
        $addgallery->pictitle = $pictitle;
        $addgallery->skill = $?;
        $addgallery->pic = $fileName;
        $addgallery->studentid = $user->id;


        if ($addgallery->save()) {
            # code...
            Alert::success("Story created succesfully", "Story have been created please wait for automatic approval to complete!");
            return back();
        }
        else{
            Alert::erroe("Story creation failed", "Story failed to create please conatct admin for help!");
            return back();
        }




    }

    public function postreview (Request $req) {

        $userpic = Students::where('email', Auth::user()->email)->first();

        $courseid = $req->courseid;
        $review = $req->review;
        $star = $req->star;
        $user = Students::where('email', Auth::user()->email)->first();
        if ($user == null) {
            # code...
            Alert::error("Account validation failed", "Please croscheck your registered emails!")
            return back();
        }


        $newreview= new Coursereview();
        $newreview->review = $review;
        $newreview->name = Auth::user()->name;
        $newreview->star = $star;
        $newreview->pic = $userpic->studentpassport;
        $newreview->courseid = $courseid;
        if ($newreview->save()) {
            # code...
            Alert::success("Success", "the course review was added");
            return back();
        } else {
            # code...
            Alert::error("Error adding the course review", " the course review was not added");
            return back();
        }

    }
}
