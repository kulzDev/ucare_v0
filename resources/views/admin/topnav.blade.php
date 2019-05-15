<div class="row">
    <div class="col-12">
        <nav class="navbar navbar-expand-xl navbar-light bg-light">
            <a class="navbar-brand" href="{{URL::asset('/')}}">
                <img src="{{url('img/cropped-Ucare-logo-1.png')}}">
                <h1 class="tm-site-title mb-0">Club</h1>
            </a>
            <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> Dashboard
                            
                            <span class="sr-only">(current)</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('/accounts')}}">User Activities</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Vouchers
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('/vouchers/list')}}">All Voucher</a>
                            <a class="dropdown-item" href="redeem%20voucher.html">Redeem Voucher</a>
                            <a class="dropdown-item" href="refund%20voucher.html">Refund Voucher</a>
                        </div>
                    </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="products.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Products</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('/product/list')}}">All Products</a>
                            <a class="dropdown-item" href="products.html">Current Products</a>
                            <a class="dropdown-item" href="edit-product.html">Update Product</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="products.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Patients</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{url('/patient/list')}}">All Patients</a>
                            </div>
                    </li>


                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="products.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Customer Vouchers</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{url('/uniqueVouchers/list')}}">All Vouchers</a>
                                    
                            </div>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Membership
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="register%20member.html">Register New member</a>
                            <a class="dropdown-item" href="update%20member.html">Update Member Info</a>
                            <a class="dropdown-item" href="check-up.html">Member Check-Up</a>
                            <a class="dropdown-item" href="Bronze%20Membership.html">Bronze Membership</a>
                            <a class="dropdown-item" href="Silver%20Membership.html">Silver Membership</a>
                            <a class="dropdown-item" href="Gold%20Membership.html">Gold Membership</a>
                            <a class="dropdown-item" href="Platinum%20Membership.html">Platinum Membership</a>
                            <a class="dropdown-item" href="Refund%20Policy.html">Refund Policy</a>
                            <a class="dropdown-item" href="Privacy%20Policy.html">Privacy Policy</a>
                            <a class="dropdown-item" href="Terms%20and%20Conditions.html">Terms and Conditions</a>
                        </div>
                    </li>
                                                  
                </ul>



                <ul class="navbar-nav dropdown">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user mr-2 tm-logout-icon"></i>
                                {{Auth::user()->name}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit(); " class="dropdown-item">                          
                             
                                         <span>Logout</span>
                                </a>
            
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                
                            </div>

                        </li>                  
                 



                </ul>



            </div>
        </nav>
    </div>
</div>
