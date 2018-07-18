<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RainAPIController extends Controller
{
    function store($request){
      //Store the data to the Database
      $rain = new Rain;
      //hardcoded to test
      $rain->location_id = '2';
      $rain->rainfall = $request['rainfall'];
      $rain->save();

      return response()->json($article, 201);
    }
}
