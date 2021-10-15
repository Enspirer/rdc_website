@extends('frontend.layouts.layout')
@section('title','Architects in Sri Lanka | Russell Dandeniya Chartered Architects | RDC Architects')
@section('meta_description','RDC Architects is an Award winning Chartered Architect in Sri Lanka founded by the principal
Architect Russell Dandeniya, with decades of experience in commercial and residential projects.
Quantity surveyors, Structural engineers.')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/trip-individual.css') }}">


    <!--path-->
    <section id="path">
      <div class="container path" style="margin-top: 7rem">
          <p data-aos="fade-down" data-aos-duration="500"><a href="{{url('/')}}" style="text-decoration: none; color: #212529;">Home</a> &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp <a href="{{url('life')}}" style="text-decoration: none; color: #212529;">Practice</a> &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp <a href="{{url('life')}}" style="text-decoration: none; color: #212529;">Life at RDCA</a> &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp <a href="{{url('trip-individual',$lifeat->id)}}" style="text-decoration: none; color: #212529;">{{ $lifeat->title }}</a></p>
      </div>
    </section>

    
    <!-- trip -->
    <section id="trip">
        <div class="container trip" style="margin-top: 5rem; padding: 0 7rem;">
            <h4 class="fw-bold" data-aos="fade-right" data-aos-duration="500">{{ $lifeat->title }}</h4>

            <p class="mt-3" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;" data-aos="fade-right" data-aos-duration="500" data-aos-delay="200">{{ $lifeat->description }}</p>

            

            <div class="row mt-5 mb-4">


                @foreach($datas as $key => $data)
                <div class="col-sm-4">
                    <img src="{{url('files/life_at',$data->image)}}" alt="" class="img-fluid mb-4" data-bs-toggle="modal" data-bs-target="#tripModal" width="100%">
                </div>
                <br>

                @endforeach
            </div>
            

        </div>
    </section>


    <!-- trip modal-->

    <!-- Modal -->
    <div class="modal fade" id="tripModal" tabindex="-1" aria-labelledby="tripModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-body">
                <img src="" alt="" class="img-fluid" width="100%"> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>

@endsection