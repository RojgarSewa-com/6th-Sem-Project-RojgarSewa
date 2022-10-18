@extends('front.layouts.app')

@section('content')
    <div class="container-fluid login">
        <div class="row d-flex justify-content-center">
            <div class="row justify-content-center" style="background-color: white">
                <div class="col-sm-3">
                    <a ><button type="button" data-type="user" class="btn btn-primary btn-lg btn-block btn-layout" style="width: 100%">Sign Up as User</button></a>
                </div>
                <div class="col-sm-3">
                    <a ><button type="button" data-type="provider" class="btn btn-success btn-lg btn-block btn-layout" style="width: 100%">Sign Up as Provider</button></a>
                </div>
            </div>
        </div>
    </div>
    <div id="layout">
    </div>
     <script>
        $( document).on( "click", ".btn-layout", function() {
            let type = jQuery(this).attr('data-type');
            $('#layout').empty();
            if(type === 'user') {
                $('#layout').append(`@include('/front/user-register')`);
            }
            if(type === 'provider') {
                $('#layout').append(`@include('/front/provider-register')`);
            }
        });
</script>
@endsection
