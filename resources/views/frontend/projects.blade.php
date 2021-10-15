@extends('frontend.layouts.layout')
@section('title','Architects in Sri Lanka | Russell Dandeniya Chartered Architects | RDC Architects')
@section('meta_description','RDC Architects recognized for award winning services in commercial projects, hotel projects in
Srilanka, Architects for factory projects, hospitality sector. Training Center for NWSDB – Ratmalana
Cargills Square Bandarawela, City Control Center for Ceylon electricity board Kandy.')


@section('content')

    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">


    <!--banner section-->
    <section id="banner">
        <div class="container-fluid banner-section px-0">
            <div id="carousel-projects" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">                    
                    
                @foreach($banners as $key => $banner)
                
                    @if($key == 0)                    
                        <li data-bs-target="#carousel-projects" data-bs-slide-to="{{ $key }}" class="active"></li>
                    @else
                        <li data-bs-target="#carousel-projects" data-bs-slide-to="{{ $key }}"></li>
                    @endif
                    
                @endforeach 

                </ol>
                <div class="carousel-inner">

                @foreach($banners as $key => $banner)

                    @if($key == 0)
                        <div class="carousel-item active">
                            <img src="{{url('files/project_banner',$banner->image)}}" alt="First slide" class="img-fluid" style="width: 100%;">
                            <div class="carousel-caption text-end">
                                <a href="#"><img src="{{ url('img/chat-icon.svg') }}" alt="" style="height: 1.5rem;"></a>
                            </div>
                        </div>
                    @else
                        <div class="carousel-item">
                            <img src="{{url('files/project_banner',$banner->image)}}" alt="Second slide" class="img-fluid" style="width: 100%;">
                            <div class="carousel-caption text-end">
                                <a href="#"><img src="{{ url('img/chat-icon.svg') }}" alt="" style="height: 1.5rem;"></a>
                            </div>
                        </div>
                    @endif 
                    
                    
                @endforeach
                    
                </div>
                <a class="carousel-control-prev" href="#carousel-projects" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-projects" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
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
            <p data-aos="fade-down" data-aos-duration="500"><a href="{{url('/')}}" style="text-decoration: none; color: #212529;">Home</a> &nbsp <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i> &nbsp <a href="{{url('projects')}}" style="text-decoration: none; color: #212529;">Projects</a></p>
        </div>
    </section>


    <!--our projects-->
    <section id="our-projects">
        <div class="container our-projects" style="margin-top: 4rem; padding: 0 7rem;">
            <h2>Our Projects</h2>
            <p class="mt-2" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;">Are always contributing to the built environment through less energy rated buildings by using modern materials and technology with traditional / sustainable concepts to achieve uniqueness and ultimate satisfaction of vivid cross section of great clientele.</p>

            <ul class="nav mb-3 justify-content-center mt-5" id="projects-tab" role="tablist">
                <li class="nav-item project-item" role="presentation" style="border-bottom: 2px solid white;">
                  <a class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</a>
                </li>

                @foreach($category as $key => $cat)
                <li class="nav-item project-item" role="presentation" style="border-bottom: 2px solid white;">
                  <a class="nav-link" id="cat-id{{ $cat->id }}" data-bs-toggle="pill" data-bs-target="#cat{{ $cat->id }}" type="button" role="tab" aria-controls="cat-{{ $cat->id }}" aria-selected="false">{!!$cat->name!!}</a>
                </li>
                @endforeach 
    
            </ul>

            <div class="tab-content mt-5" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="tab">
                    <div class="row">
                        
                        @foreach($projects as $key => $pro)

                        <div class="col-sm-4 p-2 project">
                            <a href="{{ url('individual',$pro->id) }}" class="text-decoration-none">
                                <div style="background-image: url('{{url('files/projects',$pro->feature_image)}}'); background-size: cover; height: 250px; border-radius:7px; background-position: center center">
                                    <p class="project-details text-center"> {{ $pro->title }} @ {{ $pro->location }} </p>
                                </div>
                            </a>
                        </div>

                        @endforeach    
                       
                    </div>                    
                </div>

                @foreach($category as $key=> $cat)

                <div class="tab-pane fade" id="cat{{ $cat->id }}" role="tabpanel" aria-labelledby="cat-{{ $cat->id }}">
                    <div class="row">
                    @foreach(App\Models\Projects::where('category',$cat->name)->orderBy('order', 'ASC')->where('status', '=', 'Enabled')->get() as $data)

                        <div class="col-sm-4 p-2 project">
                            <a href="{{ url('individual',$data->id) }}" class="text-decoration-none">
                                <div style="background-image: url('{{url('files/projects',$data->feature_image)}}'); background-size: cover; height: 250px; border-radius:7px; background-position: center center">
                                    <p class="project-details text-center">{{$data->title}} @ {{ $data->location }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach    

                    </div>
                </div>

                @endforeach               

            </div>

            <div class="text-center mt-5">
                <a href="" class="btn rounded-0 border border-dark px-5">LOAD MORE</a>
            </div>
        </div>
    </section>


@endsection