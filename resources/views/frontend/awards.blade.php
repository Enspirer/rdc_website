@extends('frontend.layouts.layout')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/awards.css') }}">

    <!--banner section-->
    <section id="banner">
        <div class="container-fluid text-center p-0">
            <img src="{{ asset('img/awards-banner.jpg') }}" alt="" class="img-fluid w-100">
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
          <p data-aos="fade-down" data-aos-duration="500"><a href="{{url('/')}}" style="text-decoration: none; color: #212529;">Home</a> &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp <a href="{{url('awards')}}" style="text-decoration: none; color: #212529;">Practice</a> &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp <a href="{{url('awards')}}" style="text-decoration: none; color: #212529;">Awards</a></p>
      </div>
    </section>


    <!--awards-->
    <section id="awards">
        <div class="container awards" style="margin-top: 5rem; padding: 0 7rem;">
            <h2 data-aos="fade-right" data-aos-duration="500">Awards</h2>

            <h4 class="fw-bold mt-5" data-aos="fade-right" data-aos-duration="500" data-aos-delay="400">Awards won by principal architect</h4>
            <br><br>

            @foreach($awards as $key => $award)

            @if($award->image == null)

            <div class="row mb-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                <div class="col-1">
                    <i class="fas fa-award fs-4" style="color: #B79079;"></i>
                </div>
                <div class="col-9 p-0">
                    <p style="font-size: 0.9rem; line-height: 1.7rem;">{!!$award->name!!}</p>
                </div>
            </div>

            @else
            
            <div class="row mb-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" >
                <div class="col-1">
                    <i class="fas fa-award fs-4" style="color: #B79079;"></i>
                </div>
                <div class="col-9 p-0">
                    <p style="font-size: 0.9rem; line-height: 1.7rem;">{!!$award->name!!}</p>
                </div>
                <div class="col-2">
                    <button class="btn default mb-3 mb-md-0 award-click" data-bs-toggle="modal" data-bs-target="#exampleModal{{$award->id}}" data-arg="3" data-aos="flip-up" data-aos-duration="500" data-aos-delay="400">CLICK HERE</button>
                </div>
            </div>
            @endif

            @endforeach

            <!-- <span class="fw-bold">"Best Personalized House of the year in 2008"</span> for The "Garden House @ Habaraduwa, by Sri Lanka Institute of Architects. -->

        </div>
    </section>

    @foreach($awards as $key => $award)
    <!-- awards modal -->
    <section id="awards-modal{{$award->id}}">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{$award->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="{{url('files/awards',$award->image)}}" alt="" class="img-fluid">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach



@endsection