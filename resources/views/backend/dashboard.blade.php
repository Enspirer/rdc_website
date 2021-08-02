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



<div class="modal fade" id="overlay">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title pull-left">Instructions for Limitations</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
      </div>
      <div class="modal-body">

        <h5 class="mb-3">Home Page</h5>
        <p>Image ( dimensions = width: 1330px * height: 745px )</p>
        <p>Image ( Size = Maximum size should be 2MB )</p>
        <p>Image ( Type = jpeg,png,jpg )</p>
        <hr>
        <h5 class="mb-3">Awards</h5>
        <p>Image ( Size = Maximum size should be 2MB )</p>
        <p>Image ( Type = jpeg,png,jpg )</p>
        <hr>
        <h5 class="mb-3">People->Professional team</h5>
        <p>Image ( dimensions = width: 700px * height: 738px )</p>
        <p>Image ( Size = Maximum size should be 2MB )</p>
        <p>Image ( Type = jpeg,png,jpg )</p>
        <hr>
        <h5 class="mb-3">People->Office team</h5>
        <p>Image ( dimensions = width: 700px * height: 738px )</p>
        <p>Image ( Size = Maximum size should be 2MB )</p>
        <p>Image ( Type = jpeg,png,jpg )</p>
        <hr>
        <h5 class="mb-3">Life At RDCA</h5>
        <p>Feature Image ( dimensions = width: 1920px * height: 1080px )</p>
        <p>Feature Image ( Size = Maximum size should be 2MB )</p>
        <p>Feature Image ( Type = jpeg,png,jpg )</p>
        <br>
        <p>Multiple Images ( Size = Maximum size should be 2MB )</p>
        <p>Multiple Images ( Type = jpeg,png,jpg )</p>
        <hr>
        <h5 class="mb-3">Projects->Project Banner</h5>
        <p>Image ( dimensions = width: 1330px * height: 745px )</p>
        <p>Image ( Size = Maximum size should be 2MB )</p>
        <p>Image ( Type = jpeg,png,jpg )</p>
        <hr>
        <h5 class="mb-3">Projects->Project</h5>
        <p>Feature Image ( Size = Maximum size should be 2MB )</p>
        <p>Feature Image ( Type = jpeg,png,jpg )</p>
        <br>
        <p>Multiple Images ( Size = Maximum size should be 2MB )</p>
        <p>Multiple Images ( Type = jpeg,png,jpg )</p>
        <hr>
        <h5 class="mb-3">Press Release</h5>
        <p>Image ( Size = Maximum size should be 2MB )</p>
        <p>Image ( Type = jpeg,png,jpg )</p>
        <br>
        <p>PDF ( Size = Maximum size should be 2MB )</p>
        <p>PDF ( Type = pdf )</p>
        <br>
        <p>Title ( Length = Maximum Characters should be 13 )</p>
          

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<script type="text/javascript">

$(window).on('load', function() {
        $('#overlay').modal('show');
    });
$("#close-btn").click(function () {
       $('#overlay').modal('hide');
});

</script>  


@endsection
