<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends BaseFrontController
{
    function home()
    {
        return view('front.home');
    }

    function login()
    {
        return view('front.login');

    }
    function userLogin()
    {
        return view('front.user-login');

    }
    function register()
    {
        return view('front.register');

    }
    function userRegister()
    {
        return view('front.user-register');

    }
    function providerRegister()
    {
        return view('front.provider-register');

    }
}
