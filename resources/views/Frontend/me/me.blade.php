@extends('layouts.single')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <h1>Sujan Molla</h1>
            <p>Lorem ipsum dolor sit amet.</p>
            <p class="small">
                <a href="#" class="btn-link">0 Following</a> <span style="color: 000; font-size:6px; padding: 0 5px;" class="fa fa-minus"></span> <a href="#" class="btn-link">0 Followers</a>
            </p>
        </div>
        <div class="col-sm-6">
            <div class="pull-right">
                <img src="https://dummyimage.com/150x150/000/fff" alt="" class="img-circle img-responsive">
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
@endsection