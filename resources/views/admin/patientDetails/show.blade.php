@extends('layouts.main')

@section('topnav')
    @include('admin.topnav')
@endsection

@section('content')

<div class="container">
    <div class="row tm-content-row tm-mt-big">  
        <div class="col-xl-12 col-lg-12 tm-md-12 tm-sm-12 tm-col">
            <div class="bg-white tm-block h-100">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h2 class="tm-block-title d-inline-block">Patient Details</h2>
    
                    </div>
          
                </div>
                <div class="table-responsive">
                    <table class="table  table-striped tm-table-striped-even mt-3">
                        <thead>
                            <tr class="tm-bg-gray">
                                <th scope="col">&nbsp;</th>
                                <th scope="col" >Patient Reference Number</th>
                                <th scope="col">Patient Email</th>   
                                <th scope="col" >Patient Phone  Number</th> 
                                <th scope="col" >Patient Address </th> 
                                <th scope="col">&nbsp;</th>  
                                                         
                            </tr>
                        </thead>
                        <tbody>                                                   
                               
                            @forelse($patientDetails as $patient_detail)
                            <tr>
                                <th scope="row"> </th> 
                                <td>{{$patient_detail->petient_id}}</td>
                                <td>{{$patient_detail->email}}</td>
                                <td>{{$patient_detail->phoneNumber}}</td>
                                <td>{{$patient_detail->Address}}</td>
                                <td><a href="{{url('/patientDetails/edit',$patient_detail->id)}}"class="btn btn-sm btn-info">Edit</td>

                              <th scope="row"> </th> 
                            </tr>
                            @empty
                            <tr>
                              <td colspan="6">No records found</td>
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
</div>



@endsection


