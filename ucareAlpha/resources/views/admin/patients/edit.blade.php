@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Customer</div>
                <div class="card-body">
                  <form method="post" action="{{route('admin.patients.update',$patient->id)}}">
                    {{method_field('PUT')}}
                    {{csrf_field()}}
                    Name:
                    <input type="text" name="Name" value="{{$patient->Name}}"
                     class="form-control"/>
                    <br/><br/>
                    SurName:
                    <input type="text" name="SurName" value='{{$patient->SurName}}'
                    class="form-control"/>
                    <br/><br/>
                    ID Number:
                    <input type="text" name="IdNumber" value='{{$patient->IdNumber}}'
                     class="form-control"/>
                    <br/>
                    <input type="submit" value="Save" class="btn btn-primary"/>
                  </form>
                </div>
          </div>
        </div>
    </div>
</div>
@endsection
