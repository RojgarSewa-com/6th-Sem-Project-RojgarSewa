@extends('front.layouts.app')
<style>
    .login{
        font-size: 0.9rem!important;
    }
</style>
@section('content')
<div class="container-fluid login">
    <div class="row d-flex justify-content-center">
        <div class="col-6 border" style="background-color: white">
            <h5 class="text-center pt-5"><b style="color: #0096B7">Log in to RojgarSewa</b></h5>
            <div class="row mt-4 d-flex justify-content-center">
                <div class="col-7 mt-4">
                    <form>
                  <div class="row">
                      <div class="col-3">
                          <label class="mt-2">Email</label>
                      </div>
                      <div class="col">
                          <input type="email" name="email" class="form-control">
                      </div>
                  </div>
                    <div class="row mt-3">
                        <div class="col-3">
                            <label class="mt-2">Password</label>
                        </div>
                        <div class="col">
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="text-center mt-4">
                    <button type="button" class="btn btn-primary">SIGN IN</button>
                    </div>
                    <p class="mt-4 mb-5 text-center">Don't have an account? <a href="{{route('register')}}" style="text-decoration: none; color: #0096B7">Sign Up</a></p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
