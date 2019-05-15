@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vouchers</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('admin.vouchers.create')}}" class="btn btn-sm btn-primary">Add voucher type</a>

              </br></br>
                    Voucher types
                    <table class="table">
                      <tr>
                        <th>Name</th>
                        <th>Description</th>
                      </tr>
                      @forelse($vouchers as $voucher)
                      <tr>
                        <td>{{$voucher->Name}}</td>
                        <td>{{$voucher->Description}}</td>
                        <td><a href="{{route('admin.vouchers.edit',$voucher->id)}}"class="btn btn-sm btn-info">Edit</td>
                      </tr>
                      @empty
                      <tr>
                        <td colspan="2">No records found</td>
                      </tr>
                      @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
