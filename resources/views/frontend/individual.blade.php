@extends('frontend.layouts.layout')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/individual.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>


    <!--banner section-->
    <section id="banner">
        <div class="container-fluid p-0">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff;" class="swiper-container mySwiper2">
                <div class="swiper-wrapper">

                    @foreach($projimages as $key=> $projima)
                        <div class="swiper-slide">
                            <img src="{{url('files/projects/',$projima->image)}}" class="img-fluid w-100"/>
                        </div>
                    @endforeach                    

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div thumbsSlider="" class="swiper-container mySwiper">
                <div class="swiper-wrapper">

                @foreach($projimages as $key=> $projima)
                    <div class="swiper-slide">
                        <img src="{{url('files/projects/',$projima->image)}}" class="img-fluid w-100 small-img" style="height: 220px;"/>
                    </div>
                @endforeach                    

                </div>
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
            <p data-aos="fade-down" data-aos-duration="500"><a href="{{url('/')}}" style="text-decoration: none; color: #212529;">Home</a> &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp <a href="{{url('projects')}}" style="text-decoration: none; color: #212529;">Projects</a></p>
        </div>
    </section>


    <!--project details-->
    <section id="project-details">
        <div class="container project-details" style="margin-top: 4rem; padding: 0 7rem;">
            <h6 style="text-transform: uppercase">{{ $proj->category }} PROJECTS</h6>
            <h2>{{ $proj->title }}</h2>
            <p class="mt-4" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;">{{ $proj->description }}</p>
        </div>
    </section>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>

@endsection