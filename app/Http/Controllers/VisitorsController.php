<?php

namespace App\Http\Controllers;

use App\Courses;
use App\gallerysprite;
use App\Ourservice;
use App\Newsletter;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Staff;


class VisitorsController extends Controller
{
    //
    public function index(){
        $data =[];
        $courses = Courses::all();
        $services = Ourservice::all();
        $data['title']="Nanocodes Programming Limited";
        $data['services'] = $services ;
        $data['courses'] = $courses ;

       return view('visitors.index', $data);
    }

    public function about (){
        $data =[];
        $data['title']="About Nanocodes Programming Limited";
        $courses = Courses::all();
        $services = Ourservice::all();
        $allstaff =Staff::all();
        $data['services'] = $services ;
        $data['courses'] = $courses ;
        $data['allstaff'] = $allstaff ;
        return view('visitors.about' ,$data);
    }


    public function coinbuy (){
        $data =[];
        $data['title']="Buy Coins from Nanocodes Programming Limited";
        return view('visitors.buycoin' ,$data);
    }
    public function coinsell (){
        $data =[];
        $data['title']="Sell coin to Nanocodes Programming Limited";
        return view('visitors.sellcoin' ,$data);
    }
    public function course (){
        $data =[];
        $data['title']="Courses offered in Nanocodes Programming Limited";
        return view('visitors.article' ,$data);
    }
    public function cointransactions (){
        $data =[];
        $data['title']="Transactions";
        return view('visitors.cointransaction' ,$data);
    }
    public function gallery (){
        $data =[];
        $data['title']="Nanocodes Programming Limited Gallery";
        $ourgallery = gallerysprite::all()->join('students','students.id','gallerysprites.studentid')->get();
        $data['ourgallery']= $ourgallery;

        return view('visitors.gallery' ,$data);
    }
    public function coinqr (){
        $data =[];
        $data['title']="Transation QRcode";
        return view('visitors.about' ,$data);
    }
    // public function about (){
    //     $data =[];
    //     $data['title']="About Nanocodes Programming Limited";
    //     return view('visitors.about' ,$data);
    // }


    public function visitorssubscribe (Request $req){

        $email = $req->email;
        $newnewsletter = new Newsletter();
        $newnewsletter->email =$email;
        if ($newnewsletter->save()) {
            # code...
            Alert::success('success'," Newsletter subscription was succesful");
            return back();
        }
        else{
            Alert::error('error'," Newsletter subscription encountered an error please try again later or contact support");
            return back();
        }
    }
}
