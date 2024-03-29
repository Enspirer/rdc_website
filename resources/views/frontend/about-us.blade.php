@extends('frontend.layouts.layout')

@section('title','Russell Dandeniya Chartered Architects | RDC Architects Sri Lanka')
@section('meta_description','TArchitectural Consultants for local and international clients, Principal architect Russell
Dandeniya, Rasal Dandeniya, graduated from University of Moratuwa SriLanka, and Srilanka institute of
architects, SLIA has won many awards for BEST HOUSE DESIGNS, best hotels, best estate bungalows.')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/about-us.css') }}">


    <!--banner section-->
    <section id="banner">
        <div class="container-fluid text-center p-0">
          <img src="{{ asset('img/about-banner.jpg') }}" alt="" class="img-fluid w-100">
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
          <p data-aos="fade-down" data-aos-duration="500"><a href="{{url('/')}}" style="text-decoration: none; color: #212529;">Home</a> &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp <a href="{{url('about-us')}}" style="text-decoration: none; color: #212529;">Practice</a> &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp <a href="{{url('about-us')}}" style="text-decoration: none; color: #212529;">About Us</a></p>
      </div>
    </section>


    <!--about us-->
    <section id="about-us">
        <div class="container about-us" style="margin-top: 5rem; padding: 0 7rem;">
            <h2 data-aos="fade-right" data-aos-duration="500">Who We are</h2>

            <p class="mt-4" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300"> <span class="fw-bold">RDC Architects (Pvt) Ltd</span> is an intentionally small studio type well established practice providing designs for diversified many categories of Buildings. Energetic approach in handling of any scale projects and proven sensible capabilities to render total Architectural solutions while maintaining close Client Consultant relationship has been the success story of this <span class="fw-bold">active team</span> lead by award winning Architect. Russell Dandeniya for their steadily growing immaculate project portfolio over the recent years.</p>

            <p class="mt-4" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;" data-aos="fade-up" data-aos-duration="500">RDCA is operating with unique core of young energetic team of Chartered Architects and undertaken training of Undergraduate and Post Graduate Architects and other technical staff thereby make invaluable service to the industry as well as to the country by producing and well maintaining a state-of –the –art office fully equipped with all modern software + facilities for more over than 10 years.</p> 

            <p class="mt-4" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;" data-aos="fade-up" data-aos-duration="500">Principal Architect has won several awards and recognitions both locally and internationally, deserved for top key positions in the field of Architecture, for the services rendered and contribution made to the Architectural fraternity as an initiator, explorer, learner, teacher, mentor, influencing and socially responsible Architect-leader, most importantly as the Director of the firm more over than 10 years as the <span class="fs-6 fw-bold">Principal Architect</span>.</p>

            <p class="mt-4" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">The Company has a principle of making joint ventures with reputed Project Management/Engineering / Quantity Surveying Consultancy services where necessary for larger <span class="fw-bold">Local and International</span> projects by providing purely Architectural Consultancy Services & assigning externally connected <span class="fw-bold">specialist consultants</span> for allied services rather in pinch in- house limited resources, <span class="fw-bold">to offer expert consultancy inputs to clients</span>, by virtually creating the largest consortium consultancy firm with growing links & long term working methodologies with these consultants of various successful projects for <span class="fw-bold">esteem set of private and corporate clients</span> in different parts of SL.</p>


            <h3 class="fw-bold mt-5" data-aos="fade-right" data-aos-duration="500">Philosophy</h3>
            <p class="mt-4" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">Providing future-oriented <span class="fw-bold">“Sustainable, Resilient, Safer”</span> total Architectural solutions innovatively for individual and co-operate clients, harmonizing their needs with “nature/context/programme” within agreed <span class="fw-bold">Costs, Quality and Time constraints</span>.</p>


            <h3 class="fw-bold mt-5" data-aos="fade-right" data-aos-duration="500">Scope of Service</h3>
            <p class="mt-4" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">Close and In-depth involvement in every project from inception -selecting sites, preparation of project proposals, Designing, Detailing of Architectural solutions up to the most finite information and Construction Management with assured high standards. Co-ordination with other relevant Authorities, Professionals, and other organizations locally <span class="fw-bold">on behalf of the client</span> / “as local representatives for international mega development projects for investors, and for International Architects firms as <span class="fw-bold">proactive local consultants</span>”, in their related services in high standard deliverables in all aspect Architectural Services including Cost Quality and Scheduled Time management with assured flexibility for the <span class="fw-bold">most valued clients for their respective Design Assignments/Programmes</span>.</p>

        </div>
    </section>


    <!--vision & mission-->
    <section id="vision-mission">
      <div class="container vision-mission" style="margin-top: 7rem; padding: 0 7rem;">
        <dir class="row p-0 justify-content-between align-items-center">
          <div class="col-lg-5" data-aos="zoom-in" data-aos-duration="500">
            <img src="{{ asset('img/about-vision-mission.svg') }}" alt="" class="img-fluid">
          </div>
          <div class="col-lg-6 details">
            <h3 class="fw-bold" data-aos="fade-down" data-aos-duration="500">Vision</h3>
            <p class="mt-4" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">To become most Client’ <span class="fw-bold">“Satisfied”</span> intentionally <span class="fw-bold">-Smallest </span> Architectural Firm Responsible from tiny bed space for larger scale remarkable few Developments in Sri Lanka/ Overseas who Designs minimum of 100 times of the office foot print-annually, where we operating the business; through sustainable, futuristic Architectural innovations.</p>

            <h3 class="mt-5 fw-bold" data-aos="fade-down" data-aos-duration="500" data-aos-delay="300">Mission</h3>
            <p class="mt-4" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">To become <span class="fw-bold">“Most clients’ Focused” -intentionally smallest and personalized Architectural</span> Firm in 2025 through timeless Architectural Creations using all the opportunities from tiny assignment to larger scale project with <span class="fw-bold">equal attention and greater satisfaction for all the clients.</span></p>
          </div>
        </dir>
      </div>
    </section>


    <!--our goals-->
    <!-- <section id="our-goals">
      <div class="container our-goals" style="margin-top: 7rem; padding: 0 7rem;">
        <h3 class="fw-bold" data-aos="fade-down" data-aos-duration="500">Our Goals</h3>
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-6">
            <ul class="list" style="text-align: justify;">
              <li class="mt-3 mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">To broaden the understanding of Client’s needs and to achieve landmark architectural innovations, while saving energy of the country and in turn the world. </li>
              <li class="mt-3 mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">To contribute to the built environment through less energy rated buildings by using modern materials and technology with traditional / sustainable concepts to achieve uniqueness and ultimate satisfaction of the clients.</li>
              <li class="mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">To address niche / specialized market share through renovation of historic buildings and addressing adoptive reuse, resilience and robust architecture and eco-sensitive designs.</li>
              <li class="mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">To maintain best qualified team of consultants, professionals, professionalism and motivated staff.</li>
              <li class="mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">To improve the capacities and services to suit the client’s requirements and the scale of the project accordingly, by using modern technology, flexibility to adaptability for any scale through ultimate creativity. </li>
              <li class="mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">To contribute the Architectural / Construction Industry by providing productive trained professionals and skilled staff.</li>
              <li class="mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">To act as a <span class="fw-bold">Larger virtual network firm</span> with tested links of expert Professionals and delivery of assured high quality Architectural/ Consortium consultancy services at all times.</li>
              <li class="mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">To enhance the government’s rapid development programs, Port City, 100 Town ships, by providing private-public sector <span class="fw-bold">entrepreneur development proposals</span> and <span class="fw-bold">master plans</span> as a social responsive architectural firm.</li>
              <li class="mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">To explore avenues of serving mankind with professional knowledge gained by participating CSR work to contribute without any fee claims.</li>
            </ul>
          </div>
          <div class="col-lg-5 image" data-aos="zoom-in" data-aos-duration="500">
            <img src="{{ asset('img/about-goals.svg') }}" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section> -->

@endsection