<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandDataController extends Controller
{
    //
    public function index()
    {
      return view('landsearch');
    }
    public function search($parcel_number)
    {
      //Validate Parcel number
      $value=array("name_lastpart"=>"test","name_firstpart"=>"10001");
      return json_encode($value);
    }
}
