@extends('layouts.master')
@section('app')
    @include('partials.header')
    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @yield('content')
                </div>
                <div class="col-md-4">
                    <aside class="sidebar">
                        @include('partials.topic-sidebar')
                    </aside>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection