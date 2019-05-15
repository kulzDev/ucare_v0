@extends('layouts.main')

@section('topnav')
    @include('admin.topnav')
@endsection

@php
    use ucare\voucher;
@endphp

@section('content')

    <div class="row tm-content-row tm-mt-big">  
        <div class="col-xl-12 col-lg-12 tm-md-12 tm-sm-12 tm-col">
            <div class="bg-white tm-block h-100">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h2 class="tm-block-title d-inline-block">Vouchers For {{$product->Name}}  Product</h2>
                        </div>
                
                </div>
                <div class="table-responsive">
                    <table class="table  table-striped tm-table-striped-even mt-3">
                        <thead>
                            <tr class="tm-bg-gray">
                                <th scope="col">&nbsp;</th>
                                <th scope="col" >Voucher Name</th>
                                <th scope="col">Voucher Description</th> 
                                <th scope="col">Voucher Interval</th>   
                                <th scope="col">&nbsp;</th>                       
                            </tr>
                        </thead>
                        <tbody>
                            
                            
                            @forelse($benefits as $b)                        
                            
                                                           
                                <tr>

                                    <th scope="row"> </th> 
                                    <td>{{voucher::findOrFail($b->VoucherID)->Name}}</td>
                                    <td>{{voucher::findOrFail($b->VoucherID)->Description}}</td>
                                    <td>{{$b->intervals}} vouchers per year</td> 
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


