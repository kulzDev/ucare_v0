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
                    <h2 class="tm-block-title d-inline-block">Add Product</h2>
                </div>
            </div>
            <div class="row mt-4 tm-edit-product-row justify-content-center">
                <div class="col-xl-7 col-lg-7 col-md-12">                    
                   
                    {!! Form::open(['action'=>'admin\ProductController@store', 'class' => 'tm-edit-product-form']) !!}             

                        <div class="input-group mb-3">
                                {!! Form::label('name', 'Product Name: ', ['class' => 'col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label']) !!}                              
                                {!! Form::text('Name', $value = null, ['class' => 'form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7', 'placeholder' => 'Voucher Name']) !!}                                
                        </div>                 
                        
                        <div class="input-group mb-3">
                                {!! Form::label('Description', 'Product Description : ', ['class' => 'col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label']) !!}                              
                                {!! Form::textarea('Description', $value = null, ['class' => 'form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7', 'placeholder' => 'Voucher Desciption']) !!}                                
                        </div>                       
         
                        <div class="input-group mb-3">
                            <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                {!! Form::submit('Create Product', ['class' => 'btn  btn-primary'] ) !!}
                            </div>
                        </div>                            
                        
                    {!! Form::close() !!}



                </div>            
            </div>
        </div>
    </div>
</div>



@endsection

