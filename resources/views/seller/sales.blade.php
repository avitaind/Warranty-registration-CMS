@extends('seller.layouts.app')

@section('title')
    @lang('title.sales')
@stop

@section('css')
    <!-- No Extra plugin used -->
    <link href="{{ asset('assets/plugins/data-tables/datatables.bootstrap5.min.css') }}" rel='stylesheet'>
    <link href="{{ asset('assets/plugins/data-tables/responsive.datatables.min.css') }}" rel='stylesheet'>
@endsection

@section('content')

    <!-- CONTENT WRAPPER -->
    {{-- <div class="container rounded  mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class=" align-items-center text-center p-3 py-5">
                                <div>
                                    <h3><strong>In Stock</strong></h3>
                                    <a href="{{ route('seller.insales') }}"><i
                                            class="mdi mdi-plus-box-outline mdi-48px"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" align-items-center text-center p-3 py-5">
                                <div>
                                    <h3><strong>Out Stock</strong></h3>
                                    <a href="{{ route('seller.outsales') }}"><i
                                            class="mdi mdi-minus-box-outline mdi-48px"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="ec-content-wrapper">
        <div class="content">
            <div class="row">
                <div>
                    <a href="{{ route('seller.insales') }}" class="btn btn-primary mb-4" style="float: right;">In Stock</a>
                </div>
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            @include('component.alert')
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table" style="width:100%">
                                    <thead>
                                        <tr>

                                            <th>Product Number</th>
                                            <th>Serial Number</th>
                                            <th>Product Configuration</th>
                                            <th>Product Color</th>
                                            <th>Screen Size</th>
                                            <th class="">Stock Date</th>
                                            <th>Stock</th>
                                            <th>OUT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sale as $sales)
                                            <tr>
                                                <td>{{ $sales->productNumber }}</td>
                                                <td>{{ $sales->serialNumber }} </td>
                                                <td class=""><a class="text-dark"
                                                        href="">{{ $sales->productConfiguration }}</a></td>
                                                <td class="">{{ $sales->color }}</td>
                                                <td class="">{{ $sales->screenSize }}</td>
                                                <td class="">{{ $sales->saleDate }}</td>
                                                <td>
                                                    @if ($sales->type == 'IN')
                                                        <span class="badge badge-success">In Stock</span>
                                                    @elseif($sales->type == 'OUT')
                                                        <span class="badge badge-info">Out Stock</span>
                                                    @else
                                                        <span class="badge bg-primary">NA</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($sales->type == 'IN')
                                                        <form action="{{ route('seller.outsales') }}" method="GET"
                                                            class="form">
                                                            @csrf
                                                            <input type="hidden" name="product_number"
                                                                value="{{ $sales->productNumber }}">
                                                            <input type="hidden" name="serial_number" 
                                                                value="{{ $sales->serialNumber }}">
                                                            <input type="hidden" name="sales_id"
                                                                value="{{ $sales->id }}">
                                                            <button type="submit" value="submit"><i
                                                                    class="mdi mdi-minus-box-outline mdi-24px"></i></button>
                                                        </form>
                                                    @else
                                                        N/A
                                                    @endif
                                                </td>
                                                {{-- <td>
                                                    @if ($sales->purchaseInvoice != '')
                                                        @foreach (explode(',', $sales->purchaseInvoice) as $ref)
                                                            <a href="{{ '/' . $ref }}" target="_blank"
                                                                download="{!! $ref !!}"><i
                                                                    class="mdi mdi-arrow-down-bold-circle-outline mdi-36px"></i></a><br />
                                                        @endforeach
                                                    @else
                                                        N/A
                                                    @endif
                                                </td> --}}
                                            </tr>
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
    <!-- End CONTENT WRAPPER -->

@endsection

@section('js')
    <!-- Datatables -->
    <script src="{{ asset('assets/plugins/data-tables/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/data-tables/datatables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/data-tables/datatables.responsive.min.js') }}"></script>
@endsection
