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
        //Get Parcel by Parcel Id from Selection
  //       $parcel=DB::select("SELECT id, type_code, building_unit_type_code, approval_datetime, historic_datetime,
  //      source_reference, name_firstpart, name_lastpart, status_code,
  //      public.ST_X(public.ST_Centroid(geom_polygon)) as X,
  //      public.ST_Y(public.ST_Centroid(geom_polygon)) as Y,
  //       transaction_id, land_use_code, rowidentifier, rowversion,
  //      change_action, change_user, change_time, view_id
  // FROM cadastre_object where cadastre_object.name_firstpart LIKE :id ",['id'=>$id]);
  //
  $parcel=DB::select("select c.id,pp.name, c.name_firstpart,c.name_lastpart,ba.location from cadastre.cadastre_object c
  join administrative.ba_unit ba on ba.name_firstpart=c.name_firstpart
  join administrative.rrr rr on rr.ba_unit_id=ba.id
  join administrative.party_for_rrr pr on pr.rrr_id=rr.id
  join party.party pp on pp.id=pr.party_id
  where c.name_firstpart LIKE :id",['id'=>$id]);
  // $parcel=DB::table('cadastre_object')->select(DB::raw("id, type_code, building_unit_type_code, approval_datetime, historic_datetime,
  // source_reference, name_firstpart, name_lastpart, status_code,
  // public.ST_X(public.ST_Centroid(geom_polygon)) as X,
  // public.ST_Y(public.ST_Centroid(geom_polygon)) as Y,
  // transaction_id, land_use_code, rowidentifier, rowversion,
  // change_action, change_user, change_time, view_id"))->where('name_firstpart', 'ILIKE',$id)->get();
//);
        return response()->json($parcel);
    }

}
