<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09/01/2017
 * Time: 10:40
 */

namespace App\Library;

use App\CadastreObject;
use App\Searches;
use Illuminate\Support\Facades\DB;


class SearchHandler
{
    public static function searchByParcelNumber($parcelNumber,$user_id,$search_text,$search_time)
    {
        //Validate the parcel number to be sure it is a number
        if (is_numeric($parcelNumber)) {
            /*
             * Required Data: Fullname, Phone number, parcel number, location, gps coordinates
             */
            $sql='SELECT DISTINCT ba.name_firstpart,ba.name_lastpart,p.name,p.last_name,p.email,p.address,ba.location,ba.type_code from sltrportal.party AS p
  inner join sltrportal.party_for_rrr AS prr on prr.party_id=p.id
  inner join sltrportal.rrr AS r on r.id=prr.rrr_id
  inner join sltrportal.ba_unit AS ba on ba.id=r.ba_unit_id where ba.name_firstpart = ?';

            $result=DB::connection('mysql2')->select($sql,[$parcelNumber]);
            SearchHandler::logLandSearch($user_id,$search_text,$search_time);
            return $result;

        } else {
            //return an error code
            return null;
        }
    }
    protected static function logLandSearch($user_id, $search_text, $search_time)
    {
        $search = new Searches();
        $search->search_text = $search_text;
        $search->search_user_id = $user_id;
        $search->search_time = $search_time;
        $search->save();
    }
}