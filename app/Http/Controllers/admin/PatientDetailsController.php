<?php

namespace ucare\Http\Controllers\admin;

use ucare\patientDetails;
use Illuminate\Http\Request;
use ucare\Http\Controllers\Controller;
use ucare\patient;

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
      $patientDetails = new patientDetails;
      $patientDetails->petient_id  = $request->session()->get('PatientID');
      $request->session()->forget('PatientID');
      $patientDetails->email       = $request->get('email');
      $patientDetails->phoneNumber = $request->get('phoneNumber');
      $patientDetails->Address     = $request->get('Address');
      $patientDetails->save();
      return redirect('/patient/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \ucare\patientDetails  $patientDetails
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $patientDetails = patient::find($id)->patientDetails;

      //return $patientDetails;
      
      return view('admin.patientDetails.show',compact('patientDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ucare\patientDetails  $patientDetails
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
      $patientDetail = patientDetails::findOrFail($id); 
        return view('admin.patientDetails.edit',compact('patientDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ucare\patientDetails  $patientDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {

      
        
      $patientDetail = patientDetails::findOrFail($id); 
      //$patientDetail->update($request->all());
      //$patientDetailTmp = new patientDetails();

    
      //$patientDetailTmp->email = $request->get('email');
      //$patientDetailTmp->phoneNumber = $request->get('phoneNumber');
      //$patientDetailTmp->Address = $request->get('Address');

      //$patientDetail->update($patientDetailTmp->toArray());

      //echo $patientDetail . "\n";

      $patientDetail->update($request->all());;

      //return $request;  


  




     // echo  $patient."\n";

      //return  $request;

      return redirect('/patient/list');
     
      //return redirect('/patient/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ucare\patientDetails  $patientDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(patientDetails $patientDetails)
    {
        //
    }
}
