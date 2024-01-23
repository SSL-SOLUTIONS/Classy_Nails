<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
    $blogs = Blog::all();
    return view('website.blogs', compact('blogs'));

}
public function shows($id)
    {
        
        $blog=Blog::findOrFail($id);

        // Pass the blog data to the view
        return view('website.show', compact('blog'));
    }
 public function privacypolicies(){
    return view('website.privacy');
 }
 public function termsconditions(){
 return view('website.termsconditions');}
}
