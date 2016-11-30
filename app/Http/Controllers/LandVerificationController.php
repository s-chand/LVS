<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Cadastre_Object;

class LandVerificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all records and send them as JSON to the calling UI
        $parcels=Cadastre_Object::orderBy('name_firstpart')->get();
        return response()->json($parcels);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

  $parcel=DB::select("select c.id,pp.name, c.name_firstpart,c.name_lastpart,public.ST_AsGeoJSON(c.geom_polygon) as geolocation,ba.location from cadastre.cadastre_object c
  join administrative.ba_unit ba on ba.name_firstpart=c.name_firstpart
  join administrative.rrr rr on rr.ba_unit_id=ba.id
  join administrative.party_for_rrr pr on pr.rrr_id=rr.id
  join party.party pp on pp.id=pr.party_id
  where c.name_firstpart LIKE :id",['id'=>$id]);
        return response()->json($parcel);
    }

}
