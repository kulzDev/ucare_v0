@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <script>
            function hideFunction(elementHide) {
            var x = document.getElementById(elementHide);
              x.style.display = "none";
            }
            function showFunction(elementHide) {
            var x = document.getElementById(elementHide).onchange;
              x.style.display = "block";
            }
          </script>

                <div class="card-header">Add Product</div>
                <div class="card-body">
                  <form method="post" action="{{route('admin.products.store')}}">
                    {{csrf_field()}}
                    Name:
                    <input type="text" placeholder="Name" name="Name" class="form-control"/>
                    <br/><br/>
                    Description:
                    <input type="text" placeholder="Description" name="Description"class="form-control"/>
                    <br/><br/>
                    <a id="more" href="#" onclick="$('.benefits').slideToggle(function(){$('#more').html($('.benefits').is(':visible')?'hide vouchers':'add vouchers');});">add voucher</a>
                    <div class="benefits" style="display:none">
                    voucher:
                    <select name="service_type" id="service_type" class="selectpicker"
                    data-style="select-with-transition" title="select Class"
                    data-size="7">
                    @foreach ($voucher_array as $voucher)
                        <option value="{{$voucher->id}}">{{$voucher->Name}}</option>
                    @endforeach
                    </select>
                    <br/><br/>
                    Interval:
                    <select name="Interval">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="6">6</option>
                        <option value="12">12</option>
                    </select>
                  </div>
                    <br/>
                    <input type="submit" style="display:none" value="Save" class="btn btn-primary"/>
                  </form>
                </div>
          </div>
        </div>
    </div>
</div>
@endsection
