@extends('layouts.main')

@section('topnav')
    @include('admin.topnav')
@endsection


@section('content')

    <div class="row tm-content-row tm-mt-big">  
        <div class="col-xl-12 col-lg-12 tm-md-12 tm-sm-12 tm-col">
            <div class="bg-white tm-block h-100">
                <div class="row">
                    <div class="col-md-6 col-sm-12">

                        <h2 class="tm-block-title d-inline-block">Patients</h2>
    
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a href="{{url('/patient/create')}}" class="btn btn-small btn-primary">Add Patient</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table  table-striped tm-table-striped-even mt-3">
                        <thead>
                            <tr class="tm-bg-gray">
                                <th scope="col">&nbsp;</th>
                                <th scope="col" >Patient Name</th>
                                <th scope="col">Patient Surname</th>   
                                <th scope="col" >Patient ID Number</th>  
                                <th scope="col">&nbsp;</th>
                                <th scope="col">&nbsp;</th>                                                
                            </tr>
                        </thead>
                        <tbody>   
                          
                               
                            @forelse($patients as $patient)
                            <tr>
                              <th scope="row"> </th>                          
                              <td>{{$patient->Name}}</td>
                              <td>{{$patient->SurName}}</td>
                              <td>{{$patient->IdNumber}}</td> 
                              
                              
                              <td>
                                  <a href="{{url('/patient/edit',$patient->id)}}" class="btn btn-sm btn-info text-white">Edit</a>
                                  <a href="{{url('/patientDetails/show',$patient->id)}}" class="btn btn-sm btn-info text-white">View Details</a>
                                  <a href="{{url('/patient/viewVouchers',$patient->id)}}" class="btn btn-sm btn-info text-white"  >View Products</a>
                                  <a href="{{url('/patient/addProduct',$patient->id)}}" class="btn btn-sm btn-info text-white"  >Add Product</a>
                                  
                              </td>


                              <th scope="row"> </th> 
                            </tr>
                            @empty
                            <tr>
                              <td colspan="2">No records found</td>
                            </tr>
                            @endforelse

                           
                    
             
                        </tbody>
                    </table>
                </div>
    
                <div class="tm-table-mt tm-table-actions-row">
                    <div class="tm-table-actions-col-right">
                        <span class="tm-pagination-label">Page</span>
                        <nav aria-label="Page navigation" class="d-inline-block">
                            <ul class="pagination tm-pagination">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <span class="tm-dots d-block">...</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">13</a></li>
                                <li class="page-item"><a class="page-link" href="#">14</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    
    </div>



@endsection


