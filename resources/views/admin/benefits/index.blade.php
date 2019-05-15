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
              </br></br>
                    Vouchers in Product
                    <table class="table">
                      <tr>
                        <th>Voucher Name</th>
                        <th>Intervals per Year</th>
                      </tr>
                      @forelse($benefits as $benefit)
                      <tr>
                        <td>{{$benefit->Name}}</td>
                        <td>{{$product->Description}}</td>
                        <td><a href="{{route('admin.products.edit',$product->id)}}"class="btn btn-sm btn-info">Edit</td>
                      </tr>
                      @empty
                      <tr>
                        <td colspan="2">no vouchers attached</td>
                      </tr>
                      @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
