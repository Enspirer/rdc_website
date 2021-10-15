@extends('frontend.layouts.layout')

@section('title','Architects in Sri Lanka | Russell Dandeniya Chartered Architects | RDC Architects')
@section('meta_description','RDC Architects is an Award winning Chartered Architect in Sri Lanka founded by the principal
Architect Russell Dandeniya, with decades of experience in commercial and residential projects.
Quantity surveyors, Structural engineers.')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/life.css') }}">


    <!--banner section-->
    <section id="banner">
        <div class="container-fluid text-center p-0">
            <img src="{{ asset('/img/life-banner.jpg') }}" alt="" class="img-fluid w-100">
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
        <p data-aos="fade-down" data-aos-duration="500"><a href="{{url('/')}}" style="text-decoration: none; color: #212529;">Home</a> &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp <a href="{{url('life')}}" style="text-decoration: none; color: #212529;">People</a> &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp <a href="{{url('life')}}" style="text-decoration: none; color: #212529;">Life at RDCA</a></p>
      </div>
    </section>


    <!--about-us-->
    <section id="life">
        <div class="container life" style="margin-top: 5rem; padding: 0 7rem;">
            <h2 data-aos="fade-right" data-aos-duration="500">Life at RDCA</h2>

            <p class="mt-4" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">We are, super energetic dynamic fun team who belives …. lore, ipsum consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>


            @foreach($lifeat as $key => $life)

            @if($life->order % 2 == 1)
            
            <div class="row align-items-center justify-content-between" style="margin-top:3rem">
                <div class="col-md-5">
                    <h4 class="fw-bold" data-aos="fade-right" data-aos-duration="500">{{ $life->title }}</h4>

                    <p class="mt-4" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;" data-aos="fade-right" data-aos-duration="500" data-aos-delay="200">{{ $life->description }}</p>

                    <a href="{{ url('trip-individual',$life->id) }}" class="btn rounded-0 mt-3 px-4" style="border: 1px solid #1F1504; color: #1F1504;" data-aos="flip-up" data-aos-duration="500" data-aos-delay="100">SHOW MORE<i class="bi bi-chevron-double-right ms-2"></i></a>

                </div>

                <div class="col-md-6">
                    <img src="{{url('files/life_at',$life->feature_image)}}" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="100" alt="" class="img-fluid">
                </div>
            </div>


            @else

            <div class="row align-items-center justify-content-between" style="margin-top:5rem">
                <div class="col-md-6 justify-content-end">
                    <img src="{{url('files/life_at',$life->feature_image)}}" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="100" alt="" class="img-fluid center-image">
                </div>

                <div class="col-md-5">
                    <div class="clearfix">
                        <h4 class="fw-bold float-end center-image-title" data-aos="fade-right" data-aos-duration="500">{{ $life->title }}</h4>
                    </div>

                    <p class="mt-4 center-image-text" style="font-size: 0.9rem; line-height: 1.7rem; text-align: right;" data-aos="fade-right" data-aos-duration="500" data-aos-delay="200">{{ $life->description }}</p>

                    <!-- <div class="clearfix">
                        <button class="btn rounded-0 mt-3 px-4 float-end" style="border: 1px solid #1F1504; color: #1F1504;" data-aos="flip-up" data-aos-duration="500" data-aos-delay="100"><i class="bi bi-chevron-double-left me-2"></i>SHOW LESS</button>
                    </div> -->

                    <a href="{{ url('trip-individual',$life->id) }}" class="btn rounded-0 mt-3 px-4 float-end" style="border: 1px solid #1F1504; color: #1F1504;" data-aos="flip-up" data-aos-duration="500" data-aos-delay="100">SHOW MORE<i class="bi bi-chevron-double-right ms-2"></i></a>
                </div>
            </div>

            @endif

            @endforeach

        </div>
    </section>


@endsection