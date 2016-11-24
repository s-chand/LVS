<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LandRecordsController extends Controller
{
  public function getLandInfo(){
    //Connect to Database and generate list of parcels in cadastre_object
    $data = DB::select('select * from cadastre.cadastre_object');
    return view( 'parcels', ['data'=>$data]);
  }
}

 ?>
