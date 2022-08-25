@extends('admin.layouts.app')

@section('title')
    @lang('title.admin_product')
@stop

@section('css')
    <!-- No Extra plugin used -->
    <link href="{{ asset('assets/plugins/data-tables/datatables.bootstrap5.min.css') }}" rel='stylesheet'>
    <link href="{{ asset('assets/plugins/data-tables/responsive.datatables.min.css') }}" rel='stylesheet'>
@endsection

@section('content')

    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Product</h1>
                    <p class="breadcrumbs"><span><a href="{{ route('admin.home') }}">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Product
                    </p>
                </div>
                <div>
                    <a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact"
                        class="view-detail btn btn-primary">Import / Export</i>
                    </a>
                    {{-- <a href="{{ route('export-products') }}" class=" btn btn-primary"> Export Product</a> --}}
                    <a href="{{ route('products.create') }}" class="btn btn-primary"> Add Product</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            @include('component.alert')
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Product Type</th>
                                            <th>Product Series</th>
                                            <th>Product Model</th>
                                            <th>Product Number</th>
                                            <th>Product Configuration</th>
                                            <th>Serial Number</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($product as $pro)
                                            @php
                                                $inforlooparr = [];
                                                $serialnumber = explode(',', $pro->serial_number);
                                            @endphp
                                            @foreach ($serialnumber as $key => $data)
                                                <tr>
                                                    <td>{{ $pro->type_name }}</td>
                                                    <td>{{ $pro->name }}</td>
                                                    <td>{{ $pro->model_number }}</td>
                                                    <td>{{ $pro->product_number }}</td>
                                                    <td>{{ $pro->titleName }}</td>
                                                    <td>
                                                        @php
                                                            $inforlooparr[] = explode(',', $pro->serial_number);
                                                        @endphp
                                                        {{-- @foreach ($inforlooparr[0] as $key => $val) --}}
                                                        {{-- {{ $val }}<br> --}}
                                                        {{ $data }}
                                                        {{-- @endforeach --}}

                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
    <!-- End Content Wrapper -->

    <!-- Contact Modal -->
    <div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-end border-bottom-0">
                    <button type="button" class="btn-close-icon" data-bs-dismiss="modal" aria-label="Close">
                        <i class="mdi mdi-close"></i>
                    </button>
                </div>

                <div class="modal-body pt-0">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-md-12">
                                <form action="{{ route('importProducts') }}" method="POST" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                                        <div class="custom-file text-left">
                                            <input type="file" name="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                        <div class="col-md-12  pt-4">
                                            <a href="/assets/template/Sample Template For Product Listing.xlsx" download="Sample Template For Product Listing.xlsx" class="btn btn-primary" target="_blank">Sample Template For Listing</a>
                                            <button class="btn btn-primary">Import data</button>
                                            <a class="btn btn-primary" href="{{ route('export-products') }}">Export data</a>
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <!-- Datatables -->
    <script src="{{ asset('assets/plugins/data-tables/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/data-tables/datatables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/data-tables/datatables.responsive.min.js') }}"></script>
@endsection
