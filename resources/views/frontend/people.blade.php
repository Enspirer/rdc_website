@extends('frontend.layouts.layout')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/people.css') }}">


    <!--banner section-->
    <section id="banner">
        <div class="container-fluid text-center p-0">
            <img src="{{ asset('/img/people-banner.jpg') }}" alt="" class="img-fluid w-100">
        </div>
    </section>


    <!--path-->
    <section id="path">
      <div class="container mt-3 path">
        <p data-aos="fade-down" data-aos-duration="500">Home &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp People</p>
      </div>
    </section>


    <!--people-->
    <section id="people">
        <div class="container people" style="margin-top: 5rem; padding: 0 7rem;">
            <h2 data-aos="fade-right" data-aos-duration="500">Meet our Team</h2>

            <p class="mt-4" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, voluptas ea accusamus et quaerat adipisci recusandae impedit! Repellendus blanditiis quis earum! Doloremque id tempore facere!</p>

            <div class="principal" style="margin-top: 5.5rem;">
                <h4 class="fw-bold mb-4" data-aos="fade-right" data-aos-duration="500">Principal Architects</h4>

                <div class="row justify-content-between">
                    <div class="col-md-5" data-aos="zoom-in" data-aos-duration="600">
                        <img src="{{ asset('img/people-principal.png') }}" alt="" class="img-fluid" >
                    </div>
                    <div class="col-md-6 details">
                        <h2 class="fw-bold" data-aos="fade-up" data-aos-duration="500">Archt.</h2>
                        <h2 class="fw-bold mb-0" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">Russel Dandeniya</h2>
                        <small class="fs-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">BSc.(B.E.), P.G. Dip (PM), MSc. (Arch), RIBA , Int.Asso.AIA , FIA (SL)</small>

                        <p class="mt-3" style="font-size: 0.9rem; line-height: 1.7rem;" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                            International Associate member of American Institute of Architects, AIA<br>
                            International member of Royal Institute of British Architects, RIBA<br>
                            Fellow member of Sri Lanka Institute of Architects, SLIA<br>
                            Chairman – City School of Architecture- CSA<br>
                            Chairman ACSR-Architects Regional Council of Asia -ARCASIA<br>
                            Board of Governor, National Arbitration Center - SLNAC<br>
                            Director of Sri Lanka Association of Project Managers – SLAPM<br>
                            Past President – Rotary Club of Capital City-RCCC<br>
                            Principal Architect of Russell Dandeniya Chartered Architects-RDCA<br>
                            Director RDC Architects (Pvt) Ltd<br>
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--professional team-->
    <section id="professional-team">
        <div class="container professional-team" style="margin-top: 6rem; padding: 0 7rem;">
            <h4 class="fw-bold mb-5">Professional Team</h4>

            <div class="row justify-content-between text-center">

                <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="600">
                    <div class="mb-4 team">
                        <img src="{{ asset('img/people-professional-1.png') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>Eng. Dr.Udaya Dissanayaka</h5>
                        <small class="fs-6">Consultant Structural Engineer</small>
                    </div>
                    
                    <div class="slide">
                        <p class="mb-0">B.Sc. (Eng) - Civil,</p>
                        <p class="mb-0">Ph.D. (Structural),</p>
                        <p class="mb-0">C.Eng,</p>
                        <p class="mb-0">MSSE (SL)</p>
                    </div>
                </div>

                <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100">
                    <div class="mb-4 team" style="background-color: #E1E1E1;">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>Eng. K.V.G.G. Jayantha</h5>
                        <small class="fs-6">Consultant  Structural Engineer</small>
                    </div>
                    
                    <div class="slide">
                        <p class="mb-0">B.Sc. (Eng) (Hons)</p>
                        <p class="mb-0">C.Eng</p>
                        <p class="mb-0">MIE (SL)</p>
                        <p class="mb-0">M.Eng / P.G.Dip (Struct.Eng)</p>
                    </div>
                </div>

                <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200">
                    <div class="mb-4 team">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>Eng. Priyantha Piyasena</h5>
                        <small class="fs-6">Consultant  Structural Engineer</small>
                    </div>
                    
                    <div class="slide">
                        <p class="mb-0">B.Sc. Eng</p>
                        <p class="mb-0">Pg. Dip (Const.Mgt)</p>
                        <p class="mb-0">Pg. Dip (Struct.Mgt)</p>
                        <p class="mb-0">Chartered Eng</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between text-center">

                <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="600">
                    <div class="mb-4 team">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>Prof. Leelanandana Rajapaksha</h5>
                        <small class="fs-6">Mechanical Engineering consultant</small>
                    </div>
                    
                    <div class="slide">
                        <p class="mb-0">B.Sc. Eng (Mechanical)</p>
                        <p class="mb-0">First Class (Hons) 1993 University of Peradeniya</p>
                        <p class="mb-0">M.Eng (Energy) 1998 Asian Institute of Technology</p>
                        <p class="mb-0">Thailand PHD (Refrigerations) 2003 University of London, UK</p>
                    </div>
                </div>

                <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100">
                    <div class="mb-4 team" style="background-color: #E1E1E1;">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>Eng. Palitha Abeywardena</h5>
                        <small class="fs-6">Chartered MEP Engineer</small>
                    </div>
                    
                    <div class="slide">
                        <p class="mb-0">BSc. Engineering - University of Peradeniya SL (1994)</p>
                        <p class="mb-0">MSc. on Building Services (M & E) – University of Moratuwa SL (2008)</p>
                    </div>
                </div>

                <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200">
                    <div class="mb-4 team">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>Eng. Baratha Buddika Gamage</h5>
                        <small class="fs-6">Chartered Services Engineer / Senior Plumbing Engineer</small>
                    </div>
                    
                    <div class="slide" style="padding: 1.2rem;">
                        <p class="mb-0">B.Sc Eng. (Hons) in Mechanical Engineering</p>
                        <p class="mb-0">Post Graduate Diploma - Building Services Engineering</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between text-center">

                <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="600">
                    <div class="mb-4 team">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>Mr. Sunanda Gnanasiri </h5>
                        <small class="fs-6">Chartered Quantity Surveyor</small>
                    </div>
                    
                    <div class="slide">
                        <p class="mb-0">B.Sc. (QS) Hons,</p>
                        <p class="mb-0">PG Dip (Const Pro Mgt),</p>
                        <p class="mb-0">AIQS (SL)</p>
                        <p class="mb-0">MRICS</p>
                    </div>
                </div>

                <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100">
                    <div class="mb-4 team" style="background-color: #E1E1E1;">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>Mr. D.S.K. Upali Jayalath</h5>
                        <small class="fs-6">Chartered Quantity Surveyor</small>
                    </div>
                    
                    <div class="slide">
                        <p class="mb-0">B.Sc. Hon’s (Q.S),</p>
                        <p class="mb-0">M.Sc (Project Management),</p>
                        <p class="mb-0">AIQS (SL). MIPMSL,</p>
                        <p class="mb-0">ACIArb</p>
                        <p class="mb-0">ACIOB</p>
                    </div>
                </div>

                <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200">
                    <div class="mb-4 team">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>Eng. Mangala Silva</h5>
                        <small class="fs-6">Green Building Consultant</small>
                    </div>
                    
                    <div class="slide" style="padding: 1.2rem;">
                        <p class="mb-0">B.Sc. Eng (Hons),</p>
                        <p class="mb-0">M. Eng. (St.Eng. Sesigns)</p>
                        <p class="mb-0">C. Eng. MIE (SL)</p>
                        <p class="mb-0">MSSE (SL)</p>
                        <p class="mb-0">Green SL &#174Ap</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--office team-->
    <section id="office-team">
        <div class="container office-team" style="margin-top: 6rem; padding: 0 7rem;">
            <h4 class="fw-bold mb-5">Office Team</h4>

            <div class="row justify-content-between text-center">

                <div class="col-sm-4 team" data-aos="zoom-in" data-aos-duration="600">
                    <div class="mb-4">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>Archt. Bhagya Jayathilake</h5>
                        <small class="fs-6">Assistant Architect</small>
                    </div>
                    
                    <div class="slide">
                        <p class="mb-0">B. Arch. (Hon’s) 2015 <br> (University of Moratuwa)</p>
                        <p class="mb-0"> AIA (SL), 2018, Chartered Architect</p>
                        <!-- <a href="#" class="fs-5 m-1" style="color: #AC9373;"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="fs-5 m-1" style="color: #AC9373;"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="fs-5 m-1" style="color: #AC9373;"><i class="fab fa-instagram"></i></a> -->
                    </div>
                </div>

                <div class="col-sm-4 team" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
                    <div class="mb-4" style="background-color: #E1E1E1;">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>Archt. Manisha Kariyawasam</h5>
                        <small class="fs-6">Assistant Architect</small>
                    </div>
                    
                    <div class="slide">
                        <p class="mb-0">B. Arch. (Hon’s) 2016 <br> (University of Moratuwa)</p>
                    </div>
                </div>

                <div class="col-sm-4 team" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="600">
                    <div class="mb-4">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>Cherika Seneviwickrama</h5>
                        <small class="fs-6">Operations Admin Executive</small>
                    </div>
                    
                    <div class="slide">
                        <p class="mb-0">B.Sc. (Phy. Sc.) 2008 <br> (University of Colombo)</p>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-between text-center">

                <div class="col-sm-4 team" data-aos="zoom-in" data-aos-duration="600">
                    <div class="mb-4">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>Nuwan Karunathilaka</h5>
                        <small class="fs-6">Assistant Architect</small>
                    </div>
                    
                    <div class="slide">
                        <p class="mb-0">B. Arch. (Hon’s) 2013 <br> (University of Moratuwa)</p>
                    </div>
                </div>

                <div class="col-sm-4 team" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
                    <div class="mb-4" style="background-color: #E1E1E1;">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>Madura Gunasekara</h5>
                        <small class="fs-6">Landscape Architect</small>
                    </div>
                    
                    <div class="slide">
                        <p class="mb-0">B.Land. Arch. (Hon’s) 2017 <br> (University of Moratuwa)</p>
                    </div>
                </div>

                <div class="col-sm-4 team" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="600">
                    <div class="mb-4">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>Maulie Anuththara Wijeratne</h5>
                        <small class="fs-6">Assistant Architect</small>
                    </div>
                    
                    <div class="slide">
                        <p class="mb-0">B. Arch. (Hon’s) 2017 <br> (University of Moratuwa)</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between text-center">

                <div class="col-sm-4 team" data-aos="zoom-in" data-aos-duration="600">
                    <div class="mb-4">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>W. K. Rumesh Lakmal</h5>
                        <small class="fs-6">Assistant Architect</small>
                    </div>
                    
                    <div class="slide">
                        <p class="mb-0">B. Arch. (Hon’s) 2017 <br> (University of Moratuwa)</p>
                    </div>
                </div>

                <div class="col-sm-4 team" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
                    <div class="mb-4" style="background-color: #E1E1E1;">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>Indumin Wickramasekara</h5>
                        <small class="fs-6">Assistant Architect</small>
                    </div>
                    
                    <div class="slide">
                        <p class="mb-0">B. Arch. (Hon’s) 2018 <br> (University of Moratuwa)</p>
                    </div>
                </div>

                <div class="col-sm-4 team" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="600">
                    <div class="mb-4">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>Jeewantha Prabodinee Subasena</h5>
                        <small class="fs-6">Assistant Architect</small>
                    </div>
                    
                    <div class="slide">
                        <p class="mb-0">B. Arch. (Hon’s) 2018 <br> (University of Moratuwa)</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between text-center">

                <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="600">
                    <div class="mb-4">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>H.F. Miskin</h5>
                        <small class="fs-6">Accountant</small>
                    </div>
                </div>

                <div class="col-sm-4 team" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
                    <div class="mb-4" style="background-color: #E1E1E1;">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>Dasun Sameera Munasignhe</h5>
                        <small class="fs-6">Assistant Architect</small>
                    </div>
                    
                    <div class="slide">
                        <p class="mb-0">B. Arch. (Hon’s) 2019 <br> (University of Moratuwa)</p>
                    </div>
                </div>

                <div class="col-sm-4 team" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="600">
                    <div class="mb-4">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>H. W. Thilina Saranga</h5>
                        <small class="fs-6">Assistant Architect</small>
                    </div>
                    
                    <div class="slide">
                        <p class="mb-0">B. Arch. (Hon’s) 2019 <br> (University of Moratuwa)</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between text-center">

                <div class="col-sm-4 team" data-aos="zoom-in" data-aos-duration="600">
                    <div class="mb-4">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>Chandima Gawarammana</h5>
                        <small class="fs-6">Assistant Architect</small>
                    </div>
                    
                    <div class="slide">
                        <p class="mb-0">B. Arch. (Hon’s) 2019 <br> (University of Moratuwa)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection