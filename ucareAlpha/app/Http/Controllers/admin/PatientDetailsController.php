<?php

namespace App\Http\Controllers\admin;

use App\patientDetails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\patient;

class PatientDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.patientDetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $patientDetails = new patientDetails();
      $patientDetails->petient_id  = $request->session()->get('PatientID');
      $request->session()->forget('PatientID');
      $patientDetails->email       = $request->get('email');
      $patientDetails->phoneNumber = $request->get('phoneNumber');
      $patientDetails->Address     = $request->get('Address');
      $patientDetails->save();
      return redirect()->route('admin.patients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\patientDetails  $patientDetails
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $patientDetails = patient::find($id)->patientDetails;
      //$request->session()->put('PatientID',$patientDetails->petient_id);
      return view('admin.patientDetails.show',compact('patientDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\patientDetails  $patientDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(patientDetails $patientDetail)
    {
        return view('admin.patientDetails.edit',compact('patientDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\patientDetails  $patientDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, patientDetails $patientDetail)
    {
      $patientDetail->update($request->all());
      return redirect()->route('admin.patients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\patientDetails  $patientDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(patientDetails $patientDetails)
    {
        //
    }
}
