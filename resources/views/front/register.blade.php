@extends('front.layouts.app')
@section('content')
    <div class="container-fluid login">
        <!-- <div class="row d-flex justify-content-center"> -->
            <div class="row" style="background-color: white">
                <div class="col-sm-6">
                    <a href="{{route('user-register')}}"><button type="button" class="btn btn-primary btn-lg btn-block" style="width: 100%">Sign Up as User</button></a>
                </div>
                <div class="col-sm-6">
                    <a href="{{route('provider-register')}}"><button type="button" class="btn btn-success btn-lg btn-block" style="width: 100%">Sign Up as Provider</button></a>
                </div>
            </div>
        <!-- </div> -->
    </div>

@endsection
