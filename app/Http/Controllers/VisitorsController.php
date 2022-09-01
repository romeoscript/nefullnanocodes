<?php

namespace App\Http\Controllers;

use App\Courseoutline;
use App\Coursereview;
use App\Courses;
use App\Enquiries;
use App\gallerysprite;
use App\Ourservice;
use App\Newsletter;
use App\Paidcourses;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Staff;
use App\Whatyouwilllearn;
use Webkul\Product\Helpers\Review;

class VisitorsController extends Controller
{
    public $enquiryemail = "";
    //
    public function index()
    {
        $data = [];
        $courses = Courses::all();
        $services = Ourservice::all();
        $data['title'] = "Nanocodes Programming Limited";
        $data['services'] = $services;
        $data['courses'] = $courses;

        return view('visitors.index', $data);
    }

    public function about()
    {
        $data = [];
        $data['title'] = "About Nanocodes Programming Limited";
        $courses = Courses::all();
        $services = Ourservice::all();
        $allstaff = Staff::all();
        $data['services'] = $services;
        $data['courses'] = $courses;
        $data['allstaff'] = $allstaff;
        return view('visitors.about', $data);
    }

    public function contact()
    {
        $data = [];
        $data['title'] = "contact Nanocodes Programming Limited";
        return view('visitors.contact', $data);
    }
    public function contactcreate(Request $req)
    {

        $name = $req->name;
        $email = $req->email;
        $subject = $req->subject;
        $message = $req->message;
        $newenq = new Enquiries();
        $newenq->name = $name;
        $newenq->email = $email;
        $newenq->title = $subject;
        $newenq->message = $message;

        $emaildata = ['data' => $email, 'email_body' => $message, 'email_header' => $subject];
        if ($newenq->save()) {
            # code...
            $wasmailsent =  Mail::to($this->enquiryemail)->send(new Sendnanomail($emaildata));
            Alert::success('success', " Your message have been sent");
            return back();
        } else {
            # code...
            $wasmailsent =  Mail::to($this->enquiryemail)->send(new Sendnanomail($emaildata));
            Alert::error('success', " Error encountered while trying to send your message");
            return back();
        }



        $data = [];
        $data['title'] = "contact Nanocodes Programming Limited";
    }



    public function coinbuy()
    {
        $data = [];
        $data['title'] = "Buy Coins from Nanocodes Programming Limited";
        return view('visitors.buycoin', $data);
    }

    public function coinsell()
    {
        $data = [];
        $data['title'] = "Sell coin to Nanocodes Programming Limited";
        return view('visitors.sellcoin', $data);
    }

    public function cointransactions()
    {
        $data = [];
        $data['title'] = "Transactions";
        return view('visitors.cointransaction', $data);
    }
    public function gallery()
    {
        $data = [];
        $data['title'] = "Nanocodes Programming Limited Gallery";
        $ourgallery = gallerysprite::join('students', 'students.id', 'gallerysprites.studentid')->get();
        $data['ourgallery'] = $ourgallery;

        return view('visitors.gallery', $data);
    }
    public function coinqr()
    {
        $data = [];
        $data['title'] = "Transation QRcode";
        return view('visitors.about', $data);
    }
    // public function about (){
    //     $data =[];
    //     $data['title']="About Nanocodes Programming Limited";
    //     return view('visitors.about' ,$data);
    // }


    public function visitorssubscribe(Request $req)
    {

        $email = $req->email;
        $newnewsletter = new Newsletter();
        $newnewsletter->email = $email;
        if ($newnewsletter->save()) {
            # code...
            Alert::success('success', " Newsletter subscription was succesful");
            return back();
        } else {
            Alert::error('error', " Newsletter subscription encountered an error please try again later or contact support");
            return back();
        }
    }

    public function course(Request $req)
    {

        $id = $req->course;
        $data = [];
        $courses = Courses::where('id', $id)->first();
        $wywl = Whatyouwilllearn::where('courseid', $courses->id)->get();
        $coutline = Courseoutline::where('courseid', $courses->id)->get();
        $reviews = Coursereview::where('courseid', $courses->id)->get();
        $paidcourses = Paidcourses::where('courseid', $courses->id)->get();
        $tutor = Staff::where('name', $courses->tutor)->first();

        $data['title'] = " $courses->course at Nanocodes Programming Limited";
        $data['courses'] = $courses;
        $data['coutline'] = $coutline;
        $data['reviews'] = $reviews;
        $data['wywl'] = $wywl;
        $data['paidcourses'] = $paidcourses;
        $data['tutor'] = $tutor;

        return view('visitors.article', $data);
    }
}
