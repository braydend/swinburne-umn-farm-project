<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Battery;

class BatteryAPIController extends Controller
{
  function store(Request $request){
    //Store the data to the Database
    $battery = new Battery;
    //hardcoded to test
    $battery->location_id = $request['location_id'];
    $battery->rainfall = $request['charge'];
    $battery->save();

    return response()->json($request, 201);
  }
}
