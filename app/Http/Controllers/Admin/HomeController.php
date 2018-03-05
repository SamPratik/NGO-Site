<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AboutUs as AboutUs;

class HomeController extends Controller
{
    public function home() {
      $aboutUs = AboutUs::find(1);
      return view('pages.home', ['aboutUs' => $aboutUs]);
    }

    public function storeAboutUs(Request $request) {
        $aboutUs = AboutUs::find(1);
        $aboutUs->description = $request->description;
        $aboutUs->save();

        return "About us updated successfully";
    }
}
