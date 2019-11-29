@extends('layouts.response')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <p>Showing responses for:</p>
            <div class="response">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="response-for">
                            <a href="{{ route('single') }}"><p>How To Wear Bright Shoes</p></a>
                            <a href="#"><p class="small">Sujan Molla</p></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <p class="pull-right" style="font-size: 12px"><span class="fa fa-sign-language"></span> 1k - <span class="fa fa-comment"></span> 36</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>Responses</p>
        </div>
    </div>
    <div class="response">
        <div class="post-author">
            <div class="author-img">
                <a href="#"><img src="https://dummyimage.com/50x50/000/fff" alt="" class="img-circle img-responsive"></a>
            </div>
            <div class="author-details">
                <a href="#"><h4 style="margin-top: 15px;">Sujan Molla <span class="verified fa fa-check-circle-o" title="Verified User"></span></h4></a>
                {{-- <p><i class="tf-ion-ios-calendar"></i> 20, MAR 2017</p> --}}
            </div>
        </div>
        <div class="response-message">
            <div class="row">
                <div class="col-md-12">
                    <textarea name="" id=""></textarea>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-info">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <div class="response">
        <div class="post-author">
            <div class="author-img">
                <a href="#"><img src="https://dummyimage.com/50x50/000/fff" alt="" class="img-circle img-responsive"></a>
            </div>
            <div class="author-details">
                <a href="#"><h4>Sujan Molla <span class="verified fa fa-check-circle-o" title="Verified User"></span></h4></a>
                <p><i class="tf-ion-ios-calendar"></i> 20, MAR 2017</p>
            </div>
        </div>
        <div class="response-text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus dignissimos velit minus rem eaque ducimus!</p>
        </div>
    </div>
    <div class="response">
        <div class="post-author">
            <div class="author-img">
                <a href="#"><img src="https://dummyimage.com/50x50/000/fff" alt="" class="img-circle img-responsive"></a>
            </div>
            <div class="author-details">
                <a href="#"><h4>Sujan Molla <span class="verified fa fa-check-circle-o" title="Verified User"></span></h4></a>
                <p><i class="tf-ion-ios-calendar"></i> 20, MAR 2017</p>
            </div>
        </div>
        <div class="response-text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus dignissimos velit minus rem eaque ducimus!</p>
        </div>
    </div>
@endsection