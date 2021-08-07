@extends('frontend.layouts.layout')

@section('content')


@if ( session()->has('message') )
   
    <body style="text-align:center; background-color: #C0C0C0">

        <!-- <div style="text-align:center; background-color: grey"> -->

        <h1 style="margin-top:150px;" class="display-3">Thank You!</h1><br>
        <p class="lead"><h3>We appreciate you contacting us. One of our member will get back in touch with you soon!<br><br> Have a great day!</h3></p>
        <hr><br>    
        <p class="lead">
            <a class="btn btn-success btn-md" href="{{url('contact-us')}}" role="button">Go Back to Contact Us Page</a>
        </p>
        <!-- </div> -->
        
    </body>

@else 


    <link rel="stylesheet" href="{{ asset('css/contact-us.css') }}">

    <!--banner section-->
    <section id="banner">
        <div class="container-fluid banner text-center">
            <div class="container">
                <h1 class="display-2 text-white" data-aos="fade-up" data-aos-duration="500">“Make it Simple, but Significant”</h1>
                <a href="" class="btn rounded-0 px-5 mt-3" type="button" style="border: 1px solid white; color: white;" data-aos="flip-up" data-aos-duration="500" data-aos-delay="500">CALL US NOW</a>
            </div>
        </div>
    </section>


    <!-- scroll indicator icon -->
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
    


    <!--path-->
    <section id="path">
        <div class="container mt-3 path">
            <p data-aos="fade-down" data-aos-duration="500"><a href="{{url('/')}}" style="text-decoration: none; color: #212529;">Home</a> &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp <a href="{{url('contact-us')}}" style="text-decoration: none; color: #212529;">Contact</a></p>
        </div>
    </section>


    <!--contact us & address-->
    <section id="contact">
        <div class="container contact" style="margin-top: 4rem; padding: 0 7rem;">

            <h6 data-aos="fade-up" data-aos-duration="500">CONTACT US</h6>
            <h2 data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">RDC Architects</h2>
            <div class="row justify-content-between mt-5">
                <div class="col-md-6">
                    <div class="row mb-2">
                        <div class="col-4" data-aos="fade-up" data-aos-duration="500">
                            <p style="font-size: 1.0rem; font-weight: 600;">Address</p>
                        </div>
                        <div class="col-7" data-aos="fade-up" data-aos-duration="500">
                            <p style="font-size: 0.9rem;">RDC Architects (Pvt) Ltd, <br>
                                No. 18/7, <br>
                                “Dandeniya Gardens”, <br>
                                Gangaboda Road, <br>
                                Piliyandala, <br>
                                Sri Lanka.</p>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                            <p style="font-size: 1.0rem; font-weight: 600;">Telephone</p>
                        </div>
                        <div class="col-8" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                            <div class="row align-items-center">
                                <div class="col-1">
                                    <p style="font-size: 0.9rem;"><i class="fas fa-phone-alt"></i></p>
                                </div>
                                <div class="col-10">
                                    <p style="font-size: 0.9rem;">+9411-2609977 &nbsp | &nbsp +9411-2617799</p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-1">
                                    <p style="font-size: 0.9rem;"><i class="fas fa-mobile-alt"></i></p>
                                </div>
                                <div class="col-10">
                                    <p style="font-size: 0.9rem;">+94773209977</p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-1">
                                    <p style="font-size: 0.9rem;"><i class="bi bi-printer-fill"></i></p>
                                </div>
                                <div class="col-10">
                                    <p style="font-size: 0.9rem;">+9411-2617070</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                            <p style="font-size: 1.0rem; font-weight: 600;">Email</p>
                        </div>
                        <div class="col-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                            <p style="font-size: 0.9rem;">rdcarchitects@hotmail.com</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                            <p style="font-size: 1.0rem; font-weight: 600;">Follow Us</p>
                        </div>
                        <div class="col-8" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                            <a href="https://www.facebook.com/russelldandeniyacharteredarchitects/" class="border border-dark border-1 me-2" style="padding: 0.3rem 0.7rem;"><i class="fab fa-facebook-f text-body"></i></a>
                            <a href="https://www.instagram.com/rdcarchitects/" class="border border-dark border-1 me-2" style="padding: 0.3rem 0.7rem;"><i class="fab fa-instagram text-body"></i></a>
                            <a href="https://www.linkedin.com/in/russell-dandeniya-518669131/" class="border border-dark border-1 me-2" style="padding: 0.3rem 0.7rem;"><i class="fab fa-linkedin-in text-body"></i></a>
                            <a href="#" class="border border-dark border-1 me-2" style="padding: 0.3rem 0.7rem;"><i class="fab fa-youtube text-body"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 form">
                    <form action="{{route('frontend.contact.store')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="mb-4">
                            <div class="row">
                                <div class="col" data-aos="fade-up" data-aos-duration="500">
                                    <input type="text" class="form-control" name="name" placeholder="Name" aria-describedby="name" required>
                                </div>
                                <div class="col" data-aos="fade-up" data-aos-duration="500">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone" aria-describedby="phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                            <input type="email" class="form-control" name="email" placeholder="Email" aria-describedby="email" required>
                        </div>
                        <div class="mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                          <textarea class="form-control" name="message" rows="3" placeholder="Message" required></textarea>
                        </div>
                        <input type="submit" value="SEND" class="btn rounded-0 fw-bold" style="border: 2px solid black; width:100%;" data-aos="flip-up" data-aos-duration="500" data-aos-delay="300">
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!--map & form-->
    <section id="map">
        <div class="container map" style="margin-top: 7rem; padding: 0 7rem;">
            <div class="row justify-content-between align-items-center">
                <div class="col-12">
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=No.%2018/7,%20%22Dandeniya%20Gardens%22,%20Gangaboda%20Road,%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net">google map for web site</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
                </div>
            </div>
        </div>
    </section>

       
@endif   

@endsection