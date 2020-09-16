<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(Request $request)
  {
    $url = "http://krocolab.masuk.id/data.json";
    $pricing_data = file_get_contents($url, true);

    return view('welcome', [
      'pricing_data' => json_decode($pricing_data)->packages
    ]);
  }
}
