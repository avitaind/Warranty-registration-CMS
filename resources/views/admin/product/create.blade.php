@extends('admin.layouts.app')

@section('title')
    @lang('title.admin_product_registration')
@stop

@section('content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
                <h1>Serial Number Registration</h1>
                <p class="breadcrumbs"><span><a href="{{ route('admin.home') }}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Add Product
                </p>
            </div>
            <div class="row">
                <div class="col-xl-1 ">
                </div>
                <div class="col-xl-10 col-lg-12">
                    <div class="ec-cat-list card card-default mb-24px">
                        <div class="card-body">
                            <h4>Serial Number Registration </h4>
                            <hr>
                            <small>Items marked with an asterisk (*) must be filled out.</small><br><br>

                            <div class="col-lg-12">
                                @include('component.alert')
                                <div class="ec-vendor-upload-detail">
                                    <form class="row g-3" method="Get" >
                                        {{-- <form class="row g-3" method="Post" action="{{ route('serialNumberCheck') }}"> --}}
                                        {{-- {!! csrf_field() !!} --}}
                                        <div class="col-md-12 ">
                                            <div class="row">
                                                <div class="div col-md-4">
                                                    <label for="product_type" class="form-label">Product Type: <span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="div col-md-6 p-1">
                                                    <select name="product_type" id="product_type"
                                                        class="form-select @error('product_type') is-invalid @enderror">
                                                        <option hidden>Choose Product Type</option>
                                                        @foreach ($product_type as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                        @error('product_type')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </select>
                                                </div>
                                                <div class="div col-md-2 p-1">
                                                    <a class="btn btn-outline-primary" href="{{ route('product.add') }}">Add
                                                        New Product Type</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="div col-md-4">
                                                    <label for="product_Series" class="form-label">Product Series:
                                                        <span class="required">*</span></label>
                                                </div>
                                                <div class="div col-md-6 p-1">
                                                    <select name="product_series" id="product_series"
                                                        class="form-select @error('products_id') is-invalid @enderror"></select>
                                                    @error('products_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="div col-md-2 p-1">
                                                    <a class="btn btn-outline-primary"
                                                        href="{{ route('create.series') }}">Add New Product Series</a>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="div col-md-4">
                                                    <label for="product_model" class="form-label">Product
                                                        Model: <span class="required">*</span></label>
                                                </div>
                                                <div class="div col-md-6 p-1">
                                                    <select name="product_model" id="product_model"
                                                        class="form-select @error('product_model_id') is-invalid @enderror">
                                                    </select>
                                                    @error('product_model_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="div col-md-2 p-1">
                                                    <a class="btn btn-outline-primary"
                                                        href="{{ route('create.model') }}">Add New Product Model</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="div col-md-4">
                                                    <label for="product_number" class="form-label">Product
                                                        Number: <span class="required">*</span></label>
                                                </div>
                                                <div class="div col-md-6 p-1">
                                                    <select name="product_number" id="product_number"
                                                        class="form-select @error('product_number') is-invalid @enderror">
                                                    </select>
                                                    @error('product_number')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="div col-md-2 p-1">
                                                    <a class="btn btn-outline-primary"
                                                        href="{{ route('create.number') }}">Add New Product Number</a>
                                                </div>

                                            </div>
                                        </div>

                                        {{-- Product Configuration: --}}
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="div col-md-4">
                                                    <label for="product_configuration" class="form-label">Product
                                                        Configuration:
                                                    </label>
                                                </div>
                                                <div class="div col-md-6 p-1">
                                                    <textarea class="form-select1 @error('titleName') is-invalid @enderror" id="product_configuration"
                                                        name="product_configuration" rows="2"></textarea>
                                                        @error('titleName')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>

                                                <div class="div col-md-2 p-1">
                                                    {{-- <a class="btn btn-outline-primary" href="{{ route('create.configuration')}}">Add New</a> --}}
                                                </div>

                                            </div>
                                        </div>

                                        {{-- Serial Number: --}}
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="div col-md-4">
                                                    <label for="serial_number" class="form-label">Serial Number: <span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="div col-md-6 p-1">
                                                    {{-- <select name="serial_number" id="serial_number" class="form-select">
                                                        <option value="">Select Product Series</option>
                                                    </select> --}}
                                                    <input type="text"
                                                        class="form-select1 @error('serial_number') is-invalid @enderror"
                                                        id="serial_number" name="serial_number" value="">
                                                    @error('serial_number')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 text-center mt-4">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-1 ">
                </div>
            </div>
        </div> <!-- End Content -->
    </div>
    <!-- End Content Wrapper -->
    <!-- End Content Wrapper -->
@endsection

@section('js')
    <script>
        jQuery(document).ready(function() {
            jQuery('#product_type').change(function() {
                let producttypeID = jQuery(this).val();
                jQuery('#product_model').html('<option value="">Select Product Model</option>')
                jQuery('#product_number').html('<option value="">Select Product Number</option>')
                // alert(producttypeID)
                jQuery('#product_series').html('<option value="">Select Product Series</option>')
                jQuery.ajax({
                    url: '/getproductseries',
                    type: 'post',
                    data: 'producttypeID=' + producttypeID + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        jQuery('#product_series').html(result)
                    }
                });
            });

            jQuery('#product_series').change(function() {
                let productSeriesID = jQuery(this).val();
                // alert(productSeriesID)
                jQuery.ajax({
                    url: '/getproductmodel',
                    type: 'post',
                    data: 'productSeriesID=' + productSeriesID + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        jQuery('#product_model').html(result)
                    }
                });
            });

            jQuery('#product_model').change(function() {
                let productModelID = jQuery(this).val();
                // alert(productModelID)
                jQuery.ajax({
                    url: '/getproductnumber',
                    type: 'post',
                    data: 'productModelID=' + productModelID + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        jQuery('#product_number').html(result)
                    }
                });
            });

            jQuery('#product_number').change(function() {
                let productConfigurationID = jQuery(this).val();
                // alert(productConfigurationID)
                jQuery.ajax({
                    url: '/getproductConfiguration',
                    type: 'post',
                    data: 'productConfigurationID=' + productConfigurationID +
                        '&_token={{ csrf_token() }}',
                    success: function(result) {
                        jQuery('#product_configuration').html(result)
                    }
                });
            });

        });
    </script>
@endsection

@section('js')
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script> --}}
@endsection
