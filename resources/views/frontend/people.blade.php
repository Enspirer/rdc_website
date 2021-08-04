@extends('frontend.layouts.layout')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/people.css') }}">


    <!--banner section-->
    <section id="banner">
        <div class="container-fluid text-center p-0">
            <img src="{{ asset('/img/people-banner.jpg') }}" alt="" class="img-fluid w-100">
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
        <p data-aos="fade-down" data-aos-duration="500"><a href="{{url('/')}}" style="text-decoration: none; color: #212529;">Home</a> &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp <a href="{{url('people')}}" style="text-decoration: none; color: #212529;">People</a></p>
      </div>
    </section>


    <!--people-->
    <section id="people">
        <div class="container people" style="margin-top: 5rem; padding: 0 7rem;">
            <h2 data-aos="fade-right" data-aos-duration="500">Meet our Team</h2>

            <p class="mt-4" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, voluptas ea accusamus et quaerat adipisci recusandae impedit! Repellendus blanditiis quis earum! Doloremque id tempore facere!</p>

            <div class="principal" style="margin-top: 5.5rem;">
                <h4 class="fw-bold mb-4" data-aos="fade-right" data-aos-duration="500">Principal Architect</h4>

                <div class="row justify-content-between">
                    <div class="col-md-5" data-aos="zoom-in" data-aos-duration="600">
                        <img src="{{ asset('img/people-principal.png') }}" alt="" class="img-fluid" >
                    </div>
                    <div class="col-md-6 details">
                        <h2 class="fw-bold" data-aos="fade-up" data-aos-duration="500">Archt. Russell Dandeniya. FIA(SL)</h2>
                        <small class="fs-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">BSc.(B.E.), P.G. Dip (PM), MSc. (Arch), RIBA , Int.Asso.AIA , FIA (SL)</small>

                        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                            <p class="mt-3 mb-0" style="font-size: 0.9rem; line-height: 1rem;">International Associate member of American Institute of Architects, AIA</p>
                            <p class="mb-0 mt-2" style="font-size: 0.9rem; line-height: 1rem;">International member of Royal Institute of British Architects, RIBA</p>
                            <p class="mb-0 mt-2" style="font-size: 0.9rem; line-height: 1rem;">Fellow member of Sri Lanka Institute of Architects, SLIA</p>
                            <p class="mb-0 mt-2" style="font-size: 0.9rem; line-height: 1rem;">Chairman – City School of Architecture- CSA</p>
                            <p class="mb-0 mt-2" style="font-size: 0.9rem; line-height: 1rem;">Chairman ACSR-Architects Regional Council of Asia -ARCASIA</p>
                            <p class="mb-0 mt-2" style="font-size: 0.9rem; line-height: 1rem;">Board of Governor, National Arbitration Center - SLNAC</p>
                            <p class="mb-0 mt-2" style="font-size: 0.9rem; line-height: 1rem;">Director of Sri Lanka Association of Project Managers – SLAPM</p>
                            <p class="mb-0 mt-2" style="font-size: 0.9rem; line-height: 1rem;">Past President – Rotary Club of Capital City-RCCC</p>
                            <p class="mb-0 mt-2" style="font-size: 0.9rem; line-height: 1rem;">Principal Architect of Russell Dandeniya Chartered Architects-RDCA</p>
                            <p class="mb-0 mt-2" style="font-size: 0.9rem; line-height: 1rem;">Director RDC Architects (Pvt) Ltd</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--professional team-->
    <section id="professional-team">
        <div class="container professional-team" style="margin-top: 6rem; padding: 0 7rem;">
            <h4 class="fw-bold mb-5">Professional Team</h4>

            <div class="row content-between text-center">

                @foreach($professionals as $key => $pro)

                    @if($pro->qualifications == null)
                    <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="600">
                        <div class="mb-4 ">
                            <img src="{{url('files/professional/',$pro->image)}}" alt="" class="img-fluid">
                        </div>

                        <div class="team-details">
                            <h5>{!! $pro->name !!}</h5>
                            <small class="fs-6">{!! $pro->job_position !!}</small>
                        </div>
                        
                    </div>
                    @else
                    <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="600">
                        <div class="mb-4 team">
                            <img src="{{url('files/professional/',$pro->image)}}" alt="" class="img-fluid">
                        </div>

                        <div class="team-details">
                            <h5>{!! $pro->name !!}</h5>
                            <small class="fs-6">{!! $pro->job_position !!}</small>
                        </div>
                        
                        <div class="slide">
                            <p class="mb-0">{!! $pro->qualifications !!}</p>
                        </div>
                    </div>
                    @endif
                    
                @endforeach   
                
            </div>
            
        </div>
    </section>



    <!--office team-->
    <section id="office-team">
        <div class="container office-team" style="margin-top: 6rem; padding: 0 7rem;">
            <h4 class="fw-bold mb-5">Office Team</h4>

            <div class="row content-between text-center">

            @foreach($offices as $key => $office)
                
                @if($office->qualifications == null)
                <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="600">
                    <div class="mb-4">
                        <img src="{{url('files/office/',$office->image)}}" alt="" class="w-100 office" style="height: 490px">
                    </div>

                    <div class="team-details">
                        <h5>{!! $office->name !!}</h5>
                        <small class="fs-6">{!! $office->job_position !!}</small>
                    </div>                        
                </div>    
                @else
                <div class="col-sm-4 team" data-aos="zoom-in" data-aos-duration="600">
                    <div class="mb-4">
                        <img src="{{url('files/office/',$office->image)}}" alt="" class="w-100 office" style="height: 490px">
                    </div>

                    <div class="team-details">
                        <h5>{!! $office->name !!}</h5>
                        <small class="fs-6">{!! $office->job_position !!}</small>
                    </div>
                    
                    <div class="slide">
                        <p class="mb-0">{!! $office->qualifications !!}</p>                      
                    </div>
                </div>    
                @endif
                
            @endforeach     

            </div>
            
            
        </div>
    </section>


    <!--finace department-->
    <section id="finance-department">
        <div class="container finance-department" style="margin-top: 6rem; padding: 0 7rem;">
            <h4 class="fw-bold mb-5">Finance Department</h4>

            <div class="row content-between text-center">
                <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="600">
                    <div class="mb-4">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>H.F. Miskin</h5>
                        <small class="fs-6">Accountant</small>
                    </div>                        
                </div>    

                <div class="col-sm-4 team" data-aos="zoom-in" data-aos-duration="600">
                    <div class="mb-4">
                        <img src="{{ asset('img/person-avatar.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="team-details">
                        <h5>Lasanthi Chathurangani</h5>
                        <small class="fs-6">Assistant Accountant</small>
                    </div>
                    
                </div>
            </div>
            
            
        </div>
    </section>


    <!--office assistants-->
    <section id="office-assistants">
        <div class="container office-assistants" style="margin-top: 6rem; padding: 0 7rem;">
            <h4 class="fw-bold mb-5">Office Assistants</h4>

            <div class="row content-between text-center">
                <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="600">
                    <div class="mb-4">
                        <img src="{{ asset('img/office_assistants/premachandra.jpeg') }}" alt="" class="w-100" style="height: 400px">
                    </div>

                    <div class="team-details">
                        <h5>Kandegedara Premachandra</h5>
                    </div>                        
                </div>    

                <div class="col-sm-4 team" data-aos="zoom-in" data-aos-duration="600">
                    <div class="mb-4">
                        <img src="{{ asset('img/office_assistants/menike.jpeg') }}" alt="" class="w-100" style="height: 400px">
                    </div>

                    <div class="team-details">
                        <h5>K.V. Ranasinghe Menike</h5>
                    </div>
                    
                </div>
            </div>
            
            
        </div>
    </section>

@endsection