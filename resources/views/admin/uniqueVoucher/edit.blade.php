@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Redeem</div>
                <div class="card-body">
                  <form method="post" action="{{route('admin.uniqueVouchers.update',$uniqueVoucher->id)}}">
                    {{method_field('PUT')}}
                    {{csrf_field()}}
                    Employee ID:
                    <input type="text" name="empoyeeID" value="{{$uniqueVoucher->empoyeeID}}"
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
