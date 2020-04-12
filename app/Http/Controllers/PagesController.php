<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
      return view('home');
    }

    public function about(){
      return view('about');
    }

    public function posts(){
      return view('posts.home');
    }

    public function contact(){
      return view('contact');
    }

}

/*
Usable but Kept Public Function One:
public function index(){
  return view('page_test.index');
}
*/
