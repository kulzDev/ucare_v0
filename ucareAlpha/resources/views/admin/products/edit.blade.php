@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Customer</div>
                <div class="card-body">
                  <form method="post" action="{{route('admin.products.update',$product->id)}}">
                    {{method_field('PUT')}}
                    {{csrf_field()}}
                    Name:
                    <input type="text" name="Name" value="{{$product->Name}}"
                     class="form-control"/>
                    <br/><br/>
                    SurName:
                    <input type="text" name="Description" value='{{$product->Description}}'
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
