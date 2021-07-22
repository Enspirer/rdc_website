@extends('frontend.layouts.layout')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/press.css') }}">


    <!--banner section-->
    <section id="banner">
        <div class="container-fluid text-center p-0">
          <img src="{{ asset('img/press-banner.jpg') }}" alt="" class="img-fluid w-100">
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
          <p data-aos="fade-down" data-aos-duration="500"><a href="{{url('/')}}" style="text-decoration: none; color: #212529;">Home</a> &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp <a href="{{url('press')}}" style="text-decoration: none; color: #212529;">Press</a></p>
      </div>
    </section>


    <!--overview-->
    <section id="overview">
        <div class="container overview" style="margin-top: 5rem; padding: 0 7rem;">
            <h6 data-aos="fade-right" data-aos-duration="500">OUR BOOK</h6>
            <h2 data-aos="fade-right" data-aos-duration="500" data-aos-delay="100">Press Release</h2>

            <div class="row justify-content-between details" style="margin-top:6rem">
                <div class="col-lg-6">
                    <h2 class="fw-bold" data-aos="fade-right" data-aos-duration="500" data-aos-delay="200">How to Build it Better</h2>

                    <p class="mt-4" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">“Basics as more important similar foundations in constructions”, “Life is too short-explore, learn, practice and teach to the next generation Award winning Architect.Russell Dandeniya’s motto in his passionate life as similar quotations can be found in several places in this book. “Making today so proud with your Architectural product as a model- others to follow do best satisfied work NOW…and see better tomorrow and understand the challenges facing today as accepted but surely not as granted”. “Basics you learn gives you more comprehensiveness to understand the complexity of a building as a collection of fundamentals and basics. It’s so easy, as far as you are following the right sequence of selection Foundation, Walls, and Roofs -your best Architect friend, Banker and Lawyer. The Architects will always bring you joy, perhaps forever. But if you want him to become BEST friend you have to do your second project with him….some of philosophical quotations that contain in this publication.</p>

                    <button class="btn rounded-0 mt-3" style="border: 1px solid #1F1504; color: #1F1504;" data-aos="flip-up" data-aos-duration="500" data-aos-delay="100">DOWNLOAD PDF <i class="bi bi-download ms-2"></i></button>

                </div>

                <div class="col-lg-5">
                    <div id="press-carousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{ asset('img/press-carousel-1.svg') }}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('img/press-carousel-1.svg') }}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('img/press-carousel-1.svg') }}" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#press-carousel" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#press-carousel" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>

            
        </div>
    </section>


    <!--articles-->
    <section id="articles">
        <div class="container articles" style="margin-top: 7rem; padding: 0 7rem;">
            <h2 data-aos="fade-right" data-aos-duration="500">Articles</h2>

            <div class="row mt-5">

              @foreach($pressrelease as $key => $press)

                <div class="col-sm-6 col-lg-3 p-2">
                    <div class="card" data-aos="zoom-in" data-aos-duration="600">
                        <img src="{{url('files/press',$press->image)}}" class="card-img-top" style="height: 314px; object-fit: cover;" alt="...">
                        <!-- style="width: 262px;"  -->
                        <div class="card-body mt-4">
                          <h3 class="card-title">{{ $press->title }}</h3>
                          <p class="card-text" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">{{ $press->description }}</p>
                          <a href="{{url('files/pdf',$press->pdf_upload)}}" class="btn rounded-0 btn-outline-dark col-12" style="border: 1px solid #1F1504;" target="_blank">READ MORE</a>
                        </div>
                      </div>
                </div>

                <!-- <div class="col-sm-6 col-lg-3 p-2">
                    <div class="card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100">
                        <img src="{{ asset('img/articles-1.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body mt-4">
                          <h3 class="card-title">Eco House</h3>
                          <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, est.</p>
                          <a href="#" class="btn rounded-0 btn-outline-dark col-12" style="border: 1px solid #1F1504;">READ MORE</a>
                        </div>
                      </div>
                </div>

                <div class="col-sm-6 col-lg-3 p-2">
                    <div class="card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200">
                        <img src="{{ asset('img/articles-1.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body mt-4">
                          <h3 class="card-title">Lorem Ipsum</h3>
                          <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, est.</p>
                          <a href="#" class="btn rounded-0 btn-outline-dark col-12" style="border: 1px solid #1F1504;">READ MORE</a>
                        </div>
                      </div>
                </div>

                <div class="col-sm-6 col-lg-3 p-2">
                    <div class="card" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
                        <img src="{{ asset('img/articles-1.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body mt-4">
                          <h3 class="card-title">Eco House</h3>
                          <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, est.</p>
                          <a href="#" class="btn rounded-0 btn-outline-dark col-12" style="border: 1px solid #1F1504;">READ MORE</a>
                        </div>
                      </div>
                </div> -->

            @endforeach
                
            </div>
        </div>
    </section>

@endsection