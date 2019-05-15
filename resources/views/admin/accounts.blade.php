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
                        <h2 class="tm-block-title d-inline-block">Products</h2>

                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a href="add-product.html" class="btn btn-small btn-primary">Add New Product</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-striped tm-table-striped-even mt-3">
                        <thead>
                            <tr class="tm-bg-gray">
                                <th scope="col">&nbsp;</th>
                                <th scope="col">Product Name</th>
                                <th scope="col" class="text-center">Members</th>
                                <th scope="col" class="text-center">Vouchers</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    
                                </th>
                                <td class="tm-product-name">1. In malesuada placerat (hover)</td>
                                <td class="text-center">145</td>
                                <td class="text-center">10</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    
                                </th>
                                <td class="tm-product-name">2. Aenean eget urna enim. Sed enim</td>
                                <td class="text-center">240</td>
                                <td class="text-center">12</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    
                                </th>
                                <td class="tm-product-name">3. Vivamus convallis tincidunt nisi</td>
                                <td class="text-center">360</td>
                                <td class="text-center">14</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    
                                </th>
                                <td class="tm-product-name">4. Donec semper massa eget</td>
                                <td class="text-center">445</td>
                                <td class="text-center">10</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    
                                </th>
                                <td class="tm-product-name">5. Donec semper massa eget</td>
                                <td class="text-center">445</td>
                                <td class="text-center">8</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    
                                </th>
                                <td class="tm-product-name">6. Donec semper massa eget</td>
                                <td class="text-center">445</td>
                                <td class="text-center">14</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    
                                </th>
                                <td class="tm-product-name">7. Donec semper massa eget</td>
                                <td class="text-center">445</td>
                                <td class="text-center">6</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    
                                </th>
                                <td class="tm-product-name">8. Donec semper massa eget</td>
                                <td class="text-center">445</td>
                                <td class="text-center">10</td>
                            </tr>
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




