@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Patients</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('admin.patients.create')}}" class="btn btn-sm btn-primary">Add Customer</a>

              </br></br>
                    Customer Records
                    <table class="table">
                      <tr>
                        <th>Name</th>
                        <th>SurName</th>
                        <th>IDNumber</th>
                      </tr>

                      @forelse($patients as $patient)
                      <tr>
                        <td>{{$patient->Name}}</td>
                        <td>{{$patient->SurName}}</td>
                        <td>{{$patient->IdNumber}}</td>
                        <td><a href="{{route('admin.patients.edit',$patient->id)}}"class="btn btn-sm btn-info">Edit</td>
                        <td><a href="{{route('admin.patientDetails.show',$patient->id)}}"class="btn btn-sm btn-info">PatientDetails</td>
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
