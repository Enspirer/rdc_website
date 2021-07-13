@extends('frontend.layouts.layout')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/organizational.css') }}">


    <!--banner section-->
    <section id="banner">
        <div class="container-fluid text-center p-0">
            <img src="{{ asset('img/organizational-banner.jpg') }}" alt="" class="img-fluid w-100">
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
          <p data-aos="fade-down" data-aos-duration="500">Home &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp Practice &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp Organizational Structure</p>
      </div>
    </section>


    <!--organizational structure-->
    <section id="organizational">
        <div class="container organizational" style="margin-top: 5rem; padding: 0 7rem;">
            <h2 data-aos="fade-right" data-aos-duration="500">Organizational Structure</h2>

            <div class="row mt-5 justify-content-between">
                <div class="col-md-6 details">
                    <p style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">The present Organizational Structure of the Firm is a system of diversification of the consultancy Services from pure architectural and engineering services to project management, landscape design, infrastructure development consultants and Master plans with the help of allied professionals/ Expertise. It is a multi-decisionary consortium company with allied professional consultancy to expand new market paradigm.</p>

                    <p class="mt-4" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300"> <span class="fw-bold">RDC Architects (Pvt) Ltd</span> is an intentionally small studio type well established practice providing designs for diversified many categories of Buildings. Energetic approach in handling of any scale projects and proven sensible capabilities to render total Architectural solutions while maintaining close Client Consultant relationship has been the success story of this <span class="fw-bold">active team</span> lead by award winning Architect. Russell Dandeniya for their steadily growing immaculate project portfolio over the recent years.</p>
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('img/organizational-structure.svg') }}" alt="" class="img-fluid" style="box-shadow: 0px 5px 10px #888888" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="300">
                </div>
            </div>
        </div>
    </section>

@endsection