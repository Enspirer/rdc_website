@extends('frontend.layouts.layout')

@section('content')    


@if ( session()->has('message') )
   
   <body style="text-align:center; background-color: #C0C0C0">

       <!-- <div style="text-align:center; background-color: grey"> -->

       <h1 style="margin-top:150px;" class="display-3">Thank You!</h1><br>
       <p class="lead"><h3>We appreciate you contacting us. One of our member will get back in touch with you soon!<br><br> Have a great day!</h3></p>
       <hr><br>    
       <p class="lead">
           <a class="btn btn-success btn-md" href="{{url('/')}}" role="button">Go Back</a>
       </p>
       <!-- </div> -->
       
   </body>

@else 

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <!--slider section-->
    <div class="slider-section">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

            @foreach($home_image as $key => $ima)

                @if($key == 0)
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{url('files/home/',$ima->image)}}" alt="First slide">
                    </div>
                @else
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{url('files/home/',$ima->image)}}" alt="Second slide">
                </div>
                @endif          
                  
          @endforeach
                
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
                                <i class="fas fa-quote-left position-relative" style="top:-0.5rem"></i> &nbsp;The elegance of creative architecture is always simple and cost effective. &nbsp;<i class="fas fa-quote-right position-relative" style="top:-0.5rem"></i>
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

@if(count($home_publish) == 0)

@else

    <div class="container mb-5 project-section" style="margin-top: 7rem;">
        <div class="container px-0">
            <div>
                <h1>Our Projects</h1>
            </div>
        </div>
        <div class="row mt-5 px-3">
            <div id="carousel-product" class="carousel slide p-0" data-ride="carousel">
                <ol class="carousel-indicators">
                @foreach($self as $key => $sel)
                
                    @if($key == 1)
                    
                        <li data-target="#carousel-product" data-slide-to="{{ $key }}" class="active"></li>
                    @else
                        <li data-target="#carousel-product" data-slide-to="{{ $key }}"></li>
                    @endif
                    
                @endforeach  
                    <!-- <li data-target="#carousel-product" data-slide-to="1"></li> -->
                </ol>
                <div class="carousel-inner">
                    @foreach($self as $key => $sel) 
                    
                    @if($key == 1)
                        <div class="carousel-item active">
                    @else 
                        <div class="carousel-item">
                    @endif

                        <div class="row align-items-center bg-light">

                        @foreach($sel as $key => $item)
                        
                            <div class="col-sm-4 p-2 item1 item">
                                <div style="width: 363px; height:244px">
                                    <img style="object-fit: cover;width: 363px; height:244px" src="{{url('files/projects',$item['feature_image'])}}" alt="..." class="img-fluid" >
                                    <div class="carousel-caption">
                                        <h5>{{ $item['title'] }}</h5>
                                        <p style="font-size: 15px;">{{ $item['location'] }}</p>
                                        <div class="line"></div>
                                        <a href="{{ url('individual',$item['id']) }}"><i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>

                            </div>
                        @endforeach   
                        </div>
                    </div>
                    @endforeach
                    

                </div>
            </div>
        </div>
    </div>


@endif    

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
                <a href="{{ url('about-us') }}" class="btn default mb-3 mb-md-0 about-button" data-aos="flip-up" data-aos-duration="500" data-aos-delay="400">READ MORE <i class="fas fa-angle-double-right"></i></a>
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
                <div class="row">
                    <div class="col-12 mt-3">

                        <h2 class="service-text-content" style="font-size: 40px; text-shadow: 2px 2px 3px black;"><i class="fas fa-quote-left position-relative" style="top:-0.5rem"></i> &nbsp;Architecture <span class="service-text-content-center" style='font-size: 28px;'>is about making the world a little more like our</span> Dreams&nbsp; <i class="fas fa-quote-right position-relative" style="top:-0.5rem"></i></h2>

                        <h5 class="text-center" style="text-shadow: 2px 2px 3px black;">- Bjarke Ingels -</h5>
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
                        <div class="container service-div p-3 text-center">
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
                        <div class="container service-div p-3 text-center">
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
                        <div class="container service-div p-3 text-center">
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
                        <img src="{{ asset('img/pdf2.jpg') }}" class="img-fluid">
                        <a href="{{ url('pdf/Tn2.pdf') }}" download><button class="btn default mt-3">DOWNLOAD PDF <i class="fas fa-download"></i></button></a>
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
                    <li data-target="#carousel-testimonial" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" data-interval="4000">
                    <img class="d-block testi-image img-fluid" src="{{ asset('img/testimentional1.jpg') }}" alt="First slide">

                    <div class="carousel-item active">
                        <div class="carousel-caption">
                            <h5 class="text-white testimonial-text">Modern Architecture is not a style it’s an attitude</h5>
                            <p class="lead text">- Marcel Breur -</p>
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
                            <h5 class="text-white testimonial-text">Each new situation requires a new Architecture</h5>
                            <p class="lead text">- Jean Neuvel -</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <h5 class="text-white testimonial-text">I try to give people a different way of looking at their surroundings. That’s art to me.</h5>
                            <p class="lead text">- Maya Lin -</p>
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
                    Before basic Architectural services begin we should formulate a clear brief. This phase called as “pre-design”, feasibility study or meeting our minds. This is first & most important step before you start your design. Only Chartered Architects will competent to guide you through brief analysis to determine your goals, requirements, the constraints n opportunities of your site, according to the cost or budget available, time taken for realizing your dream. 
                    </p>
                </div>
            </div>
            <div class="col-md-6">

                <form action="{{route('frontend.contact.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="form-group col-md-6" data-aos="fade-up" data-aos-duration="500">
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                            <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                        </div>
                    </div>

                    <div class="form-group" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-group" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600">
                        <textarea class="form-control" name="message" rows="3" placeholder="Message" required></textarea>
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

@push('after-scripts')

<script>

$(window).scroll(function() {
        var scroll = $(window).scrollTop();
        var hieghtThreshold = $(".service-card-body").offset().top;

        console.log('scroll : ' + scroll)
        console.log('service : ' + hieghtThreshold);

        if (scroll >= hieghtThreshold) {
            $('.service-div').children('div').removeClass('show');
            $('.service-div').children('a').addClass('collapsed');
        }
    });
</script>

@endpush

@endif 
