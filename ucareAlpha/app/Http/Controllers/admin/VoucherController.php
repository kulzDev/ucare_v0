<?php

namespace App\Http\Controllers\admin;

use App\voucher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $vouchers = voucher::all();
      return view('admin.vouchers.index',compact('vouchers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('admin.vouchers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      voucher::create($request->all());
      return redirect()->route('admin.vouchers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function show(voucher $voucher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function edit(voucher $voucher)
    {
        return view('admin.vouchers.edit',compact('voucher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, voucher $voucher)
    {
      $voucher->update($request->all());
      return redirect()->route('admin.vouchers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function destroy(voucher $voucher)
    {
        //
    }
}
