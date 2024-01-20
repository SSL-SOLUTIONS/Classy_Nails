<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function about(){
        return view('website.about');
    }

    public function contact(){
        return view('website.contact');
}

public function blogs(){
    return view('website.blogs');
}
 public function privacypolicies(){
    return view('website.privacy');
 }
 public function termsconditions(){
 return view('website.termsconditions');}
}
