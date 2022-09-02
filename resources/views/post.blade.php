@extends('app')

@section('content')

{{ menu('website', 'partials.nav') }}


    <!-- content -->
    <!-- bg image -->
    <img class="my-4 img-fluid" src="{{ Voyager::image( $post->image  ) }}" alt="" style="height:50%;">
    <!-- description -->
    <div class="col-12 col-md-12 col-lg-12 text-center about" dir="rtl">
        <div class="lc-block mb-4 mt-4">
            <div editable="rich mb-4">
                <h2>
                {{ $post->title }}
                    <br>
                    <span class="since" data-aos="zoom-out-down" data-aos-duration="300">منذ أكثر من 7 سنوات</span>
                </h2>
                {!!  $post->body !!}
            </div>
        </div>
        <!-- /lc-block -->
 
        <!-- /lc-block -->
    </div>
    <!-- /col -->

    <!-- Partners -->



    <!-- map -->

   

<div class="radial5 container" style="
position: absolute;
width: 200px;
height: 774.82px;
left: 919.13px;
top: 1522.18px;

/* Blue 1 */

background: #2F80ED;
filter: blur(700px);
opacity: 80%;">

</div>
    <!-- newsletter-->

    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <h6>اشترك في قائمتنا البريدية</h6>
                        <h1>ليصلك كل جديد</h1>
                        <h5 class="content-tuned">أكتب ايميلك لتصلك آخر العروض وآخر المستجدات والمواضيع المفيديو في
                            الدراسة في الخارج</h5>
                        <div class="input-group ">
                            <input type="email" class="form-control mx-2 rounded-pill" placeholder="Email address...">
                            <span class="input-group-btn">
                                <button class="btn btn4 px-4 rounded-pill" type="submit">Submit</button>


                        </div>
                        <div class="text-end com" style="padding-left: 1rem;">

                            <a>We’ll never share your emaill with anyone else.</a>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    @endsection