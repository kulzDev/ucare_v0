@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PatientDetails</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('admin.patientDetails.create')}}" class="btn btn-sm btn-primary">Add voucher type</a>

              </br></br>
                    Voucher types
                    <table class="table">
                      <tr>
                        <th>PatientRefNumber</th>
                        <th>email</th>
                        <th>phoneNumber</th>
                        <th>Address</th>
                      </tr>
                      @forelse(patient_details as $patient_detail)
                      <tr>
                        <td>{{$patient_detail->petient_id}}</td>
                        <td>{{$patient_detail->email}}</td>
                        <td>{{$patient_detail->phoneNumber}}</td>
                        <td>{{$patient_detail->Address}}</td>
                        <td><a href="{{route('admin.patientDetails.edit',$patient_detail->id)}}"class="btn btn-sm btn-info">Edit</td>
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
