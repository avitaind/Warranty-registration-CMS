@extends('seller.layouts.app')

@section('title')
    @lang('title.seller')
@stop

@section('css')

    <style>
        /* .dash-card .card-body span {
            position: absolute;
            right: 20px;
            bottom: 25px;
            font-size: 30px;
            border-radius: 15px;
            width: 50px;
            height: 50px;
            text-align: center;
            background: #662d91;
            color: #ffffff;
        } */
    </style>

@endsection

@section('content')
    <!-- CONTENT WRAPPER -->
    {{-- <h1>Hello Seller Home</h1>
    <br />
    Total:- {{ $totalcount }}
    In Stock:- {{ $incount }}
    In Stock:- {{ $outcount }} --}}

    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <!-- Top Statistics -->
            <div class="row">
                <div class="col-xl-4 col-sm-4 p-b-15 lbl-card">
                    <div class="card card-mini dash-card card-1">
                        <div class="card-body">
                            <h2 class="mb-1">{{ $totalcount }}</h2>
                            <p>Total Stock</p>
                            <span class="mdi mdi-cart"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-4 p-b-15 lbl-card">
                    <div class="card card-mini dash-card card-2">
                        <div class="card-body">
                            <h2 class="mb-1">{{ $incount }}</h2>
                            <p>In Stock</p>
                            <span class="mdi mdi-arrow-left-bold-box"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-4 p-b-15 lbl-card">
                    <div class="card card-mini dash-card card-3">
                        <div class="card-body">
                            <h2 class="mb-1">{{ $outcount }}</h2>
                            <p>Out Stock</p>
                            <span class="mdi mdi-arrow-right-bold-box"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">


                <div class="col-xl-4 col-md-4 p-b-15">
                    <!-- Sales Graph -->
                    <div id="user-acquisition" class="card card-default">
                        <div class="card-header">
                            <h2>Total Stock</h2>
                        </div>
                        <div class="card-body">
                            {{-- <div id="container"></div> --}}
                            <canvas id="myAreaChart1" width="100%" height="30"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at @php  echo date('F j, Y', time() ) @endphp</div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4 p-b-15">
                    <!-- Sales Graph -->
                    <div id="user-acquisition" class="card card-default">
                        <div class="card-header">
                            <h2>In Stock</h2>
                        </div>
                        <div class="card-body">
                            {{-- <div id="container"></div> --}}
                            <canvas id="myAreaChart1" width="100%" height="30"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at @php  echo date('F j, Y', time() ) @endphp</div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4 p-b-15">
                    <!-- Sales Graph -->
                    <div id="user-acquisition" class="card card-default">
                        <div class="card-header">
                            <h2>Out Stock</h2>
                        </div>
                        <div class="card-body">
                            {{-- <div id="container"></div> --}}
                            <canvas id="myAreaChart1" width="100%" height="30"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at @php  echo date('F j, Y', time() ) @endphp</div>
                    </div>
                </div>

                {{-- <div class="col-xl-4 col-md-12 p-b-15">
                    <!-- Doughnut Chart -->
                    <div class="card card-default">
                        <div class="card-header justify-content-center">
                            <h2>Customers Overview</h2>
                        </div>
                        <div class="card-body">
                            <div id="piechart" style="height:350px;"></div>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at @php  echo date('F j, Y', time() ) @endphp</div>
                    </div>
                </div> --}}

            </div>
        </div>
        <!-- End Content -->
    </div>
    <!-- End Content Wrapper -->


    <!-- End Content Wrapper -->
@endsection


@section('js')
    <script src="{{ asset('assets/js/chart-dashboard.js ') }}"></script>

    {{-- Warranty Registration && Warranty Extend JS --}}

    <script src="{{ asset('assets/js/create-charts.js ') }}"></script>
@endsection
