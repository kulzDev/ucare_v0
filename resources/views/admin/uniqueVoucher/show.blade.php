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
                        <h2 class="tm-block-title d-inline-block">Patient's List of Unique Vouchers</h2>
    
                    </div>
          
                </div>
                <div class="table-responsive">
                    <table class="table  table-striped tm-table-striped-even mt-3">
                        <thead>
                            <tr class="tm-bg-gray">
                                <th scope="col">&nbsp;</th>
                                <th scope="col" >Patient ID</th>
                                <th scope="col">Voucher Number</th>   
                                <th scope="col" >Voucer Start Date</th> 
                                <th scope="col" >Employee ID </th> 
                                <th scope="col" >Redeem Date </th>                                
                                <th scope="col" >Active </th>
                                <th scope="col" >Voucher Name </th>  
                                <th scope="col">&nbsp;</th>                                 

                               
                                
                            </tr>
                        </thead>
                        <tbody>   
                            <tr>
                                <th scope="row"> </th>                          
                                <td >John Smith</td>
                                <td >0000000</td>
                                <td >09 99 9999</td>
                                <td >John Smith</td>
                                <td >John Smith</td>
                                <td >John Smith</td>
                                <td >John Smith</td>
                                <th scope="row"> </th> 
                              </tr>
                              <tr>


                                   
                               
                            @forelse($uniqueVoucher as $uniqueVoucher)
                            <tr>
                                <td>{{$uniqueVoucher->patientID}}</td>
                                <td>{{$uniqueVoucher->voucherNum}}</td>
                                <td>{{$uniqueVoucher->voucherStartDate}}</td>
                                <td>{{$uniqueVoucher->empoyeeID}}</td>
                                <td>{{$uniqueVoucher->RedeemDate}}</td>
                                @if($uniqueVoucher->Active == 1)
                                <td>Active</td>
                                @else
                                <td>not Active</td>
                                @endif
                                <td>{{$uniqueVoucher->voucherName}}</td>
                                @if($uniqueVoucher->Active == 1 AND $uniqueVoucher->RedeemDate =! null)
                                <td><a href="{{route('admin.uniqueVouchers.edit',$uniqueVoucher->id)}}"class="btn btn-sm btn-info">Redeem</td>
                                @endif
                              </tr>
                            @empty
                            <tr>
                              <td colspan="9">No records found</td>
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


