@extends('front.layouts.app')
@section('content')
<style>
    .box_nav_bar {
    height: 10em;
}
.row.justify-content-md-center {
    height: 10em;
}

.col-md-auto {
    text-align: center;
    margin-top: 4em;
}
 </style>
<div class="container-fluid banner text-center">
<h1 style="padding-top: 6rem;">Services On Your Finger.</h1>
    <h3 class="pt-4">An innovative, more efficient platform for service providers and <br> users ask and give services.
    </h3>
    <div class="input-group container mt-5">
        <input type="search" class="form-control" placeholder="Enter a Profession....." aria-label="Search" aria-describedby="search-addon" />
            <button class="search">Search</button>
    </div>
</div>
{{-- Footer navigation bar start --}}

<div class="container" style="height: 160px; background-color: white">
    <div class="box_nav_bar">
        <div class="row justify-content-md-center">
          <div class="col-md-auto">
            Top Services
          </div>
          <div class="col-md-auto">
            <a href="#"><i class="fab fa-facebook"></i></a>
          </div>
          <div class="col-md-auto">
            Variable width content
          </div>
          <div class="col-md-auto">
            Variable width content
          </div>
          <div class="col-md-auto">
            Variable width content
          </div>
          <div class="col-md-auto">
            Variable width content
          </div>
          <div class="col-md-auto">
            3 of 3
          </div>
        </div>
    </div>
</div>

{{-- Footer navigation bar End --}}


<section class="join" style="background-color: #026176">
    <div class="container">
        <div class="row p-5">
            <div class="col-9">
                <p>Find the best person for your Work via Rojgar Sewa. Join Rojgar Sewa for the emplyoment Opportunities and finding clients . Click here to learn more.</p>
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-outline-primary join-button">Join RojgarSewa</button>
            </div>
        </div>
    </div>
</section>
{{-- <div class="container" style="height: 200px; background-color: white"> --}}
</div>
@endsection
