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
                    <h2 class="tm-block-title d-inline-block">Edit Patient</h2>
                </div>
            </div>
            <div class="row mt-4 tm-edit-product-row justify-content-center">
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <form method="post" action="{{url('/patient/update',$patient->id)}}"  class="tm-edit-product-form">

                        {{method_field('patch')}}
                        {{csrf_field()}}

                        <div class="input-group mb-3">
                            <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Patient
                                Name :
                            </label>
                            <input id="name"  name="Name" value="{{$patient->Name}}"  type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                        </div>

                        <div class="input-group mb-3">
                            <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Patient
                                Surname :
                            </label>
                            <input id="name"  name="SurName" value='{{$patient->SurName}}'  type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                        </div> 
                        
                        
                        <div class="input-group mb-3">
                            <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Patient
                                ID Number :
                            </label>
                            <input id="name"  type = "number" name ="IdNumber" value='{{$patient->IdNumber}}'  type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                        </div> 
                                  
                       
                        <div class="input-group mb-3">
                            <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                <button type="submit" class="btn btn-primary">Edit
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




