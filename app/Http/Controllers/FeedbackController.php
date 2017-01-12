<?php

namespace App\Http\Controllers;

use App\Library\FeedBackHandler;
use App\Library\Implementation\Feedback;
use Illuminate\Http\Request;
use Validator;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Load Feedback for Dashboard
        // TODO: Fetch all the generated feedback
        $feebackList=new FeedBackHandler(new Feedback());
        return json_encode($feebackList->LoadFeedback());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate inputs
        $validator=Validator::make($request->all(),[
            'email' => 'required|max:255',
            'fullname' => 'required|max:255',
            'message'=>'required|max:550'
        ]);
        if($validator->fails())
        {
            return 'failed';
        }
        $feedback=new Feedback();
        $feedback->setEmail($request->input('email'));
        $feedback->setFullName($request->input('fullname'));
        $feedback->setMessage($request->input('message'));
        $feedbackHandler= new FeedBackHandler($feedback);
        $feedbackHandler->StoreFeedback();
        return 'success';
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //TODO:Load that id dude!
        $feedbackHandler=new FeedBackHandler(new Feedback());
        return $feedbackHandler->GetFeedback($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
