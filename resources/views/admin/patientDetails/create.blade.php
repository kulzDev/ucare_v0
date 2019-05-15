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
                    <h2 class="tm-block-title d-inline-block">Add Patient</h2>
                </div>
            </div>
            <div class="row mt-4 tm-edit-product-row justify-content-center">
                <div class="col-xl-7 col-lg-7 col-md-12">                    
                   
                    {!! Form::open(['action'=>'admin\PatientDetailsController@store', 'class' => 'tm-edit-product-form']) !!}             

                        <div class="input-group mb-3">
                                {!! Form::label('name', 'Email Address: ', ['class' => 'col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label']) !!}                              
                                {!! Form::email('email', $value = null, ['class' => 'form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7', 'placeholder' => 'Email']) !!}                                
                        </div>   
                        
                        <div class="input-group mb-3">
                            {!! Form::label('name', 'PhoneNumber: ', ['class' => 'col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label']) !!}                              
                            {!! Form::number('phoneNumber', $value = null, ['class' => 'form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7', 'placeholder' => '0123654789']) !!}                                
                        </div> 
                        

                        <div class="input-group mb-3">
                          {!! Form::label('name', 'Address: ', ['class' => 'col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label']) !!}                              
                          {!! Form::textarea('Address', $value = null, ['class' => 'form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7', 'placeholder' => 'Address']) !!}                                
                        </div> 
                      
                        <div class="input-group mb-3">
                          <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                              {!! Form::submit('Add Patient', ['class' => 'btn  btn-primary'] ) !!}
                          </div>
                        </div>                            
                        
                    {!! Form::close() !!}



                </div>            
            </div>
        </div>
    </div>
</div>
@endsection
