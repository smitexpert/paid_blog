@extends('layouts.master')
@section('app')
    @include('partials.header')
    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection