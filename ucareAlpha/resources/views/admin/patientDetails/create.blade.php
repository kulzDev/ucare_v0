@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Customer</div>
                <div class="card-body">
                  <form method="post" action="{{route('admin.patientDetails.store')}}">
                    {{csrf_field()}}
                    Email Address:
                    <input type="email" placeholder="Email Address" name="email" class="form-control"/>
                    <br/><br/>
                    PhoneNumber:
                    <input type="text" placeholder="phone number" name="phoneNumber"class="form-control"/>
                    <br/><br/>
                    address:
                    <input type="text" placeholder="Address" name="Address" class="form-control"/>
                    <br/>
                    <input type="submit" value="Save" class="btn btn-primary"/>
                  </form>
                </div>
          </div>
        </div>
    </div>
</div>
@endsection
