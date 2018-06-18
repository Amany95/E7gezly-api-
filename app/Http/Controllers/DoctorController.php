<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;
use App\Http\Resources\DoctorCollection;
use App\Http\Resources\Doctor as DoctorResource;
use App\Http\Resources\HistorydCollection;
use App\Http\Resources\HistorydResource;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return DoctorResource::collection(Doctor::all());
    }

    public function indexofhistory(Doctor $doctor)
    {
        
        return HistorydResource::collection($doctor->bookings);
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
    public function search(Request $request)
    {
        $city = $request->get('city');
        $fees = $request->get('fees');
        $name = $request->get('name');




        $doctors = Doctor::where('city', 'like', "%{$city}%")
                         ->orWhere('fees', 'like', "%{$fees}%")
                         ->orWhere('name', 'like', "%{$name}%")

                         ->get();

        return DoctorResource::collection($doctors);


  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {

        $count =$doctor->counter;
        $count++;
        $doctor->counter=$count;
        $doctor->save();
        return new DoctorResource($doctor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
