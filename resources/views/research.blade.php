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
                        <iframe class="video-js vjs-theme-sea"  style="border-radius: 10px;"  src="{{ $home->research_vedio }}"  title="Iframe Example"></iframe>
                    </div>
                </div>
                <!-- /lc-block -->
            </div>
            <!-- /col -->
            <div class="col-md-6 align-self-center" dir="rtl">
                <div class="lc-block mb-2">
                    <div editable="rich">
                        <h1>
                          
                            <span class="second-part"> قبول 
                                <br> 
                                الأبحاث العلمية</span>
                        </h1>
                        <p class="text-secondary col-lg-9">
                            لدينا في إديوتريند فريق علمي مختص مهمته مساعدتك في إيجاد الجامعة الأنسب لدراستك البحثية. سواء كانت أبحاث للحصول على شهادة ماجستير أو دكتوراه نحن نقوم بإجراءات القبول اللازمة بالنيابة عنك.
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
                <span editable="inline" class="mt-2 d-block here">يساعدك فريقنا في اختيار الجامعة المناسبة</span>
                <h3 editable="inline" class="display-2 mb-4">
                    <b>نختار لك أنسب جامعة</b>
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
                            <h5 class="font-weight-mediu  hvr-float">بدء الدراسة</h5>
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
                            <h5 class="font-weight-medium  hvr-float">اجراءات التسجيل</h5>
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
                            <h5 class="font-weight-medium  hvr-float">اختيار الجامعة</h5>
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
 <div class="py-4 pb-4" style="background-color: #FBFBFD;">
    <div class="container univ">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="lc-block">
                    <span editable="inline" class="medium mt-2 d-block" style="color: var(--blue);">اختر من 7066 دورات في 362 معاهد اللغة الإنجليزية في بريطانيا</span>
                    <h2 editable="inline" class="mb-4">أشهر معاهد اللغة التي نتعامل معها</h2>
                </div><!-- /lc-block -->
            </div>

            <div class="col-md-4">
                <div class="p-lg-2 px-4 me-4 shadow univ-item">
                    <div class="lc-block mb-4 px-4 pt-4 "><img alt="" class="img-fluid" src="assets/univ2.png"
                            style="height:10vh">

                        <p class="my-3" editable="inline">The scholarship service that was held was very interesting and very lucky I
                            was able to get this scholarship thanks&nbsp;</p>

                    </div><!-- /lc-block -->
                </div>
            </div><!-- /col -->

            <div class="col-md-4">
                <div class="p-lg-2 px-4  me-4 shadow univ-item ">
                    <div class="lc-block mb-4 px-4 pt-4"><img alt="" class="img-fluid" src="assets/univ3.png"
                            style="height:10vh">

                       
                        <p  class="my-3" editable="inline"> A service that makes it very easy for every student who wants to continue
                            their education to a higher level&nbsp;</p>

                    </div><!-- /lc-block -->
                </div>
            </div><!-- /col -->
            <div class="col-md-4">
                <div class="p-lg-2 px-4  me-4 shadow univ-item ">
                    <div class="lc-block mb-4 px-4 pt-4"><img alt="" class="img-fluid" src="assets/univ1.png"
                            style="height:10vh">

                        
                        <p class="my-3" editable="inline">Every cost allocated to students is very well organized and well divided so
                            students don't need to bother managing it&nbsp;</p>

                    </div><!-- /lc-block -->
                </div>
            </div><!-- /col -->
        </div>



    </div>
    </div>

    <!------------------
      section 
    --------------------->
    <div class="radial5"></div>

    @include('questions')

<!-- testimonials-->

@include('avis')
    <!------------------
      section 
    --------------------->



@endsection