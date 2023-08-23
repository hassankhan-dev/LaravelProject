<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function showHome(string $name=''){
        
        return view("home",['name'=>$name]);
    }

    function showProperties(){
        $data = "khurram";
        if($data==""){
            return redirect()->route('home');
        }else{

            return view('properties',['data'=>$data]);
        }

    }

    function showDetail(){
        return view('details');
    }

    function Showcontact(){
        return view('contact');
    }
}
