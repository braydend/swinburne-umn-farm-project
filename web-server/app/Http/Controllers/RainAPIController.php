<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rain;

class RainAPIController extends Controller
{
    function store(Request $request){
      //Store the data to the Database
      $rain = new Rain;
      //hardcoded to test
      $rain->location_id = $request['location_id'];
      $rain->rainfall = $request['rainfall'];
      $rain->save();

      return response()->json($request, 201);
    }
}
