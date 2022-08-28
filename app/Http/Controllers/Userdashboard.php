<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Userdashboard extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $logged_in_user = Auth::user();
    }
}
