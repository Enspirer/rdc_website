<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    @stack('before-styles')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    
    
    @stack('after-styles')


</head>


<body>

    <!--navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-0">
        <div class="container p-0">
          <a class="navbar-brand mt-3" href="{{url('/')}}" style="margin-left: 2.2rem;">
            <h3 class="text-white">RDC ARCHITECTS <br> <p style="font-size: 1rem; letter-spacing: 0.05rem;">BY RUSSELL DANDENIYA</p></h3>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav"> 
              <li class="nav-item p-2" style="margin-right: 0.7rem;" data-aos="fade-left" data-aos-duration="500">
                <a class="nav-link active text-white" aria-current="page" href="{{url('/')}}">HOME</a>
              </li>
              <li class="nav-item p-2 dropdown disabled" style="margin-right: 0.7rem;" data-aos="fade-left" data-aos-duration="500" data-aos-delay="200">
                <a class="nav-link dropdown-toggle text-white disabled" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  PRACTICE
                </a>
                <ul class="dropdown-menu practice-drop" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="{{url('overview')}}">OVERVIEW</a></li>
                  <!-- <li><a class="dropdown-item" href="{{url('organizational')}}">ORGANIZATIONAL STRUCTURE</a></li> -->
                  <li><a class="dropdown-item" href="{{url('about-us')}}">ABOUT US</a></li>
                  <li><a class="dropdown-item" href="{{url('awards')}}">AWARDS</a></li>
                </ul>
              </li>
              <li class="nav-item p-2 dropdown disabled" style="margin-right: 0.7rem;" data-aos="fade-left" data-aos-duration="500" data-aos-delay="200">
                <a class="nav-link dropdown-toggle text-white disabled" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  PEOPLE
                </a>
                <ul class="dropdown-menu people-drop" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="{{url('people')}}">PEOPLE</a></li>
                  <li><a class="dropdown-item" href="{{url('life')}}">LIFE AT RDCA</a></li>
                </ul>
              </li>
              <li class="nav-item p-2" style="margin-right: 0.7rem;" data-aos="fade-left" data-aos-duration="500" data-aos-delay="600">
                <a class="nav-link text-white" href="{{url('projects')}}">PROJECTS</a>
              </li>
              <li class="nav-item p-2" style="margin-right: 0.7rem;" data-aos="fade-left" data-aos-duration="500" data-aos-delay="600">
                <a class="nav-link text-white" href="{{url('press')}}">PRESS</a>
              </li>
              <li class="nav-item p-2" data-aos="fade-left" data-aos-duration="500" data-aos-delay="800">
                <a class="nav-link text-white" href="{{url('contact-us')}}">CONTACT US</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
  FB.init({
    xfbml            : true,
    version          : 'v11.0'
  });
};

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
  attribution="install_email"
  attribution_version="biz_inbox"
  page_id="112702636936289">
</div>


    @yield('content')


    <!--footer section-->
    <div class="footer" style="margin-top: 7rem;">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-2 logo" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{asset('/img/logo.png')}}" class="img-fluid footer-logo">
                    </div>
                    <div class="col-md-4 col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                        <br><br>
                        <p class="px-5 text mb-2" data-aos="fade-up" data-aos-duration="1000" style="font-size: 1.1rem">
                        Architecture is an expression of values a reality of ambitious sketches on papers...</p>
                        <p class="px-5 text" data-aos="fade-up" data-aos-duration="1000" style="font-size: 0.9rem">Archt. Russell Dandeniya</p>
                    </div>
                    <div class="col-md-4 col-lg-4 text-end contact" data-aos="fade-up" data-aos-duration="1000">
                        <h4 class="text-white mb-4 get-in">To Make it Simple But Significant</h4>
                        <p class="mb-1">0112609977, 2617799<br>
                        0773209977 <br>
                            rdcarchitects@hotmail.com</p>
                            <p>No. 18/7, Dandeniya Gardens, Gangaboda Road, Piliyandala, Sri Lanka.</p>
                    </div>

                    <div class="row justify-content-end p-0">
                        <div class="col-md-6 social text-end p-0">
                          <a class="fab fa-facebook-square icon text-decoration-none text-light" href="https://www.facebook.com/russelldandeniyacharteredarchitects"></a>
                          <a class="fab fa-twitter-square icon text-decoration-none text-light" href="https://twitter.com/RussellDandeni2"></a>
                          <a class="fab fa-linkedin icon text-decoration-none text-light" href="https://www.linkedin.com/in/russell-dandeniya-518669131/"></a>
                          <a class="fab fa-instagram-square icon text-decoration-none text-light" href="https://www.instagram.com/rdcarchitects/"></a>
                          <a class="fab fa-youtube-square icon text-decoration-none text-light"></a>
                        </div>
                    </div>
                </div>
                <hr class="footer-line">
                <div class="row pt-4 pb-4">
                    <div class="col-md-6 power">
                        <small>© All Rights Reserved | RDC Architects 2021</small>
                    </div>
                    <div class="col-md-6 text-end social">
                        <small>Powered by <a href="https://www.enspirer.com/" class="text-success">Enspirer</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- <script src="main.js"></script> -->
    @stack('before-scripts')

    <script src="{{asset('/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>

    @stack('after-scripts')
      
</body>
</html>