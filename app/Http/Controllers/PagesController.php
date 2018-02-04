<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $title = "Welcome";
      return view('pages.index')->with('title', $title);
    }

    public function about(){
      $title = "About us";
      return view('pages.about', compact('title'));
    }

    public function services(){
      $data = array(
        'title' => 'Services',
        'services' => [
            'Web Design',
            'PHP programming',
            'SEO'
          ]
      );
      return view('pages.services')->with($data);
    }
}
