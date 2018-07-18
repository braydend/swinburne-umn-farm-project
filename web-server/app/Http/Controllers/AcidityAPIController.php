<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acidity;

class AcidityAPIController extends Controller
{
  function store(Request $request){
    //Store the data to the Database
    $acidity = new Acidity;
    //hardcoded to test
    $acidity->location_id = $request['location_id'];
    $acidity->rainfall = $request['acidity'];
    $acidity->save();

    return response()->json($request, 201);
  }
}
