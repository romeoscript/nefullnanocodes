<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    //
    public function index(){
        $data =[];
        $data['title']="Nanocodes Programming Limited";
       return view('visitors.index', $data);
    }

    public function about (){
        $data =[];
        $data['title']="About Nanocodes Programming Limited";
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
}
