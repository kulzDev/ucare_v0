<?php

namespace   ucare\Http\Controllers\admin;

use ucare\benefits;
use Illuminate\Http\Request;
use ucare\Http\Controllers\Controller;
use ucare\product;
class BenefitsController extends Controller
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
        return view('admin.benefits.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store1(Request $request)
    {
        $benefits = new benefits();
        $benefits->ProductID = $request->session()->get('productID');
        //$request->session()->forget('productID');
        $benefits->intervals = $request->get('Interval');//drop down list name
        $benefits->VoucherID = $request->get('service_type');//drop down list name
        $benefits->save();
        return redirect('/benefits/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $benefits = new benefits();
        $benefits->ProductID = $id; //$request->session()->get('productID');
        //$request->session()->forget('productID');
        $benefits->intervals = $request->get('Interval');//drop down list name
        $benefits->VoucherID = $request->get('service_type');//drop down list name
        $benefits->save();
        return redirect('/product/list');
    }
    /**
     * Display the specified resource.
     *
     * @param  \ucare\benefits  $benefits
     * @return \Illuminate\Http\Response
     */
    public function show(benefits $benefits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ucare\benefits  $benefits
     * @return \Illuminate\Http\Response
     */
    public function edit(benefits $benefits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ucare\benefits  $benefits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, benefits $benefits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ucare\benefits  $benefits
     * @return \Illuminate\Http\Response
     */
    public function destroy(benefits $benefits)
    {
        //
    }
}
