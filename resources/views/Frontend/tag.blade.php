@extends('layouts.tag')
@section('content')
<div class="post">
    <div class="post-author">
        <div class="author-img">
            <a href="#"><img src="https://dummyimage.com/50x50/000/fff" alt="" class="img-circle img-responsive"></a>
        </div>
        <div class="author-details">
            <a href="#"><h4>Sujan Molla <span class="verified fa fa-check-circle-o" title="Verified User"></span></h4></a>
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
<div class="post">
    <div class="post-author">
        <div class="author-img">
            <a href="#"><img src="https://dummyimage.com/50x50/000/fff" alt="" class="img-circle img-responsive"></a>
        </div>
        <div class="author-details">
            <a href="#"><h4>Sujan Molla <span class="verified fa fa-check-circle-o" title="Verified User"></span></h4></a>
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
@endsection