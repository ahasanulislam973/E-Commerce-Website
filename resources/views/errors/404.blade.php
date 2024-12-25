@extends('frontend.master_dashboard')
@section('main')
@section('title')
    404 Page | Fastive Mart - Online Vape Shop - Vape Mods, Kits &amp; E-Liquid
@endsection
<!-- Lookbook Start -->
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="empty-page-content text-center">
                <h1>404 Page Not Found</h1>
                <p>The page you requested does not exist.</p>
                <p>
                    <a href="{{ url('/') }}" class="btn btn--has-icon-after">Continue shopping
                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Lookbook Start -->
@endsection
