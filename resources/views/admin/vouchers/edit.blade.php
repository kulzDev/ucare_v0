@extends('layouts.main')

@section('topnav')
    @include('admin.topnav')
@endsection

@section('content')
<div class="container">
    <div class="row tm-mt-big">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  ">
            <div class="bg-white tm-block">
                <div class="row justify-content-center">
                    <div class="col-7">
                        <h2 class="tm-block-title d-inline-block">Create Voucher</h2>
                    </div>
                </div>
                <div class="row mt-4 tm-edit-product-row justify-content-center">
                    <div class="col-xl-7 col-lg-7 col-md-12">


                        <form method="post" action="{{url('/vouchers/update',$voucher->id)}}"  class="tm-edit-product-form">
                            {{method_field('patch')}}  
                            {{csrf_field()}}
                            <div class="input-group mb-3">
                                <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label" >Voucher
                                    Name :
                                </label>
                                <input id="name"  name="Name"  type="text" value="{{$voucher->Name}}"  class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                            </div>
    
                      
                            <div class="input-group mb-3">
                                <label for="description" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Voucher Description :</label>
                                <textarea  name="Description"  class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" rows="3">{{$voucher->Description}}
                                </textarea>
                            </div>              
                           
                            <div class="input-group mb-3">
                                <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                    <button type="craete" class="btn btn-primary">Create
                                    </button>
                                </div>
                            </div>
                        </form>



                    </div>            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


