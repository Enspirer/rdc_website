@extends('frontend.layouts.layout')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">


    <!--banner section-->
    <section id="banner">
        <div class="container-fluid banner-section px-0">
            <div id="carousel-projects" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carousel-projects" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carousel-projects" data-bs-slide-to="2"></li>
                    <li data-bs-target="#carousel-projects" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carousel-projects" data-bs-slide-to="3"></li>
                    <li data-bs-target="#carousel-projects" data-bs-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/projects-banner-1.jpg') }}" alt="First slide" class="img-fluid" style="width: 100%;">
                        <div class="carousel-caption text-end">
                            <a href="#"><img src="{{ asset('img/chat-icon.svg') }}" alt="" style="height: 1.5rem;"></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/projects-banner-2.jpg') }}" alt="Second slide" class="img-fluid" style="width: 100%;">
                        <div class="carousel-caption text-end">
                            <a href="#"><img src="{{ asset('img/chat-icon.svg') }}" alt="" style="height: 1.5rem;"></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/projects-banner-3.jpg') }}" alt="Third slide" class="img-fluid" style="width: 100%;">
                        <div class="carousel-caption text-end">
                            <a href="#"><img src="{{ asset('img/chat-icon.svg') }}" alt="" style="height: 1.5rem;"></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/projects-banner-4.jpg') }}" alt="Third slide" class="img-fluid" style="width: 100%;">
                        <div class="carousel-caption text-end">
                            <a href="#"><img src="{{ asset('img/chat-icon.svg') }}" alt="" style="height: 1.5rem;"></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/projects-banner-5.jpg') }}" alt="Third slide" class="img-fluid" style="width: 100%;">
                        <div class="carousel-caption text-end">
                            <a href="#"><img src="{{ asset('img/chat-icon.svg') }}" alt="" style="height: 1.5rem;"></a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-projects" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-projects" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>


    <!--path-->
    <section id="path">
        <div class="container mt-3 path">
            <p data-aos="fade-down" data-aos-duration="500">Home &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp Projects</p>
        </div>
    </section>


    <!--our projects-->
    <section id="our-projects">
        <div class="container our-projects" style="margin-top: 4rem; padding: 0 7rem;">
            <h2>Our Projects</h2>
            <p class="mt-2" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur deleniti ipsa atque sequi officia beatae sapiente quam quod magnam saepe obcaecati repellat animi officiis deserunt, at vero eaque ex repellendus fuga id quidem rem! Quos debitis nostrum reprehenderit consectetur omnis?</p>

            <ul class="nav mb-3 justify-content-center mt-5" id="projects-tab" role="tablist">
                <li class="nav-item project-item" role="presentation" style="border-bottom: 2px solid white;">
                  <a class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</a>
                </li>
                <li class="nav-item project-item" role="presentation" style="border-bottom: 2px solid white;">
                  <a class="nav-link" id="pills-leisure-tab" data-bs-toggle="pill" data-bs-target="#pills-leisure" type="button" role="tab" aria-controls="pills-leisure" aria-selected="false">Leisure</a>
                </li>
                <li class="nav-item project-item" role="presentation" style="border-bottom: 2px solid white;">
                  <a class="nav-link" id="pills-interior-tab" data-bs-toggle="pill" data-bs-target="#pills-interior" type="button" role="tab" aria-controls="pills-interior" aria-selected="false">Interior</a>
                </li>
                <li class="nav-item project-item" role="presentation" style="border-bottom: 2px solid white;">
                    <a class="nav-link" id="pills-office-tab" data-bs-toggle="pill" data-bs-target="#pills-office" type="button" role="tab" aria-controls="pills-office" aria-selected="false">Office Buildings</a>
                </li>
                <li class="nav-item project-item" role="presentation" style="border-bottom: 2px solid white;">
                    <a class="nav-link" id="pills-residence-tab" data-bs-toggle="pill" data-bs-target="#pills-residence" type="button" role="tab" aria-controls="pills-residence" aria-selected="false">Personal Residence</a>
                </li>
                <li class="nav-item project-item" role="presentation" style="border-bottom: 2px solid white;">
                    <a class="nav-link" id="pills-industrial-tab" data-bs-toggle="pill" data-bs-target="#pills-industrial" type="button" role="tab" aria-controls="pills-industrial" aria-selected="false">Industrial</a>
                </li>
                <li class="nav-item project-item" role="presentation" style="border-bottom: 2px solid white;">
                    <a class="nav-link" id="pills-civic-tab" data-bs-toggle="pill" data-bs-target="#pills-civic" type="button" role="tab" aria-controls="pills-civic" aria-selected="false">Civic</a>
                </li>
                <li class="nav-item project-item" role="presentation" style="border-bottom: 2px solid white;">
                    <a class="nav-link" id="pills-institutional-tab" data-bs-toggle="pill" data-bs-target="#pills-institutional" type="button" role="tab" aria-controls="pills-institutional" aria-selected="false">Institutional</a>
                </li>
            </ul>

            <div class="tab-content mt-5" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="tab">
                    <div class="row">
                        <div class="col-sm-4 p-2 project">
                            <a href="{{ url('individual') }}" class="text-decoration-none">
                                <div style="background-image: url(img/leisure-wilder/wilder-profile.jpg); background-size: cover; height: 250px; border-radius:7px; background-position: center center">
                                    <p class="project-details text-center">The Wilder Nest Bangalow @ Kumana Village</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-4 p-2 project">
                            <div style="background-image: url(img/leisure-flottants/flottants-profile.jpg); background-size: cover; height: 250px; border-radius:7px; background-position: center center">
                                <p class="project-details text-center">The Flottants @ Bentota</p>
                            </div>
                        </div>
                        <div class="col-sm-4 p-2 project">
                            <div style="background-image: url(img/leisure-point/point-profile.jpg); background-size: cover; height: 250px; border-radius:7px; background-position: center center">
                                <p class="project-details text-center">Point De Southern Breeze @ Matara</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 p-2 project">
                            <div style="background-image: url(img/interior-cargills/cargills-profile.jpg); background-size: cover; height: 250px; border-radius:7px; background-position: center center">
                                <p class="project-details text-center">Head office Interior for Cargills Ceylon PLC @ Premier Pacific Building</p>
                            </div>
                        </div>
                        <!-- <div class="col-4 p-2">
                            <div style="background-image: url(img/projects-industrial.png); background-size: cover; height: 250px; border-radius:7px; background-position: center center">
                                <p class="project-details text-center">INDUSTRIAL WORLD</p>
                            </div>
                        </div>
                        <div class="col-4 p-2">
                            <div style="background-image: url(img/projects-civic.png); background-size: cover; height: 250px; border-radius:7px; background-position: center center">
                                <p class="project-details text-center">CIVIC WORLD</p>
                            </div>
                        </div> -->
                    </div>
                    <!-- <div class="row">
                        <div class="col-4 p-2">
                            <div style="background-image: url(img/projects-institutional.png); background-size: cover; height: 250px; border-radius:7px; background-position: center center">
                                <p class="project-details text-center">INSTITUIONAL WORLD</p>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="tab-pane fade" id="pills-leisure" role="tabpanel" aria-labelledby="pills-leisure-tab">
                    <div class="row">
                        <div class="col-sm-4 p-2 project">
                            <a href="{{ url('individual') }}" class="text-decoration-none">
                                <div style="background-image: url(img/leisure-wilder/wilder-profile.jpg); background-size: cover; height: 250px; border-radius:7px; background-position: center center">
                                    <p class="project-details text-center">The Wilder Nest Bangalow @ Kumana Village</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-4 p-2 project">
                            <div style="background-image: url(img/leisure-flottants/flottants-profile.jpg); background-size: cover; height: 250px; border-radius:7px; background-position: center center">
                                <p class="project-details text-center">The Flottants @ Bentota</p>
                            </div>
                        </div>
                        <div class="col-sm-4 p-2 project">
                            <div style="background-image: url(img/leisure-point/point-profile.jpg); background-size: cover; height: 250px; border-radius:7px; background-position: center center">
                                <p class="project-details text-center">Point De Southern Breeze @ Matara</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-interior" role="tabpanel" aria-labelledby="pills-interior-tab">
                    <div class="row">
                        <div class="col-sm-4 p-2 project">
                            <div style="background-image: url(img/interior-cargills/cargills-profile.jpg); background-size: cover; height: 250px; border-radius:7px; background-position: center center">
                                <p class="project-details text-center">Head office Interior for Cargills Ceylon PLC @ Premier Pacific Building</p>
                            </div>
                        </div>
                    </div>
                </div>

            <!--<div class="tab-pane fade" id="pills-office" role="tabpanel" aria-labelledby="pills-office-tab">
                <div class="row">
                    <div class="col-4">
                        <img src="images/projects-office.png" alt="" class="img-fluid rounded-3">
                        <span class="project-details text-center">
                            <p>OFFICE BUILDINGS WORLD</p>
                        </span>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-residence" role="tabpanel" aria-labelledby="pills-residence-tab">
                <div class="row">
                    <div class="col-4">
                        <img src="images/projects-residence.png" alt="" class="img-fluid rounded-3">
                        <span class="project-details text-center">
                            <p>PERSONAL RESIDENCE WORLD</p>
                        </span>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-industrial" role="tabpanel" aria-labelledby="pills-industrial-tab">
                <div class="row">
                    <div class="col-4">
                        <img src="images/projects-industrial.png" alt="" class="img-fluid rounded-3">
                        <span class="project-details text-center">
                            <p>INDUSTRIAL WORLD</p>
                        </span>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-civic" role="tabpanel" aria-labelledby="pills-civic-tab">
                <div class="row">
                    <div class="col-4">
                        <img src="images/projects-civic.png" alt="" class="img-fluid rounded-3">
                        <span class="project-details text-center">
                            <p>CIVIC WORLD</p>
                        </span>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-institutional" role="tabpanel" aria-labelledby="pills-institutional-tab">
                <div class="row">
                    <div class="col-4">
                        <img src="images/projects-institutional.png" alt="" class="img-fluid rounded-3">
                        <span class="project-details text-center">
                            <p>INSTITUIONAL WORLD</p>
                        </span>
                    </div>
                </div>
            </div> -->

            </div>

            <div class="text-center mt-5">
                <a href="" class="btn rounded-0 border border-dark px-5">LOAD MORE</a>
            </div>
        </div>
    </section>


@endsection