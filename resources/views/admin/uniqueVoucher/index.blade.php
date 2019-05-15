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
                            
                                <th scope="col" >Product ID</th>
                                <th scope="col" >Patient ID</th>
                                <th scope="col">Voucher Number</th>   
                                <th scope="col" >Voucher Start Date</th> 
                                <th scope="col" >Employee ID </th> 
                                <th scope="col" >Redeem Date </th>                                
                                <th scope="col" >Active </th>
                                <th scope="col" >Voucher Name </th>  
                                <th scope="col" >Redeem </th> 
                                                    
                                
                            </tr>
                        </thead>
                        <tbody>  
                         
                                                                
                               
                                  @forelse($patient_vouchers as $patient_voucher)
                                  <tr>
                                     
                                    <td>{{$patient_voucher->productID}}</td>
                                    <td>{{$patient_voucher->patientId}}</td>
                                    <td>{{$patient_voucher->voucherNumber}}</td>
                                    <td>{{$patient_voucher->voucherStartDate}}</td>

                                    @if($patient_voucher->employeeId == null)
                                        <th scope="row"> </th>
                                    @else
                                        <td>{{$patient_voucher->employeeId}}</td>
                                    @endif

                                    @if($patient_voucher->RedeemDate == null)
                                        <th scope="row"> </th>
                                    @else
                                        <td>{{$patient_voucher->RedeemDate}}</td>
                                    @endif
                                     
                                   
                                    @if($patient_voucher->Active == 1)
                                        <td>Active</td>
                                    @else
                                        <td>not Active</td>
                                    @endif
                                    <td>{{$patient_voucher->voucherName}}</td>

                                    @if($patient_voucher->Active == 1 AND $patient_voucher->RedeemDate == null)
                                        <td><a href="{{url('/uniqueVouchers/redeem',$patient_voucher->voucherNumber)}}"class="btn btn-sm btn-info">Redeem</td>
                                    @else
                                        <td><a href=""class=""></td>                            
                                    
                                    @endif
                               
                                  </tr>
                                  @empty
                                  <tr>
                                        <td colspan="2">No vouchers found</td>
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






