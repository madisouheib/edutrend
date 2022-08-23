@extends('app')

@section('content')

{{ menu('website', 'partials.nav') }}


    <!-- radial gradient-->
    <div class="radial" style="z-index: -100;"></div>
    <div class="radialR"></div>
    <!-- radial gradient end -->

    <div class="container presentation">
        <div class="row">
            <div class="col-md-6">
                <div class="lc-block">
                    <div class="mE-4" lc-helper="video-embed">
                       <img  style="width:90%; z-index: 300;"src="assets/Revenue-bro 1.png" alt="">
                    </div>
                </div>
                <!-- /lc-block -->
            </div>
            <!-- /col -->
            <div class="col-md-6 align-self-center" dir="rtl">
                <div class="lc-block mb-4 mx-4">
                    <div editable="rich">
                        <h1>
                          
                            <p class="second-part font-weight-light" >  شاركنا النجاح وحقق    
                                <br> 
                            <b>معنا مكاسب مالية</b></p>
                        </h1>
                        <p class="text-secondary col-lg-9">
                            يمكنك ربح مبالغ مالية كل شهر عبر الشراكة في تسويق خدماتنا عبر روابط الاحالة،</p>
                    </div>
                    <div class="lc-block d-grid gap-2 d-md-flex justify-content-md-start">
                        <a class="btn px-4 py-3 me-md-2 btn1" href="#" role="button" style="z-index: 200;"> سجل الآن كشريك </a>
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
                <span editable="inline" class="mt-2 d-block here">كن شريكا معنا</span>
             
            </div>

            <!-- Row  -->
            <div class="row justify-content-center py-4">
                <!-- Column -->
                <div class="col-md-3 wrap-service1-box  hvr-float">
                    <div class="card border-0 card-shadow mb-5" data-aos="zoom-in-up">
                        <div class="card-body text-center">
                            <div class="my-3" dir="rtl">
                                <img src="assets/charik1icon.png" alt="wrapkit" />
                            </div>
                            <h5 class="font-weight-mediu  hvr-float">احصل على مكافئتك</h5>
                            <br>
                            <p class="mt-3 pb-3 hvr-float">
                                عند تسجيل الطالب رسميًا، يحق لك طلب مكافئتك المالية .
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-3 wrap-service1-box  hvr-float">
                    <div class="card border-0 card-shadow mb-5" data-aos="zoom-in-down">
                        <div class="card-body text-center" dir="rtl">
                            <div class="my-3">
                                <img src="assets/charik2icon.png" alt="wrapkit" />
                            </div>
                            <h5 class="font-weight-medium  hvr-float">شارك رابط الإحالة </h5>
                            <br>
                            <p class="mt-3 pb-3  hvr-float">
                                سوق لرابط الإحالة من حسابك وشاركه مع المهتمين
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-3 wrap-service1-box  hvr-float">
                    <div class="card border-0 card-shadow mb-5" data-aos="zoom-in-up">
                        <div class="card-body text-center">
                            <div class="my-3"dir="rtl">
                                <img src="assets/charik3icon.png" alt="wrapkit" />
                            </div>
                            <h5 class="font-weight-medium  hvr-float">أنشئ حسابً شريك</h5>
                            <br>
                            <p class="mt-3 pb-3  hvr-float">
                                قم بالتواصل معنا لانشاء حسابك الخاص وتعرف على محتلف العروض </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section>
        <!-- video of registrations here-->
        <h2 class="text-center">شاهد طريقة التسجيل</h2>
         <!-- video js 
        ADD VIDEO HERE
        -->
        

    </section>
    <!------------------
      section 
    --------------------->
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


    <!------------------
      section 
    --------------------->



@endsection