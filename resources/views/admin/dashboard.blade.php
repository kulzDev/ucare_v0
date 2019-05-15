@extends('layouts.main')
@section('topnav')
    @include('admin.topnav')
@endsection
@section('content')
    <div class="row tm-content-row tm-mt-big">
        <div class="tm-col tm-col-big">
            <div class="bg-white tm-block h-100">
                <h2 class="tm-block-title">Vouchers</h2>
                <canvas id="lineChart"></canvas>
            </div>
        </div>
        <div class="tm-col tm-col-big">
            <div class="bg-white tm-block h-100">
                <h2 class="tm-block-title">Products</h2>
                <canvas id="barChart"></canvas>
            </div>
        </div>
        <div class="tm-col tm-col-small">
            <div class="bg-white tm-block h-100">
                <h2 class="tm-block-title">Membership</h2>
                <canvas id="pieChart" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
@endsection