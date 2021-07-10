@extends('frontend.layouts.layout')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/awards.css') }}">

    <!--banner section-->
    <section id="banner">
        <div class="container-fluid text-center p-0">
            <img src="{{ asset('img/awards-banner.jpg') }}" alt="" class="img-fluid w-100">
        </div>
    </section>


    <!--path-->
    <section id="path">
      <div class="container mt-3 path">
          <p data-aos="fade-down" data-aos-duration="500">Home &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp Practice &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp Awards</p>
      </div>
    </section>


    <!--awards-->
    <section id="awards">
        <div class="container awards" style="margin-top: 5rem; padding: 0 7rem;">
            <h2 data-aos="fade-right" data-aos-duration="500">Awards</h2>

            <h4 class="fw-bold mt-5" data-aos="fade-right" data-aos-duration="500" data-aos-delay="400">Awards won by principal architect</h4>

            <div class="row mt-5 mb-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                <div class="col-1">
                    <i class="fas fa-award fs-4" style="color: #B79079;"></i>
                </div>
                <div class="col-9 p-0">
                    <p style="font-size: 0.9rem; line-height: 1.7rem;"><span class="fw-bold">"Young Architect of the year 2009",</span> by Sri Lanka Institute of Architects.</p>
                </div>
                <div class="col-2">
                    <img src="{{ asset('img/click.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>

            <div class="row mb-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                <div class="col-1">
                    <i class="fas fa-award fs-4" style="color: #B79079;"></i>
                </div>
                <div class="col-9 p-0">
                    <p style="font-size: 0.9rem; line-height: 1.7rem;">Rotary International Wilf Wilkinsom Commemorative - RIBI Award by Great Britain & Ireland for Thambaddai GTM School @ Akkaraipattu in 2007.</p>
                </div>
                <div class="col-2">
                    <img src="{{ asset('img/click.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>

            <div class="row mb-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" >
                <div class="col-1">
                    <i class="fas fa-award fs-4" style="color: #B79079;"></i>
                </div>
                <div class="col-9 p-0">
                    <p style="font-size: 0.9rem; line-height: 1.7rem;"><span class="fw-bold">"Best Personalized House of the year in 2008"</span> for The "Garden House @ Habaraduwa, by Sri Lanka Institute of Architects.</p>
                </div>
                <div class="col-2">
                    <img src="{{ asset('img/click.jpg') }}" alt="" class="img-fluid award-click" data-bs-toggle="modal" data-bs-target="#exampleModal" data-arg="3">
                </div>
            </div>

            <div class="row mb-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                <div class="col-1">
                    <i class="fas fa-award fs-4" style="color: #B79079;"></i>
                </div>
                <div class="col-9 p-0">
                    <p style="font-size: 0.9rem; line-height: 1.7rem;"><span class="fw-bold">Best CSR Project 2018</span> in Sri Lanka by Japan Sri Lanka Technical & Cultural Association – JASTECA</p>
                </div>
                <div class="col-2">
                    <img src="{{ asset('img/click.jpg') }}" alt="" class="img-fluid award-click" class="img-fluid award-click" data-bs-toggle="modal" data-bs-target="#exampleModal" data-arg="4">
                </div>
            </div>

            <div class="row mb-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                <div class="col-1">
                    <i class="fas fa-award fs-4" style="color: #B79079;"></i>
                </div>
                <div class="col-9 p-0">
                    <p style="font-size: 0.9rem; line-height: 1.7rem;"><span class="fw-bold">Best Sustainability Project 2018</span> by Japan Sri Lanka Technical & Cultural Association - JASTECA</p>
                </div>
                <div class="col-2">
                    <img src="{{ asset('img/click.jpg') }}" alt="" class="img-fluid award-click" class="img-fluid award-click" data-bs-toggle="modal" data-bs-target="#exampleModal" data-arg="5">
                </div>
            </div>

            <div class="row mb-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600">
                <div class="col-1">
                    <i class="fas fa-award fs-4" style="color: #B79079;"></i>
                </div>
                <div class="col-9 p-0">
                    <p style="font-size: 0.9rem; line-height: 1.7rem;"><span class="fw-bold">Merit Award 2018 for Office Building Category</span> – Jiffy Products (Pvt) Ltd office building @ Mirigama & was recognized as the <span class="fw-bold">Best Office Building in Sri Lanka for 2018</span></p>
                </div>
                <div class="col-2">
                    <img src="{{ asset('img/click.jpg') }}" alt="" class="img-fluid award-click" class="img-fluid award-click" data-bs-toggle="modal" data-bs-target="#exampleModal" data-arg="6">
                </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700">
                <div class="col-1">
                    <i class="fas fa-award fs-4" style="color: #B79079;"></i>
                </div>
                <div class="col-9 p-0">
                    <p style="font-size: 0.9rem; line-height: 1.7rem;"><span class="fw-bold">"AIA, Honor" Award for Open International Architecture 2019</span> and Jury Special Award <span class="fw-bold">'AIA, Sustainable Future Award for Architecture 2019'</span> for Jiffy Products SL Office Building @ Mirigama by <span class="fw-bold">American Institute of Architects.</span></p>
                </div>
                <div class="col-2">
                    <img src="{{ asset('img/click.jpg') }}" alt="" class="img-fluid award-click" class="img-fluid award-click" data-bs-toggle="modal" data-bs-target="#exampleModal" data-arg="7">
                </div>
            </div>

        </div>
    </section>


    <!-- awards modal -->
    <section id="awards-modal">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
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
    </section>

@endsection