<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use App\Searches;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;

class LandDataController extends Controller
{
    /**
     * index function summary
     *
     * handles requests to the land search portal and redirects to search blade
     *
     * @param type var Description
     * @return return type
     */
    public function index()
    {
        return view('landsearch')->with('result', array());
    }

    public function search()
    {
        $id = Auth::id(); //Get current user id
        $date_time = Carbon::now(); //Get the time at this moment
        $rules = array('parcel_number' => 'required'); //Create the validation rules
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return redirect('/land/verify');
        } else {
            //Grab the data from the input field.
            $search_text = Input::get('parcel_number');
            $result = $this->getSearchResults($search_text);
            $this->logLandSearch($id, $search_text, $date_time);//Log this query
            return view('landsearch')->with('result', $result);
        }
    }


    public function logLandSearch($user_id, $search_text, $search_time)
    {
        $search = new Searches;
        $search->search_text = $search_text;
        $search->search_user_id = $user_id;
        $search->search_time = $search_time;
        $search->save();
    }

    public function getSearchResults($search_text)
    {
        $data = array('1' => '93', '2' => '1991');
        return $data;
    }
}
