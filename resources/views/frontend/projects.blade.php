@extends('frontend.layouts.layout')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">


    <!--banner section-->
    <section id="banner">
        <div class="container-fluid banner-section px-0">
            <div id="carousel-projects" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carousel-projects" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carousel-projects" data-bs-slide-to="2"></li>
                    <li data-bs-target="#carousel-projects" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carousel-projects" data-bs-slide-to="3"></li>
                    <li data-bs-target="#carousel-projects" data-bs-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/projects-banner-1.jpg') }}" alt="First slide" class="img-fluid" style="width: 100%;">
                        <div class="carousel-caption text-end">
                            <a href="#"><img src="{{ asset('img/chat-icon.svg') }}" alt="" style="height: 1.5rem;"></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/projects-banner-2.jpg') }}" alt="Second slide" class="img-fluid" style="width: 100%;">
                        <div class="carousel-caption text-end">
                            <a href="#"><img src="{{ asset('img/chat-icon.svg') }}" alt="" style="height: 1.5rem;"></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/projects-banner-3.jpg') }}" alt="Third slide" class="img-fluid" style="width: 100%;">
                        <div class="carousel-caption text-end">
                            <a href="#"><img src="{{ asset('img/chat-icon.svg') }}" alt="" style="height: 1.5rem;"></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/projects-banner-4.jpg') }}" alt="Third slide" class="img-fluid" style="width: 100%;">
                        <div class="carousel-caption text-end">
                            <a href="#"><img src="{{ asset('img/chat-icon.svg') }}" alt="" style="height: 1.5rem;"></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/projects-banner-5.jpg') }}" alt="Third slide" class="img-fluid" style="width: 100%;">
                        <div class="carousel-caption text-end">
                            <a href="#"><img src="{{ asset('img/chat-icon.svg') }}" alt="" style="height: 1.5rem;"></a>
                        </div>
                    </div>
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
            <p class="mt-2" style="font-size: 0.9rem; line-height: 1.7rem; text-align: justify;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur deleniti ipsa atque sequi officia beatae sapiente quam quod magnam saepe obcaecati repellat animi officiis deserunt, at vero eaque ex repellendus fuga id quidem rem! Quos debitis nostrum reprehenderit consectetur omnis?</p>

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
                    @foreach(App\Models\Projects::where('category',$cat->name)->where('status', '=', 'Enabled')->get() as $data)

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