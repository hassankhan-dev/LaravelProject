<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    function showAdminHome(){
        return view('admin.adminhome');
    }

    function showAdminAdd(){
        return view('admin.adminadd');
    }
}
