<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AboutUs as AboutUs;

class PagesController extends Controller
{
    public function home() {
      $aboutUs = AboutUs::find(1);
      return view('pages.home', ['aboutUs' => $aboutUs]);
    }
}
