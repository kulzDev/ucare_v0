@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Customer details</div>
                <div class="card-body">
                  <form method="post" action="{{route('admin.patientDetails.update',$patientDetail->petient_id)}}">
                    {{method_field('PUT')}}
                    {{csrf_field()}}
                    Email:
                    <input type="email" name="Email" value="{{$patientDetail->email}}"
                     class="form-control"/>
                    <br/><br/>
                    phoneNumber:
                    <input type="text" name="phoneNumber" value='{{$patientDetail->phoneNumber}}'
                    class="form-control"/>
                    <br/><br/>
                    Address:
                    <input type="text" name="Address" value='{{$patientDetail->Address}}'
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
