<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class HomeController extends Controller
{
    function index() {

      $packages = Package::all();
        return view('home', compact('packages'));
      }
}
