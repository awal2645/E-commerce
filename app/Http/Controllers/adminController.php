<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
 function adminPage(){
     return view('adminDash');
 }
}
