<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Location;

class HomeController extends Controller
{
    function index(){
      $locations = Location::all();
      return View::make('dashboard')
        ->with('locations', $locations);
    }
}
