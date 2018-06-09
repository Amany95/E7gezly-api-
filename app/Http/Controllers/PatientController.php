<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Doctor;
use App\Rating;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    public function store_rate(Request $request)
    {
        $result=Rating::where('doctor_id', '=', $request->doctor_id)->
                        where('p_id', '=', $request->p_id)->value('rate_id');
        $rate=Rating::find($result);                

        if(!$rate)
        {             
            $rate = new Rating();
            $rate->doctor_id= $request->doctor_id;
            $rate->p_id= $request->p_id;
            $rate->stars= $request->stars;

            $rate->save();
        }
        else
        {
            $getid=Rating::where('doctor_id', '=', $request->doctor_id)->
                        where('p_id', '=', $request->p_id)->value('rate_id');

            $rate=Rating::find($getid);
            $rate->doctor_id= $request->doctor_id;
            $rate->p_id= $request->p_id;
            $rate->stars= $request->stars;

            $rate->save();

        }

        return Response('done',200);

        
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
