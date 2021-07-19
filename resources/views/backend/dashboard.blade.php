@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    

<style>
.card-box {
    position: relative;
    color: #fff;
    padding: 20px 10px 40px;
    margin: 20px 0px;
}
.card-box:hover {
    text-decoration: none;
    color: #f1f1f1;
}
.card-box:hover .icon i {
    font-size: 100px;
    transition: 1s;
    -webkit-transition: 1s;
}
.card-box .inner {
    padding: 5px 10px 0 10px;
}
.card-box h3 {
    font-size: 27px;
    font-weight: bold;
    margin: 0 0 8px 0;
    white-space: nowrap;
    padding: 0;
    text-align: left;
}
.card-box p {
    font-size: 15px;
}
.card-box .icon {
    position: absolute;
    top: auto;
    bottom: 5px;
    right: 5px;
    z-index: 0;
    font-size: 72px;
    color: rgba(0, 0, 0, 0.15);
}
.card-box .card-box-footer {
    position: absolute;
    left: 0px;
    bottom: 0px;
    text-align: center;
    padding: 3px 0;
    color: rgba(255, 255, 255, 0.8);
    background: rgba(0, 0, 0, 0.1);
    width: 100%;
    text-decoration: none;
}
.card-box:hover .card-box-footer {
    background: rgba(0, 0, 0, 0.3);
}
.bg-blue {
    background-color: #00c0ef !important;
}
.bg-green {
    background-color: #00a65a !important;
}
.bg-orange {
    background-color: #f39c12 !important;
}
.bg-red {
    background-color: #d9534f !important;
}
</style>

<!-- <div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>@lang('strings.backend.dashboard.welcome') {{ $logged_in_user->name }}!</strong>
            </div>
            <div class="card-body">
                {!! __('strings.backend.welcome') !!}
            </div>
        </div>
    </div>
</div> -->

<div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card-box" style="background-color: #26495c; border-radius: 15px 15px 15px 15px;">
                    <div class="inner">
                        <h3> {{ $contactus }} </h3>
                        <p> Contact Us </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-comments mb-4 mr-2" aria-hidden="true"></i>
                    </div>
                    <a href="{{url('admin/contactus')}}" class="card-box-footer" style="border-radius: 0px 0px 15px 15px;">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="card-box" style="background-color: #c66b3d; border-radius: 15px 15px 15px 15px;">
                    <div class="inner">
                        <h3> {{ $projects }} </h3>
                        <p> Projects </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-tasks mb-4 mr-3" aria-hidden="true"></i>
                    </div>
                    <a href="{{url('admin/projects')}}" class="card-box-footer" style="border-radius: 0px 0px 15px 15px;">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card-box" style="background-color: #c4a35a; border-radius: 15px 15px 15px 15px;">
                    <div class="inner">
                        <h3> {{ $awards }} </h3>
                        <p> Awards </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-award mb-4 mr-3" aria-hidden="true"></i>
                    </div>
                    <a href="{{url('admin/awards')}}" class="card-box-footer" style="border-radius: 0px 0px 15px 15px;">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card-box" style="background-color: #ddc3a5; border-radius: 15px 15px 15px 15px;">
                    <div class="inner">
                        <h3> {{ $lifeat }} </h3>
                        <p> Life at RDC </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-suitcase-rolling mb-4 mr-3"></i>
                    </div>
                    <a href="{{url('admin/lifeat')}}" class="card-box-footer" style="border-radius: 0px 0px 15px 15px;">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>







@endsection
