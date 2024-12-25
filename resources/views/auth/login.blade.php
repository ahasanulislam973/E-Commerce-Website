@extends('frontend.master_dashboard')
@section('main')
@section('title')
    Login
@endsection
<!--Page Title-->
<div class="text-center page section-header">
    <div class="page-title">
        <div class="wrapper">
            <h1 class="page-width">Login</h1>
        </div>
    </div>
</div>
<!--End Page Title-->

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
            <div class="mb-4">
                <form method="post" action="{{ route('login') }}" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form" style="margin: 51px 0;">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="CustomerEmail">Email</label>
                                <input type="email" name="email" placeholder=""
                                    id="CustomerEmail" class="" autocorrect="off"
                                    autocapitalize="off" autofocus="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="CustomerPassword">Password</label>
                                <input type="password" value="" name="password"
                                    placeholder="" id="CustomerPassword" class="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                            <input type="submit" class="mb-3 btn" value="Sign In">
                            <p class="mb-4">
                                {{-- <a href="{{ route('password.request') }}" id="RecoverPassword">Forgot your password?</a> &nbsp; |
                                &nbsp; --}}
                                <a href="{{ route('register') }}" id="customer_register_link">Create account</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
