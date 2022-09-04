


@extends('app')

@section('content')

{{ menu('website', 'partials.nav') }}
<!-- radial gradient-->
<div class="radial"></div>
<div class="radialR"></div>
<!-- radial gradient end -->

<div class="container presentation">
    <div class="row">
        <div class="col-md-6">
            <div class="lc-block mb-3 mb-md-0">
                <div class="ratio ratio-16x9" lc-helper="video-embed">
                    <iframe class="video-js vjs-theme-sea"  style="border-radius: 10px;"  src="{{ $home->univ_vedio }}"  title="Iframe Example"></iframe>
                </div>
            </div>
            <!-- /lc-block -->
        </div>
        <!-- /col -->
        <div class="col-md-6 align-self-center" dir="rtl">
            <div class="lc-block mb-2">
                <div editable="rich">
                    <h1>
                      
                        <span class="second-part">القبول في 
                            <br>
                            معاهد اللغة</span>
                    </h1>
                    <p class="text-secondary col-lg-9">
                        لا تشغل نفسك بتحمل متاعب عمليات التسجيل في الجامعات، ففريق عملنا المختص مهمته تحصيل القبول لك في أفضل الجامعات بسرعة وسهولة مجانًا بدون أي رسوم تقديم.
                    </p>
                </div>
                <div class="lc-block d-grid gap-2 d-md-flex justify-content-md-start">
                    <a class="btn px-4 py-3 me-md-2 btn1" href="#" role="button" style="z-index: 200;">ابحث عن البرنامج المناسب لعمرك</a>
                    <a class="btn btn-outline-secondary px-4 btn2 pt-2" href="#" role="button">لديك سؤال أو
                        استفسار؟<br />
                        احجز استشارة مجانية</a>
                </div>
            </div>
            <!-- /lc-block -->
        </div>
        <!-- /col -->
    </div>
</div>

<!-- ----------------
  section 
--------------------->

<div class="py-4 pt-6 service-1 services">
    <div class="container">
        <!-- title  -->
        <div class="lc-block text-center">
            <span editable="inline" class="mt-2 d-block here">
                أكثر من 100 جامعة تختار منها تخصصك الدراسة
            </span>
            <h3 editable="inline" class="display-2 mb-4">
                <b>تعلم اللغة صار أسهل</b>
            </h3>
        </div>

        <!-- Row  -->
        <div class="row justify-content-center py-4">
            <!-- Column -->
            <div class="col-md-3 wrap-service1-box  hvr-float">
                <div class="card border-0 card-shadow mb-5" data-aos="zoom-in-up">
                    <div class="card-body text-center">
                        <div class="my-3">
                            <img src="assets/icon7.svg" alt="wrapkit" />
                        </div>
                        <h5 class="font-weight-mediu  hvr-float">
                            اختيار التخصص
                        </h5>
                        <br>
                        <p class="mt-3 pb-3 hvr-float">
                            نجيب على أهم اسئلتكم حتى تختار التخصص المناسب
                        </p>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-3 wrap-service1-box  hvr-float">
                <div class="card border-0 card-shadow mb-5" data-aos="zoom-in-down">
                    <div class="card-body text-center">
                        <div class="my-3">
                            <img src="assets/icon6.svg" alt="wrapkit" />
                        </div>
                        <h5 class="font-weight-medium  hvr-float">
                            اجراءات التسجيل
                        </h5>
                        <br>
                        <p class="mt-3 pb-3  hvr-float">
                            نجيب على أهم اسئلتكم حتى تختار التخصص المناسب
                        </p>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-3 wrap-service1-box  hvr-float">
                <div class="card border-0 card-shadow mb-5" data-aos="zoom-in-up">
                    <div class="card-body text-center">
                        <div class="my-3">
                            <img src="assets/icon5.svg" alt="wrapkit" />
                        </div>
                        <h5 class="font-weight-medium  hvr-float">
                            اختيار البرنامج
                        </h5>
                        <br>
                        <p class="mt-3 pb-3  hvr-float">
                            نجيب على أهم اسئلتكم حتى تختار التخصص المناسب
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ----------------
  section 
--------------------->
@include('univs')
<!------------------
  section 
--------------------->
<div class="radial5"></div>
@include('questions')

<script>
var swiper = new Swiper(".mySwiper", {
 slidesPerView: 1,
 grabCursor: true,
 spaceBetween: 30,
 pagination: {
   el: ".swiper-pagination",
   clickable: true,
 },
 breakpoints: {
   640: {
     slidesPerView: 1,
     spaceBetween: 20,
   },
   768: {
     slidesPerView: 2,
     spaceBetween: 30,
   },
   1024: {
     slidesPerView: 3,
     spaceBetween: 30,
   },
    
 },
 
});


</script>
<!------------------
  section 
--------------------->

@endsection