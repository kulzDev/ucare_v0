<?php

namespace ucare\Http\Controllers;

use Illuminate\Http\Request;

class myBenefitController extends Controller
{
    public function getBenefit(){
        return view('admin.benefits.create');
    }
    public function store1(){
      $benefits = new benefits();
      $benefits->ProductID = $request->session()->get('productID');
      //$request->session()->forget('productID');
      $benefits->intervals = $request->get('Interval');//drop down list name
      $benefits->VoucherID = $request->get('service_type');//drop down list name
      $benefits->save();
      return redirect()->route('admin.benefits.create');
    }
}
