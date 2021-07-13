@extends('frontend.layouts.layout')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/trip-individual.css') }}">


    <!--path-->
    <section id="path">
      <div class="container path" style="margin-top: 7rem">
          <p data-aos="fade-down" data-aos-duration="500">Home &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp Practice &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp Life at RDCA &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp New Year Celebration at RDCA</p>
      </div>
    </section>



    <!-- trip -->
    <section id="trip">
        <div class="container trip" style="margin-top: 5rem; padding: 0 7rem;">
            <h4 class="fw-bold" data-aos="fade-right" data-aos-duration="500">New Year Celebration at RDCA</h4>

            <p class="mt-3" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;" data-aos="fade-right" data-aos-duration="500" data-aos-delay="200">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo placeat ex reprehenderit dolores labore aperiam ratione! Non natus nobis suscipit molestias vel maxime voluptate eum, consequuntur earum perspiciatis odit veritatis?</p>


            <div class="row mt-5 mb-4">
                <div class="col-4">
                    <img src="{{ asset('img/life-2.jpg') }}" alt="" class="img-fluid" data-bs-toggle="modal" data-bs-target="#tripModal">
                </div>

                <div class="col-4">
                    <img src="{{ asset('img/life-3.jpg') }}" alt="" class="img-fluid" data-bs-toggle="modal" data-bs-target="#tripModal">
                </div>

                <div class="col-4">
                    <img src="{{ asset('img/life-1.jpg') }}" alt="" class="img-fluid" data-bs-toggle="modal" data-bs-target="#tripModal">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-4">
                    <img src="{{ asset('img/life-image-2.jpg') }}" alt="" class="img-fluid" data-bs-toggle="modal" data-bs-target="#tripModal">
                </div>

                <div class="col-4">
                    <img src="{{ asset('img/life-image-1.jpg') }}" alt="" class="img-fluid" data-bs-toggle="modal" data-bs-target="#tripModal">
                </div>

                <div class="col-4">
                    <img src="{{ asset('img/life-1.jpg') }}" alt="" class="img-fluid" data-bs-toggle="modal" data-bs-target="#tripModal">
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <img src="{{ asset('img/life-image-2.jpg') }}" alt="" class="img-fluid" data-bs-toggle="modal" data-bs-target="#tripModal">
                </div>

                <div class="col-4">
                    <img src="{{ asset('img/life-3.jpg') }}" alt="" class="img-fluid" data-bs-toggle="modal" data-bs-target="#tripModal">
                </div>

                <div class="col-4">
                    <img src="{{ asset('img/life-image-1.jpg') }}" alt="" class="img-fluid" data-bs-toggle="modal" data-bs-target="#tripModal">
                </div>
            </div>
        </div>
    </section>


    <!-- trip modal-->

    <!-- Modal -->
    <div class="modal fade" id="tripModal" tabindex="-1" aria-labelledby="tripModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-body">
                <img src="" alt="" class="img-fluid">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>


    

@endsection