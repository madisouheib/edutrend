@extends('app')

@section('content')

{{ menu('website', 'partials.nav') }}
    <!-- radial gradient-->
    <div class="radial"></div>

    <!-- radial gradient end -->


    <!------------------
     Articles
    --------------------->
    <div class="container articles">
<div class="row justify-content-center" >
    <h2 class="col-mb-4 text-start ">المدونة</h2> 
    <hr>
</div>  

        <div class="row justify-content-center">

            @foreach($posts as $post)
            <div class="card col-md-3 col-lg-3 p-0 me-4 mb-4">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="{{ Voyager::image( $post->image  ) }}" alt="Card image cap" />
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!-- Card content -->
                <div class="card-body">
                    <!-- Title -->
                    <h4 class="card-title" dir="RTL">{{ $post->title }}</h4>
                    <!-- Text -->
                    <p class="card-text" dir="RTL">
                        {{  substr($post->body, 0,  100)  }}
                    </p>
                    <a class="btn btn-indigo btn-rounded btn-md" href="{{ url('article/'.$post->slug)}}">
                         اقرأ المزيد
                    </a>
                </div>
            </div>
            <!-- Card -->
@endforeach
         
        </div>
    </div>

@endsection