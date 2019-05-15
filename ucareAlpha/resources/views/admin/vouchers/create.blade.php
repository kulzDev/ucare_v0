@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Vouchers</div>
                <div class="card-body">
                  <form method="post" action="{{route('admin.vouchers.store')}}">
                    {{csrf_field()}}
                    Name:
                    <input type="text" placeholder="Name" name="Name" class="form-control"/>
                    <br/><br/>
                    Description:
                    <input type="text" placeholder="Description" name="Description"class="form-control"/>
                    <br/>
                    <input type="submit" value="Save" class="btn btn-primary"/>
                  </form>
                </div>
          </div>
        </div>
    </div>
</div>
@endsection
