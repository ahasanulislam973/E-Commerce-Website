@extends('frontend.master_dashboard')
@section('main')
@section('title')
    Resister
@endsection
<!--Page Title-->
<div class="text-center page section-header">
    <div class="page-title">
        <div class="wrapper">
            <h1 class="page-width">Create an Account</h1>
        </div>
    </div>
</div>
<!--End Page Title-->

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
            <div class="mb-4">
                <form method="post" action="{{ route('register_test') }}" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" placeholder=""
                                    id="name" autofocus="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" placeholder=""
                                    id="email" class="" autocorrect="off"
                                    autocapitalize="off" autofocus="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" value="" name="password"
                                    placeholder="" id="password" class="">
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" value="" name="password_confirmation"
                                    placeholder="" id="password_confirmation" class="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                            <input type="submit" class="mb-3 btn" value="Create">
                            <p class="mb-4">
                                <a href="{{ route('login') }}" id="customer_register_link">Already registered?</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
