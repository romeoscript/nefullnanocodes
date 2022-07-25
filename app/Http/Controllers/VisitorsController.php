<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    //
    public function index(){
       return view('visitors.index');
    }

    public function about (){
        return view('visitors.about');
    }
}
