@extends('frontend.layouts.layout')

@section('title','Award winning Architects in SriLanka | Interior designers | RDC Architects')
@section('meta_description','The Best Architects in srilanka with over 10 years of experience in commercial projects, hotel
projects factory projects, hospitality sector, and services in landscape architects of srilanka, Quantity
surveyors of srilanka')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/overview.css') }}">

    <!--banner section-->
    <section id="banner">
        <div class="container-fluid text-center p-0">
            <img src="{{ asset('img/overview-banner.jpg') }}" alt="" class="img-fluid w-100">
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
          <p data-aos="fade-down" data-aos-duration="500"><a href="{{url('/')}}" style="text-decoration: none; color: #212529;">Home</a> &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp <a href="{{url('overview')}}" style="text-decoration: none; color: #212529;">Practice</a> &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp <a href="{{url('overview')}}" style="text-decoration: none; color: #212529;">Overview</a></p>
      </div>
    </section>


    <!--overview-->
    <section id="overview">
        <div class="container overview" style="margin-top: 5rem; padding: 0 7rem;">
            <h2 data-aos="fade-right" data-aos-duration="500">Overview</h2>

            <p class="mt-4" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">Award winning Architect Russell Dandeniya established RDCA in September 2008 and subsequently found RDC Architects (Pvt) Ltd to broaden its activities. Since then this small studio based practice has become very popular in a short period, absorbing a unique core of competent young Chartered architects and a range of externally connected specialist consultants. Over the last decade, it has grown steadily in experience and strength, bringing in a unique and inventive high quality, futuristic and practical Architecture for others to follow.
            The team spirit, an energetic approach in handling any scale projects and proven sensible capabilities to render total innovative Architectural solutions to client’s pragmatic project briefs –together with an excellent Client-Consultant relationship-have resulted in successful projects in various parts of the island. Multiple projects from same clients have been considered as the Best Awards or the success story behind and ever growing diversified links with co-operates sector clients and gaining project opportunities from various new clients on their high recommendation have been resulted stable, passionate, evolution of the firm as of its status today.   
            </p>
        </div>
    </section>

@endsection