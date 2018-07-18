<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temperature;

class TemperatureAPIController extends Controller
{
  function store(Request $request){
    //Store the data to the Database
    $temperature = new Rain;
    //hardcoded to test
    $temperature->location_id = $request['location_id'];
    $temperature->rainfall = $request['temperature'];
    $temperature->save();

    return response()->json($request, 201);
  }
}
