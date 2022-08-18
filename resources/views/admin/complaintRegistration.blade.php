@extends('admin.layouts.app')

@section('title')
    @lang('title.complaintRegistration')
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
                    <h2>Complaint Registration</h2>
                    <p class="breadcrumbs"><span><a href="{{ route('admin.home') }}">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Complaint Registration
                    </p>
                </div>
                <div>
                    <a href="{{ route('exportAllComplaintRegistration') }}" class="btn btn-primary"> Export File</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Priority Code</th>
                                            <th>Complaint ID</th>
                                            <th>Previous Complaint ID</th>
                                            <th>Status</th>
                                            <th>Customer Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Product Number</th>
                                            <th>Serial Number</th>
                                            <th>Product Purchase Date</th>
                                            <th>Warranty Check</th>
                                            <th>Chanal Purchase</th>
                                            <th>City</th>
                                            <th>State</th>
                                            <th>Countries</th>
                                            <th>PinCode</th>
                                            <th>Issue</th>
                                            <th>Purchase Invoice</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($complaintRegistration as $cr)
                                            <tr>
                                                <td>{{ $cr->created_at }}</td>
                                                <td>
                                                    @if ($cr->priority == null)
                                                        N/A
                                                    @else
                                                        {{ $cr->priority }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="javascript:0" data-bs-toggle="modal"

                                                        class="view-detail" onClick="popupfunctioncall('{{$cr->ticketID}}');">{{ $cr->ticketID }}</i>
                                                    </a>
                                                    {{-- <a data-bs-target="#modal-contact" class="view-detail"
                                                        data-bs-toggle="modal"
                                                        href="{{ route('complaintUpdated.update', [$cr->ticketID]) }}"
                                                        style="text-decoration: none;">{{ $cr->ticketID }}&nbsp;<i
                                                            class="ti-eye"></i></a> --}}
                                                    {{-- <a href="{{ route('complaintUpdated.details', [$cr->ticketID]) }}" target="_blank">{{ $cr->ticketID }}&nbsp;<i
                                                            class="ti-eye"></i></a> --}}
                                                </td>
                                                <td>
                                                    @if ($cr->ticketOld == null)
                                                        N/A
                                                    @else
                                                        {{ $cr->ticketOld }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($cr->status == 'Pending For Review')
                                                        <span class="badge badge-warning">Pending For Review</span>
                                                    @elseif($cr->status == 'Approved')
                                                        <span class="badge badge-primary">Approved</span>
                                                    @elseif ($cr->status == 'Solved')
                                                        <span class="badge badge-success">Solved</span>
                                                    @elseif ($cr->status == 'Denied')
                                                        <span class="badge badge-danger">Denied</span>
                                                    @elseif ($cr->status == 'In Process')
                                                        <span class="badge badge-info">In Process</span>
                                                    @elseif ($cr->status == null)
                                                        N/A
                                                    @endif
                                                </td>
                                                <td>{{ $cr->name }}</td>
                                                <td>{{ $cr->email }}</td>
                                                <td>{{ $cr->phone }}</td>
                                                <td>{{ $cr->productPartNo }}</td>
                                                <td>{{ $cr->productSerialNo }}</td>
                                                <td>{{ $cr->purchaseDate }}</td>
                                                <td>{{ $cr->warrantyCheck }}</td>
                                                <td>{{ $cr->channelPurchase }}</td>
                                                <td>
                                                    {{-- <?php $checkCity = \App\Models\City::where('id', $cr->city)->first(); ?>
                                                    {{ $checkCity->name }} --}}
                                                    {{ $cr->city }}
                                                </td>
                                                <td>
                                                    {{-- <?php $checkState = \App\Models\State::where('id', $cr->state)->first(); ?>
                                                    {{ $checkState->name }} --}}
                                                    {{ $cr->state }}
                                                </td>
                                                <td>
                                                    {{-- <?php $checkCountrie = \App\Models\Country::where('id', $cr->countries)->first(); ?>
                                                    {{ $checkCountrie->name }} --}}
                                                    {{ $cr->countries }}
                                                </td>
                                                <td>{{ $cr->pinCode }}</td>
                                                {{-- <td>{{ $cr->issue }}</td> --}}
                                                <td>
                                                    <textarea class="" style="border: none;" name="" id="" cols="40" rows="2">{{ $cr->issue }}</textarea>
                                                </td>
                                                <td class="">
                                                    @if ($cr->purchaseInvoice != null)
                                                        {{-- @foreach (explode(',', $cr->purchaseinvoice) as $ref) --}}
                                                        <a href="{{ '/' . $cr->purchaseInvoice }}" target="_blank"
                                                            download="{!! $cr->purchaseInvoice !!}"><i
                                                                class="mdi mdi-arrow-down-bold-circle-outline mdi-36px"></i></a><br />
                                                        {{-- @endforeach --}}
                                                    @else
                                                        N/A
                                                    @endif
                                                </td>
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
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="contact-info px-4">
                                <h4 class="text-dark mb-1" id="ticketid"></h4>
                                <p class="text-dark font-weight-medium pt-3 mb-2">Email</p>
                                <p id="email"></p>
                                <p class="text-dark font-weight-medium pt-3 mb-2">Phone Number</p>
                                <p id="phone"></p>
                                <p class="text-dark font-weight-medium pt-3 mb-2">Product Purchase Date</p>
                                <p id="purchaseDate"></p>
                                <p class="text-dark font-weight-medium pt-3 mb-2">Product Number</p>
                                <p class="mb-2" id="productPartNo"></p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-info px-4"><br />
                                <p class="text-dark font-weight-medium pt-3 mb-2">Serial Number</p>
                                <p id="productSerialNo"></p>
                                <form class="row g-3" method="POST"
                                    action="{{ route('complaintRegistration.update')}}">
                                    {!! csrf_field() !!}
                                    <div class="row">

                                        {{-- Status --}}
                                        <div class="col-md-12 col-lg-12">
                                            <input type="hidden" name="ticketID" id="avita-ticketid">
                                            <div class="mb-3">
                                                <label for="status" class="form-label">
                                                    <p class="text-dark font-weight-medium pt-3 mb-2">Status</p>
                                                </label>
                                                <select class="form-select1 @error('status') is-invalid @enderror"
                                                    id="status" aria-describedby="statusHelp" name="status">
                                                    <option value="">------</option>
                                                    <option value="Approved">Approved</option>
                                                    <option value="In Process">In Process</option>
                                                    <option value="Denied">Denied</option>
                                                    <option value="Solved">Solved</option>
                                                </select>
                                                @error('status')
                                                    <span class="invalid-feedback form-text" id="statusHelp" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Comment --}}
                                        {{-- <div class="col-md-6 col-lg-6">
                                            <div class="mb-3">
                                                <label for="comment" class="form-label">
                                                    <p class="text-dark font-weight-medium pt-3 mb-2">Comment</p>
                                                </label>
                                                <select class="form-select1 @error('comment') is-invalid @enderror"
                                                    id="comment" aria-describedby="commentHelp"
                                                    name="comment">
                                                    <option value="">------</option>
                                                    <option value="Online">Online</option>
                                                    <option value="Offline">Offline</option>
                                                </select>
                                                @error('comment')
                                                    <span class="invalid-feedback form-text" id="commentHelp"
                                                        role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> --}}

                                        <div class="col-md-12 text-center mt-4">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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

    <script>
        function popupfunctioncall(ticketid) {
            $.ajax({
                type: "GET",
                dataType: 'json',
                // data:{('ticketId' => ticketid)},
                url: '/admin/complaintRegistrationpopUp/',
                data: {
                    'ticketid': ticketid
                },
                global: false,
                async: true,

                success: function(result) {
                    $('#modal-contact').modal('show');
                    $('#email').html(result.email);
                    $('#ticketid').html(result.ticketID);
                    // $('#avita-ticketid').html(result.ticketID);
                    $('#phone').text(result.phone);
                    $('#productPartNo').text(result.productPartNo);
                    $('#productSerialNo').text(result.productSerialNo);
                    $('#purchaseDate').text(result.purchaseDate);

                    // var obj = jQuery.parseJSON(result);
                    var obj = JSON.parse(JSON.stringify(result));
                    $('#avita-ticketid').val(obj.ticketID);

                },

            });
            // alert("ticketid = " + ticketid);
        }
    </script>
@endsection
