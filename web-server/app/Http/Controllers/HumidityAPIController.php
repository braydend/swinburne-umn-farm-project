<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Humidity;

class HumidityAPIController extends Controller
{
  function store(Request $request){
    //Store the data to the Database
    $humidity = new Rain;
    //hardcoded to test
    $humidity->location_id = $request['location_id'];
    $humidity->rainfall = $request['humidity'];
    $humidity->save();

    return response()->json($request, 201);
  }
}
