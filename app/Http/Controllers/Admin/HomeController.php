<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\AboutUs as AboutUs;

class HomeController extends Controller
{
    // return home view...
    public function home() {
        $aboutUs = DB::table('about_us')->select('description')->where('id', 1)->get();
        return view('pages.home', ['aboutUs' => $aboutUs]);
    }

    // show about us text in the modal...
    public function aboutUsText() {
      $aboutUs = AboutUs::find(1);
      // return view('pages.home', ['aboutUs' => $aboutUs]);
      return $aboutUs;
    }

    public function updateAboutUs(Request $request) {
        $aboutUs = AboutUs::find(1);
        $aboutUs->description = $request->description;
        $aboutUs->save();

        return "About us updated successfully";
    }
}
