@if (session('success'))
    <div class="alert alert-success">
        <i class="ti-info-alt"></i> {{ session('success') }}
    </div>
@endif

@if (session('usersuccess'))
    <div class="alert alert-success">
        <i class="ti-info-alt"></i> {{ session('usersuccess') }}
    </div>
@endif

@if (session('changePassword'))
    <div class="alert alert-success">
        <i class="ti-info-alt"></i> {{ session('changePassword') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger" role="alert">
        <i class="mdi mdi-information-outline"></i> {{ session('error') }}
    </div>
@endif

@if (session('status'))
    <div class="alert alert-success">
        <i class="ti-info-alt"></i> {{ session('status') }}
    </div>
@endif

{{-- @if ($errors->any())
    <div class="alert alert-danger ">
        @foreach ($errors->all() as $error)
        <ul >
            <li class="mdi mdi-information-outline "> {{ $error }}</li>
        </ul>
        @endforeach
    </div>
@endif --}}

@if (session('msg'))
    <div class="alert alert-success" role="alert">
        {{ session('msg') }}
    </div>
@endif
