<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Moisture;

class MoistureAPIController extends Controller
{
  function store(Request $request){
    //Store the data to the Database
    $moisture = new Rain;
    //hardcoded to test
    $moisture->location_id = $request['location_id'];
    $moisture->rainfall = $request['moisture'];
    $moisture->save();

    return response()->json($request, 201);
  }
}
