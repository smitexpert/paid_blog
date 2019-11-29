@extends('layouts.profile')

@section('content')
    <div class="row">
        <div class="col-sm-6 col-sm-push-6">
            <div class="pull-right-sm">
                <img src="https://dummyimage.com/150x150/000/fff" alt="" class="img-circle img-responsive">
            </div>
        </div>
        <div class="col-sm-6 col-sm-pull-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left">
                            <h1>Sujan Molla <span class="verified fa fa-check-circle-o" title="Verified User"></span></h1>
                    </div>
                    <div class="pull-left" style="margin-top: 8px;">
                        <br>
                        <a href="#" class="follow-btn-lg-o">Following</a>
                    </div>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet.</p>
            <p class="small">
                <a href="#" class="btn-link">0 Following</a> <span style="color: 000; font-size:6px; padding: 0 5px;" class="fa fa-minus"></span> <a href="#" class="btn-link">0 Followers</a>
            </p>
        </div>
    </div>
    <div class="profile-info">
        <div class="row">
            <div class="col-md-12">
                <p class="profile-info-text">
                    Member scence 2019, Writer in tag1, tag2..
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <ul class="list-inline dashboard-menu">
                <li><a class="active" href="#">Profile</a></li>
                <li><a href="#">Claps</a></li>
                <li><a href="#">Response</a></li>
            </ul>
        </div>
    </div>
    {{-- <br> --}}
    <div class="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="post">
                    <div class="post-author">
                        <div class="author-img">
                            <img src="https://dummyimage.com/50x50/000/fff" alt="" class="img-circle img-responsive">
                        </div>
                        <div class="author-details">
                            <h4>Sujan Molla <span class="verified fa fa-check-circle-o" title="Verified User"></span></h4>
                            <p><i class="tf-ion-ios-calendar"></i> 20, MAR 2017</p>
                        </div>
                    </div>
                    <div class="post-thumb">
                        <a href="{{ route('single') }}">
                            <img class="img-responsive" src="images/blog/blog-post-1.jpg" alt="">
                        </a>
                    </div>
                    <h1 class="post-title"><a href="{{ route('single') }}">How To Wear Bright Shoes</a></h1>
                    <p class="post-subtitle"><a href="{{ route('single') }}">The Actual Way to wear bright shoes by self.</a></p>
                    <a href="{{ route('single') }}" class="read-more">Read More...</a>
                </div>
                <div class="text-center">
                    <ul class="pagination post-pagination">
                        <li><a href="#">Prev</a>
                        </li>
                        <li class="active"><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li><a href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection