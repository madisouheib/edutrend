@extends('app')

@section('content')

{{ menu('website', 'partials.nav') }}


    <!-- content -->
    <!-- bg image -->
    <img class="my-4 img-fluid" src="assets/abt.jpg" alt="" style="height:50%;">
    <!-- description -->
    <div class="col-12 col-md-12 col-lg-12 text-center about" dir="rtl">
        <div class="lc-block mb-4 mt-4">
            <div editable="rich mb-4">
                <h2>
                    شركة ايدو ترند
                    <br>
                    <span class="since" data-aos="zoom-out-down" data-aos-duration="300">منذ أكثر من 7 سنوات</span>
                </h2>
                <p class="desc px-4">
                    إديو تريند Edutrend شركة محدودة متعاقدة مع أفضل الجامعات ومراكز تعلم اللغة في بريطانيا<br>. هدفها
                    تسهيل وتسريع إجراءات القبول في الجامعات مجانًا بدون أن يدفع الطالب أي رسوم تقديم لا<br> بل سيحظى
                    أيضًا على مكافئة مادية عند قبوله وتسجيله في الجامعة.
                </p>
            </div>
        </div>
        <!-- /lc-block -->
        <div class="lc-block d-flex mb-5  justify-content-center stats">
            <div class="pe-3 text-center">
                <h3 class="h2 mb-0 " editable="inline" data-aos="zoom-out-down" data-aos-duration="300"><b>+500</b></h3>
                <span editable="inline" class="mb-0 text-muted">شريك رسمي</span>
            </div>

            <div class="px-3 text-center">
                <h3 class="h2 mb-0 " editable="inline" data-aos="zoom-out-down" data-aos-duration="400"><b>+3500</b></h3>
                <span editable="inline" class="mb-0 text-muted">طالب</span>
            </div>

            <div class="ps-3 text-center">
                <h3 class="h2 mb-0" editable="inline" data-aos="zoom-out-down" data-aos-duration="500"><b>+1050</b></h3>
                <span editable="inline" class="mb-0 text-muted">مسجل</span>
            </div>
        </div>
        <!-- /lc-block -->
    </div>
    <!-- /col -->

    <!-- Partners -->
    <div class="container col-12 justify-content-center">
        <div class="lc-block d-flex mb-5  justify-content-center">
 <div class="col-12  bg-light px-6 py-6">
    <div class="py-3 px-3">
        <img class="col-2 col-sm-2 mx-3" src="assets/univ1.svg" alt="" data-aos="fade-up"
        data-aos-anchor-placement="top-center" data-aos-duration="300">
        <img class="col-2 col-sm-2 mx-3" src="assets/univ2.svg" alt="" data-aos="fade-up"
        data-aos-anchor-placement="top-center" data-aos-duration="400">
        <img class="col-2 col-sm-2 mx-3" src="assets/univ3.svg" alt=""data-aos="fade-up"
        data-aos-anchor-placement="top-center" data-aos-duration="500">
        <img class="col-2 col-sm-2 mx-3" src="assets/univ4.svg" alt="" data-aos="fade-up"
        data-aos-anchor-placement="top-center" data-aos-duration="600">
        <img class="col-2 col-sm-2 mx-3" src="assets/univ5.svg" alt="" data-aos="fade-up"
        data-aos-anchor-placement="top-center" data-aos-duration="700">
    </div>
 </div>
</div>
</div>


    <!-- map -->

    <div class="container g-0 map-sec">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6">
                <div class="lc-block">
                    <div class="ratio ratio-16x9" lc-helper="gmap-embed">
                        <iframe src="https://maps.google.com/maps?q=London%2C%20UK&amp;t=m&amp;z=15&amp;output=embed&amp;iwloc=near"></iframe>
                    </div>
                </div><!-- /lc-block -->
            </div>
            <div class="col-lg-6 d-flex justify-content-center my-4">
                <div class="col-12 col-lg-8 p-4 text-center">
                    <div class="lc-block">
                        <div editable="rich" style="color: var(--blue);">
                            <h5>رقم التواصل</h5>
                        </div>
                    </div>
                    <div class="lc-block">
                        <div editable="rich">
                            <p>+447943332555</p>
                        </div>
                    </div>
    
                    <div class="lc-block"style="color: var(--blue);">
                        <div editable="rich">
                            <h5>البريد الالكتروني</h5>
                        </div>
                    </div>
                    <div class="lc-block">
                        <div editable="rich">
                            <p>offers@edutrend.co.uk</p>
                        </div>
                    </div>
    
                    <div class="lc-block"style="color: var(--blue);">
                        <div editable="rich">
                            <h5>العنوان</h5>
                        </div>
                    </div>
    
                    <div class="lc-block">
                        <div editable="rich">
                            <p>Office 9 Floor 5 Humberstone House 81 Humberstone Gate Leicester - LE1 1WB</p>
                        </div>
                    </div>
    
                </div>
            </div>
            
        </div>
    </div>

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