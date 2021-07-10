@extends('frontend.layouts.layout')

@section('content')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <!--slider section-->
    <div class="slider-section">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('img/banner-1.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/banner-2.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/banner-3.jpg') }}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="container justify-content-center ayubowan-card" data-aos="zoom-in" data-aos-duration="900">
            <div class="card shadow">
                <div class="card-body text-center aubowan-card-body">
                    <img src="{{ asset('img/ayubowan.svg') }}" alt="" height="60px" class="ayubowan-image">
                    <h3 class="card-title m-3 text-center">Welcome to RDC Architects</h3>
                    <div class="row text-center justify-content-center">
                        <div class="col-7">
                            <p class="card-text">
                                <i class="fas fa-quote-left float-left"></i>
                                You will face many defeats in life, but never let yourself be defeated.
                                You will face many defeats in life, but never let yourself be defeated.
                                <i class="fas fa-quote-right float-right"></i>
                            </p>
                        </div>
                    </div>
                    
                    <br>
                    <p class="classic float-right">Russell Dandeniya</p>
                </div>
            </div>
        </div>
    </div>

    <!--project section-->
    <div class="container mb-5 project-section" style="margin-top: 7rem;">
        <div class="container px-0">
            <div>
                <h1>Our Projects</h1>
            </div>
        </div>
        <div class="row mt-5 px-3">
            <div id="carousel-product" class="carousel slide p-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-product" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-product" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row align-items-center bg-light">
                            <div class="col-sm-4 p-2 item1 item">
                                <img src="{{ asset('img/index-project-image-1.jpg') }}" alt="..." class="img-fluid">
                                <div class="carousel-caption">
                                    <h5 style="color: #B49977;">GARDEN HOUSE</h5>
                                    <p style="font-size: 20px;">HABARADUWA</p>
                                    <div class="line"></div>
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-4 p-2 item2">
                                <img src="{{ asset('img/index-project-image-2.jpg') }}" alt="..." class="img-fluid">
                                <div class="carousel-caption">
                                    <h5 style="color: #B49977;">JIFFY OFFICE</h5>
                                    <p style="font-size: 20px;">MIRIGAMA</p>
                                    <div class="line"></div>
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-4 p-2 item3">
                                <img src="{{ asset('img/index-project-image-3.jpg') }}" alt="..." class="img-fluid">
                                <div class="carousel-caption">
                                    <h5 style="color: #B49977;">JUNGLE BEACH HOTEL</h5>
                                    <p style="font-size: 20px;">YALA</p>
                                    <div class="line"></div>
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center bg-light">
                            <div class="col-sm-4 p-2 item4">
                                <img src="{{ asset('img/index-project-image-4.jpg') }}" alt="..." class="img-fluid">
                                <div class="carousel-caption">
                                    <h5 style="color: #B49977;">NWSDB TRAINING CENTER</h5>
                                    <p style="font-size: 20px;">RATMALANA</p>
                                    <div class="line"></div>
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-4 p-2 item5">
                                <img src="{{ asset('img/index-project-image-5.jpg') }}" alt="..." class="img-fluid">
                                <div class="carousel-caption">
                                    <h5 style="color: #B49977;">PANAROMIC SEA BREEZE HOTEL</h5>
                                    <p style="font-size: 20px;">BROWNS HILL</p>
                                    <div class="line"></div>
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-4 p-2 item6">
                                <img src="{{ asset('img/index-project-image-6.jpg') }}" alt="..." class="img-fluid">
                                <div class="carousel-caption">
                                    <h5 style="color: #B49977;">THE FAB</h5>
                                    <p style="font-size: 20px;">RATMALANA</p>
                                    <div class="line"></div>
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--about section-->
    <div class="container about-section mb-5" style="margin-top: 8rem;">
        <div class="row">
            <div class="col-md-6">
                <h1 data-aos="fade-up" data-aos-duration="500">Who we are</h1>
                <div class="content" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                    <p>
                        <b>RDC Architects (Pvt) Ltd  </b>
                        is an intentionally small studio type well established practice providing designs for diversified
                        many categories of Buildings. Energetic approach in handling of any scale projects and proven
                        sensible capabilities to render total Architectural solutions while maintaining close Client
                        Consultant relationship has been the success story of this active team lead by award winning
                        Architect. Russell Dandeniya for their steadily growing immaculate project portfolio over the
                        recent years.
                    </p>
                </div>
                <button class="btn default mb-3 mb-md-0" data-aos="flip-up" data-aos-duration="500" data-aos-delay="400">READ MORE <i class="fas fa-angle-double-right"></i></button>
            </div>
            <div class="col-md-6 about-image" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                <img src="{{ asset('img/abouts.png') }}" class="img-fluid shadow">
            </div>
        </div>
    </div>

    <!--services section-->
    <div class="service-container text-left position-relative" style="margin-top: 7rem;">
        <img src="{{ asset('img/services-banner.jpg') }}" class="img-fluid">
        <div class="top-left text-white">
            <div class="container">
                <h5>SERVICES</h5>
                <h2>This is what we do.</h2>
            </div>
        </div>

        <div class="container mb-5 service-card">
            <img src="{{ asset('img/services-banner.jpg') }}" class="img-fluid bg-img-services">
            <div class="container service-card-body mb-5">
                <div class="row">
                <div class="col-md-4">
                    <div class="card shadow mt-3 mb-3 p-2 p-lg-3" data-aos="zoom-in" data-aos-duration="600">
                        <div class="container p-3 text-center">
                            <i class="fas fa-home fa-2x"></i> <br><br>
                            <h5><b>Planing</b></h5> <br>
                            <p class="pt-2 pb-2">Lorem Ipsum is simply dummy text of the printing and typesetting</p> <br>
                            <button class="btn default">READ <i class="fas fa-angle-double-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow mt-3 mb-3 p-2 p-lg-3" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
                        <div class="container p-3 text-center">
                            <i class="fas fa-hotel fa-2x"></i><br><br>
                            <h5><b>Interior</b></h5><br>
                            <p class="pt-2 pb-2">Lorem Ipsum is simply dummy text of the printing and typesetting</p><br>
                            <button class="btn default">READ <i class="fas fa-angle-double-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow mt-3 mb-3 p-2 p-lg-3" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="600">
                        <div class="container p-3 text-center">
                            <i class="fas fa-edit fa-2x"></i><br><br>
                            <h5><b>Exterior</b></h5><br>
                            <p class="pt-2 pb-2">Lorem Ipsum is simply dummy text of the printing and typesetting</p><br>
                            <button class="btn default">READ <i class="fas fa-angle-double-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!--download section-->
    <div class="container mb-5 download-section" style="margin-top: 8rem;">
        <div class="row">
            <div class="col-12">
                <h4 data-aos="fade-up" data-aos-duration="500">DOWNLOAD</h4>
                <h1 data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">Together to build our future</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <h4 data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">Download our 'How to built it better catalogue'</h4>
                    <p class="mt-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600">
                        Simpler guide book shared the wisdom gained over 15 years as active practicing Architect in the field of Architecture to explain how to overcome basic issues from selection of the site, appoint of the design team, plan approvals, project financing, construction, materiality, value engineering, completion, maintenance, up to how simply calculate pay back periods and maintenance replacement costs to enhance public knowledge on Design & Constructions.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 col-12">
                <div class="card border-card mb-3 mb-md-0" data-aos="flip-up" data-aos-duration="600">
                    <div class="container p-3 text-center">
                        <img src="{{ asset('img/pdf1.png') }}" class="img-fluid">
                        <button class="btn default mt-3">DOWNLOAD PDF <i class="fas fa-download"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card border-card mb-3 mb-md-0" data-aos="flip-up" data-aos-duration="600" data-aos-delay="300">
                    <div class="container p-3 text-center">
                        <img src="{{ asset('img/pdf2.png') }}" class="img-fluid">
                        <button class="btn default mt-3">DOWNLOAD PDF <i class="fas fa-download"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card border-card mb-3 mb-md-0" data-aos="flip-up" data-aos-duration="600" data-aos-delay="600">
                    <div class="container p-3 text-center">
                        <img src="{{ asset('img/pdf3.png') }}" class="img-fluid">
                        <button class="btn default mt-3">DOWNLOAD PDF <i class="fas fa-download"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--testimentional section-->
    <section id="testimonial">
        <div class="container-fluid testimonial-section p-0" style="margin-top: 7rem;">
            <div id="carousel-testimonial" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-testimonial" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-testimonial" data-slide-to="1"></li>
                    <li data-target="#carousel-testimonial" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 testi-image" src="{{ asset('img/testimentionals-1.jpg') }}" alt="First slide">
                        <div class="carousel-caption">
                            <h5 class="text-white testimonial-text">I’ve said Goodbye to the <span class="h3">“over Worked notion”</span> that <br> Architecture has to save the world.</h5>
                            <p class="lead text">- Peter Zumthor -</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 testi-image" src="{{ asset('img/testimentionals-2.jpg') }}" alt="Second slide">
                        <div class="carousel-caption">
                            <h5 class="text-white testimonial-text">I’ve said Goodbye to the <span class="h3">“over Worked notion”</span> that <br> Architecture has to save the world.</h5>
                            <p class="lead text">- Peter Zumthor -</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 testi-image" src="{{ asset('img/testimentionals-3.jpg') }}" alt="Third slide">
                        <div class="carousel-caption">
                            <h5 class="text-white testimonial-text">I’ve said Goodbye to the <span class="h3">“over Worked notion”</span> that <br> Architecture has to save the world.</h5>
                            <p class="lead text">- Peter Zumthor -</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-testimonial" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-testimonial" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <!--contact section-->
    <div class="container contact-section mb-5" style="margin-top: 6rem;">
        <div class="row">
            <div class="col-md-6">
                <h4 data-aos="fade-up" data-aos-duration="500">CONTACT US</h4>
                <h1 data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">Let's start new project.</h1>

                <div class="content" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and s crambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with t he release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publi shing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6" data-aos="fade-up" data-aos-duration="500">
                            <input type="text" class="form-control" id="fname" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                            <input type="tel" class="form-control" id="number" placeholder="Phone">
                        </div>
                    </div>

                    <div class="form-group" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                        <input type="email" class="form-control" id="mail" placeholder="Email">
                    </div>

                    <div class="form-group" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600">
                        <textarea class="form-control" id="message" placeholder="Message" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn default w-100" data-aos="flip-up" data-aos-duration="500" data-aos-delay="800">SEND</button>
                </form>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection


