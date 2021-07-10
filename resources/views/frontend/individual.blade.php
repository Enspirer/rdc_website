@extends('frontend.layouts.layout')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/individual.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>


    <!--banner section-->
    <section id="banner">
        <div class="container-fluid p-0">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff;" class="swiper-container mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/leisure-wilder/1.jpg') }}" class="img-fluid w-100"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/leisure-wilder/2.jpg') }}" class="img-fluid w-100"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/leisure-wilder/3.jpg') }}" class="img-fluid w-100"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/leisure-wilder/4.jpg') }}" class="img-fluid w-100"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/leisure-wilder/5.jpg') }}" class="img-fluid w-100"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/leisure-wilder/6.jpg') }}" class="img-fluid w-100"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/leisure-wilder/7.jpg') }}" class="img-fluid w-100"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/leisure-wilder/8.jpg') }}" class="img-fluid w-100"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/leisure-wilder/9.jpg') }}" class="img-fluid w-100"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/leisure-wilder/10.jpg') }}" class="img-fluid w-100"/>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div thumbsSlider="" class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/leisure-wilder/1.jpg') }}" class="img-fluid w-100"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/leisure-wilder/2.jpg') }}" class="img-fluid w-100"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/leisure-wilder/3.jpg') }}"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/leisure-wilder/4.jpg') }}"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/leisure-wilder/5.jpg') }}"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/leisure-wilder/6.jpg') }}"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/leisure-wilder/7.jpg') }}"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/leisure-wilder/8.jpg') }}"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/leisure-wilder/9.jpg') }}"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/leisure-wilder/10.jpg') }}"/>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--path-->
    <section id="path">
        <div class="container mt-3 path">
            <p data-aos="fade-down" data-aos-duration="500">Home &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp Projects</p>
        </div>
    </section>


    <!--project details-->
    <section id="project-details">
        <div class="container project-details" style="margin-top: 4rem; padding: 0 7rem;">
            <h6>LEISURE PROJECTS</h6>
            <h2>The Wilder Nest Bangalow - Kumana Village</h2>
            <p class="mt-4" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia nobis error quidem commodi dolorum sint. Omnis numquam consequuntur inventore! Voluptatem iure sit reiciendis nulla modi minus fugiat, corporis, excepturi exercitationem porro iusto eum repellendus! Adipisci vel natus laudantium aliquid officiis totam unde in repellendus, velit fuga ut, quibusdam facilis odio consequuntur ea laboriosam nulla numquam excepturi eligendi necessitatibus libero? Voluptatem pariatur doloribus reprehenderit quasi qui, ipsum aliquid. Animi rerum, ab, reiciendis veritatis eveniet voluptate nobis id beatae quae a dignissimos. Labore, est totam eum voluptatum repellendus voluptatibus distinctio voluptate cum maxime nulla? Vel animi dolores repellendus tempore molestias, perferendis blanditiis!</p>
        </div>
    </section>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>

@endsection