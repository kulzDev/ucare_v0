@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Customer</div>
                <div class="card-body">
                  <form method="post" action="{{route('admin.patients.store')}}">
                    {{csrf_field()}}
                    Name:
                    <input type="text" placeholder="Name" name="Name" class="form-control"/>
                    <br/><br/>
                    SurName:
                    <input type="text" placeholder="Surname" name="SurName"class="form-control"/>
                    <br/><br/>
                    ID Number:
                    <input type="text" placeholder="id number" name="IdNumber" class="form-control"/>
                    <br/>
                    <input type="submit" value="Save" class="btn btn-primary"/>
                  </form>
                </div>
          </div>
        </div>
    </div>
</div>
@endsection
