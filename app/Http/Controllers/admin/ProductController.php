<?php

namespace ucare\Http\Controllers\admin;

use ucare\product;
use ucare\benefits;
use ucare\voucher;
use Illuminate\Http\Request;
use ucare\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = product::all();
      return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //$product=product::create($request->all());
      $product = new product;
      $product->Name = $request->get('Name');
      $product->Description = $request->get('Description');
      $product->save();
      //$request->session()->put('productID',$product->id);
      $id = $product->id;
      return view('admin.benefits.create',compact('id'));

      //return redirect('/vouchers/list');

     // return "in store";
    }

    /**
     * Display the specified resource.
     *
     * @param  \ucare\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ucare\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    

      $product = product::findOrFail($id);  

       return view('admin.products.edit',compact('product'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ucare\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
     

      $product = product::findOrFail($id);
      $product->update($request->all());
     
      return redirect('/product/list');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ucare\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }

    public function AddVoucher($id){

      //return $id;
      return view('admin.benefits.create',compact('id'));
    }


    public function viewVouchers($id){


      $product = product::findOrFail($id);
      $benefits = DB::table('benefits')->where('ProductID', '=', $id)->get();
    
      return view('admin.products.vouchers',compact('benefits','product'));
    }
}
