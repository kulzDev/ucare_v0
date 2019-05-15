@extends('layouts.main')

@section('topnav')
    @include('admin.topnav')
@endsection


@section('content')
<div class="row tm-mt-big">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  ">
            <div class="bg-white tm-block">
                <div class="row justify-content-center">
                    <div class="col-7">
                        <h2 class="tm-block-title d-inline-block">Add Voucher to Product</h2>
                    </div>
                </div>
                <div class="row mt-4 tm-edit-product-row justify-content-center">
                    <div class="col-xl-7 col-lg-7 col-md-12">


                        <form method="post"  action="{{url('/benefits/store',$id)}}" class="tm-edit-product-form">
                            {{csrf_field()}}
                           
                            
                            <div class="input-group mb-3">
                                    <label for="category" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Voucher</label>
                                    <select name="service_type" class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" id="category">
                                        @foreach ($voucher_array as $voucher)
                                            <option value="{{$voucher->id}}">{{$voucher->Name}}</option>
                                        @endforeach
                                    </select>
                            </div>

                            <div class="input-group mb-3">
                                    <label for="category" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Interval</label>
                                    <select name="Interval" class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" id="category">
                                       
                                        <option selected value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="6">6</option>
                                        <option value="12">12</option>
                                    </select>
                            </div>
                           
                            <div class="input-group mb-3">
                                <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                    <button type="submit" class="btn btn-primary">Add
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



