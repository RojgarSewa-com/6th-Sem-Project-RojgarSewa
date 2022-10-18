@extends('front.layouts.app')

@section('content')
@include('/front/user-login')
    <!-- <div class="container-fluid login">
        <div class="row d-flex justify-content-center">
            <div class="row justify-content-center" style="background-color: white">
                <div class="col-sm-3">
                    <a ><button type="button" data-type="user" class="btn btn-primary btn-lg btn-block btn-layout2" style="width: 100%">Login as User</button></a>
                </div>
                <div class="col-sm-3">
                    <a ><button type="button" data-type="user"class="btn btn-success btn-lg btn-block btn-layout2" style="width: 100%">Login as Provider</button></a>
                </div>
            </div>
        </div>
    </div>
 <div id="layout2"></div>
<script>
        $( document).on( "click", ".btn-layout2", function() {
            let type = jQuery(this).attr('data-type');
            $('#layout2').empty();
            if(type === 'user') {
                $('#layout2').append(`@include('/front/user-login')`);
            }
            if(type === 'provider') {
                $('#layout2').append(`@include('/front/provider-login')`);
            }
        });
</script> -->
@endsection

