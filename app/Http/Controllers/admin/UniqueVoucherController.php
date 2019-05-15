<?php

namespace ucare\Http\Controllers\admin;
use ucare\patient;
use ucare\uniqueVoucher;
use Illuminate\Http\Request;
use ucare\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


use Auth;


use \Datetime;

class UniqueVoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $uniqueVouchers = uniqueVoucher::all();
      return view('admin.uniqueVoucher.index',compact('uniqueVouchers'));
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

    /**
     * Display the specified resource.
     *
     * @param  \ucare\uniqueVoucher  $uniqueVoucher
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $uniqueVoucher = patient::find($id)->uniqueVoucher;
        return view('admin.uniqueVoucher.show',compact('uniqueVoucher'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ucare\uniqueVoucher  $uniqueVoucher
     * @return \Illuminate\Http\Response
     */
    public function edit(uniqueVoucher $uniqueVoucher)
    {
        return view('admin.uniqueVoucher.edit',compact('uniqueVoucher'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ucare\uniqueVoucher  $uniqueVoucher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, uniqueVoucher $uniqueVoucher)
    {
      //$uniqueVoucher->update($request->all());
      $uniqueVoucher->RedeemDate = Time();
      $uniqueVoucher->Active=0;
      $uniqueVoucher->empoyeeID =$request->empoyeeID;
      $uniqueVoucher->save();
      return redirect()->route('admin.uniqueVouchers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ucare\uniqueVoucher  $uniqueVoucher
     * @return \Illuminate\Http\Response
     */
    public function destroy(uniqueVoucher $uniqueVoucher)
    {
        //
    }


    public function redeem($id)
    {
        //
        /**
         * DB::table('users') ->where('id', 1)->update(['votes' => 1]);
         */

        $currentDateTime = new DateTime(date("Y-m-d H:i:s"));

        $currentDate = $currentDateTime->format('Y-m-d');

        $employeeID = Auth::user()->id;

        $benefits = DB::table('unique_vouchers')->where('voucherNumber', '=', $id)->update(['RedeemDate' => $currentDate]);

        $benefits = DB::table('unique_vouchers')->where('voucherNumber', '=', $id)->update(['employeeId' => $employeeID]);
        //return $employeeID;

        $patient_vouchers = uniqueVoucher::all();


        return view('admin.uniqueVoucher.index',compact('patient_vouchers'));
    }



}
