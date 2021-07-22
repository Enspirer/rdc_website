@extends('frontend.layouts.layout')

@section('content')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <!--slider section-->
    <div class="slider-section">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/banner-4.jpg') }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/banner-5.jpg') }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/banner-6.jpg') }}" alt="Third slide">
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
        <div class="mouse_scroll">

            <div class="mouse">
                <div class="wheel"></div>
            </div>
            <div>
                <span class="m_scroll_arrows unu"></span>
                <span class="m_scroll_arrows doi"></span>
                <span class="m_scroll_arrows trei"></span>
            </div>
        </div>

        <div class="container justify-content-center ayubowan-card" data-aos="zoom-in" data-aos-duration="900">
            <div class="card shadow">
                <div class="card-body text-center aubowan-card-body">
                    <img src="{{ asset('img/ayubowan.svg') }}" alt="" height="60px" class="ayubowan-image">
                    <h3 class="card-title m-3 text-center">Welcome to RDC Architects</h3>
                    <div class="row text-center justify-content-center">
                        <div class="col-7 p-0">
                            <!-- <p class="card-text">
                                <i class="fas fa-quote-left float-left pb-1"></i>
                                 Inventive & Unique Architecture is perceiving effortlessly - it's so simple and quicker<i class="fas fa-quote-right float-right"></i>
                            </p> -->

                            <p class="card-text">
                                <i class="fas fa-quote-left position-relative" style="top:-0.5rem"></i> &nbsp;Inventive & Unique Architecture is perceiving effortlessly - it's so simple and quicker &nbsp;<i class="fas fa-quote-right position-relative" style="top:-0.5rem"></i>
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
                                    <a href="{{ url('individual') }}"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-4 p-2 item2">
                                <img src="{{ asset('img/index-project-image-2.jpg') }}" alt="..." class="img-fluid">
                                <div class="carousel-caption">
                                    <h5 style="color: #B49977;">JIFFY OFFICE</h5>
                                    <p style="font-size: 20px;">MIRIGAMA</p>
                                    <div class="line"></div>
                                    <a href="{{ url('individual') }}"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-4 p-2 item3">
                                <img src="{{ asset('img/index-project-image-3.jpg') }}" alt="..." class="img-fluid">
                                <div class="carousel-caption">
                                    <h5 style="color: #B49977;">JUNGLE BEACH HOTEL</h5>
                                    <p style="font-size: 20px;">YALA</p>
                                    <div class="line"></div>
                                    <a href="{{ url('individual') }}"><i class="fas fa-arrow-right"></i></a>
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
                                    <a href="{{ url('individual') }}"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-4 p-2 item5">
                                <img src="{{ asset('img/index-project-image-5.jpg') }}" alt="..." class="img-fluid">
                                <div class="carousel-caption">
                                    <h5 style="color: #B49977;">PANAROMIC SEA BREEZE HOTEL</h5>
                                    <p style="font-size: 20px;">BROWNS HILL</p>
                                    <div class="line"></div>
                                    <a href="{{ url('individual') }}"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-4 p-2 item6">
                                <img src="{{ asset('img/index-project-image-6.jpg') }}" alt="..." class="img-fluid">
                                <div class="carousel-caption">
                                    <h5 style="color: #B49977;">THE FAB</h5>
                                    <p style="font-size: 20px;">RATMALANA</p>
                                    <div class="line"></div>
                                    <a href="{{ url('individual') }}"><i class="fas fa-arrow-right"></i></a>
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
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 data-aos="fade-up" data-aos-duration="500">Who we are</h1>
                <div class="content" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                    <p>
                        <b class="fw-bolder">RDC Architects (Pvt) Ltd  </b>
                        is an intentionally small studio type well established practice providing designs for diversified many categories of Buildings. Energetic approach in handling of any scale projects and proven sensible capabilities to render total Architectural solutions while maintaining close Client Consultant relationship has been the success story of this <span class="fw-bold">active team</span> lead by award winning Architect. Russell Dandeniya for their steadily growing immaculate project portfolio over the recent years.
                    </p>
                </div>
                <a href="{{ url('about-us') }}" class="btn default mb-3 mb-md-0" data-aos="flip-up" data-aos-duration="500" data-aos-delay="400">READ MORE <i class="fas fa-angle-double-right"></i></a>
            </div>
            <div class="col-md-6 about-image" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                <img src="{{ asset('img/abouts.png') }}" class="img-fluid shadow">
            </div>
        </div>
    </div>

    <!--services section-->
    <div class="service-container container-fluid p-0 text-left position-relative" style="margin-top: 7rem;">
        <!-- <img src="{{ asset('img/services-banner.jpg') }}" class="img-fluid w-100" style="height: 850px!important"> -->
        <div class="text-white service-banner">
            <div class="container service-text" style="padding-top: 15rem;">
                <h4>SERVICES</h4>
                <div class="row">
                    <div class="col-12 mt-3">
                        <h2 style="font-size: 35px"><i class="fas fa-quote-left position-relative" style="top:-0.5rem"></i> &nbsp;Architecture <span style='font-size: 20px'>is about making the world a little more like our</span> Dreams&nbsp; <i class="fas fa-quote-right position-relative" style="top:-0.5rem"></i></h2>
                        <h5 class="text-center">- Bjarke Ingels -</h5>
                    </div>
                </div>
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
                            <h5><b>Architecture</b></h5> <br>
                            <div class="collapse" id="collapseExample1" aria-expanded="false">
                                <p class="pt-2 pb-2 mb-0 text-left">We are team of Chartered Architects, with great in house supporting staff to undertake design assignments/ projects from tiny bedspace up to resort hotel. Preparation of brief predesign, feasibility study or need analysis will be the start.<br> <br>
                                We will cover Schematic Design, Conceptual Design, Design Development, Contract Documentation, Bidding & negotiations, Contract Administration under Basic Services.</p> <br>
                            </div>
                            <a class="btn default collapsed collapse-button" data-bs-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow mt-3 mb-3 p-2 p-lg-3" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
                        <div class="container p-3 text-center">
                            <i class="fas fa-hotel fa-2x"></i><br><br>
                            <h5><b>Engineering Services</b></h5><br>
                            <div class="collapse" id="collapseExample2" aria-expanded="false">
                                <p class="pt-2 pb-2 mb-0 text-left">We are synergystic allied team of expert professionals in Structural Engineering Mechanical Engineering, Electrical Engineering, Plumbing Engineering, Cost Consultation & Quantity Surveying proven 15 long years of collaborative practice.</p><br>
                            </div>
                            <a class="btn default collapsed collapse-button" data-bs-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"></a> 
                            <!-- <i class="fas fa-angle-double-right"></i> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow mt-3 mb-3 p-2 p-lg-3" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="600">
                        <div class="container p-3 text-center">
                            <i class="fas fa-edit fa-2x"></i><br><br>
                            <h5><b>Landscape</b></h5><br>
                            <div class="collapse" id="collapseExample3" aria-expanded="false">
                                <p class="pt-2 pb-2 mb-0 text-left">We do undertake Interior + Landscape Designs. Our Architectural concepts are obviously developing with landscape and Interior Design with Inhouse professionals.</p><br>
                            </div>
                            <a class="btn default collapsed collapse-button" data-bs-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3"></a> 
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
                <h1 data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">Together to build our future..!</h1>
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
                    <img class="d-block w-100 testi-image img-fluid" src="{{ asset('img/testimentional.jpg') }}" alt="First slide">

                    <div class="carousel-item active">
                        <div class="carousel-caption">
                            <h5 class="text-white testimonial-text">I’ve said Goodbye to the <span class="h3">“over Worked notion”</span> that <br> Architecture has to save the world.</h5>
                            <p class="lead text">- Peter Zumthor -</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <h5 class="text-white testimonial-text">I’ve said Goodbye to the <span class="h3">“over Worked notion”</span> that <br> Architecture has to save the world.</h5>
                            <p class="lead text">- Peter Zumthor -</p>
                        </div>
                    </div>
                    <div class="carousel-item">
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
                <h1 data-aos="fade-up" data-aos-duration="500">Meeting for your dreams</h1>

                <div class="content" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                    <p>
                    Before basic Architectural services begin we should formulate a clear brief. This phase called as “pre-design”, feasibility study or meeting our minds 😊. This is first & most important step before you start your design. Only Chartered Architects will competent to guide you through brief analysis to determine your goals, requirements, the constraints n opportunities of your site, according to the cost or budget available, time taken for realizing your dream. 
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


