@extends('layouts.main')

@section('topnav')
    @include('admin.topnav')
@endsection

@php
    use ucare\patient;
@endphp

@section('content')

<div class="row tm-mt-big">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  ">
            <div class="bg-white tm-block">
                <div class="row justify-content-center">
                    <div class="col-7">
                        <h2 class="tm-block-title d-inline-block">Add Product For Patient : {{patient::findOrFail($patient_id)->Name}} {{patient::findOrFail($patient_id)->SurName}}</h2>
                    </div>
                </div>
                <div class="row mt-4 tm-edit-product-row justify-content-center">
                    <div class="col-xl-7 col-lg-7 col-md-12">

                        <form method="post"  action="{{url('/patient/storeProduct',$patient_id)}}" class="tm-edit-product-form">
                            {{csrf_field()}}                           
                            
                            <div class="input-group mb-3">
                                    <label for="category" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Product Name : </label>
                                    <select name="product_id" class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" id="category">
                                        @foreach ($products as $product)
                                            <option value="{{$product->id}}">{{$product->Name}}</option>
                                        @endforeach
                                    </select>
                            </div>                      
                           
                            <div class="input-group mb-3">
                                <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                    <button type="submit" class="btn btn-primary">Add Product
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>            
                </div>
            </div>
        </div>
</div>
@endsection



