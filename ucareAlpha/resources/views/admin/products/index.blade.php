@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
                    <a href="{{route('admin.products.create')}}" class="btn btn-sm btn-primary">Add Product</a>

              </br></br>
                    List of Product
                    <table class="table">
                      <tr>
                        <th>Name</th>
                        <th>Description</th>
                      </tr>
                      @forelse($products as $product)
                      <tr>
                        <td>{{$product->Name}}</td>
                        <td>{{$product->Description}}</td>
                        <td><a href="{{route('admin.products.edit',$product->id)}}"class="btn btn-sm btn-info">Edit</td>
                      </tr>
                      @empty
                      <tr>
                        <td colspan="2">No products found</td>
                      </tr>
                      @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
