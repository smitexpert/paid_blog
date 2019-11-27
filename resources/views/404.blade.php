@extends('layouts.master')
@section('app')
    <section class="page-404">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="index.html">
                        <img src="{{ url('') }}/images/logo.png" alt="site logo" />
                    </a>
                    <h1>404</h1>
                    <h2>Page Not Found</h2>
                    <a href="{{ route('home') }}" class="btn btn-main"><i class="tf-ion-android-arrow-back"></i> Go Home</a>
                    <p class="copyright-text">© {{ date('Y') }} Themefisher All Rights Reserved</p>
                </div>
            </div>
        </div>
    </section>
@endsection