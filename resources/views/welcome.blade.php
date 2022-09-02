

@extends('app')

@section('content')
@include('partials.header')

<!-- ----------------
      section two
    --------------------->

    <div class="py-2 service-1 services">
        <div class="container">
          <!-- title  -->
          <div class="lc-block text-center">
            <span editable="inline" class="mt-2 d-block here">ماذا نقدم؟</span>
            <h3 editable="inline" class="display-2 mb-4">
              <b>أهم ما يميز خدماتنا</b>
            </h3>
          </div>
  
          <!-- Row  -->
          <div class="row justify-content-center">
@foreach($services as $service)
            <div class="col-md-3 wrap-service1-box hvr-float">
              <div class="card border-0 card-shadow mb-5 " data-aos="zoom-in-up">
                <div class="card-body text-center ">
                  <div class="my-3">
                    <img src="{{ Voyager::image( $service->img_bg  ) }}" style="height: 80px;width:80px;" alt="wrapkit" />
                  </div>
                  <h5 class="font-weight-medium hvr-float"> {{ $service->main_title }} </h5>
                  <br>
                  <p class="mt-3 pb-3 hvr-float">
                    {{ $service->description }} 
                  </p>
                  <br>
                </div>
              </div>
            </div>
            @endforeach
            <!-- Column -->
      
          </div>
        </div>
      </div>
  
      <!-- ----------------
        section three
      --------------------->
  
      <div class="container universities" style="padding-top: 10vh; padding-bottom: 10vh">
        <div class="row align-items-center px-2">
          <!-- side image -->
          <div class="col-12 col-md-5 col-lg-6">
            <div class="lc-block">
              <img
                alt=""
                class="img-fluid mx-auto d-block"
                src="assets/img-univ.png"
              />
            </div>
            <!-- /lc-block -->
          </div>
          <!-- /col -->
          <!-- side text -->
          <div class="col-12 col-md-7 col-lg-6" dir="rtl">
            <div class="lc-block mb-4 mt-4">
              <div editable="rich">
                <h4 class=" hvr-float">منذ سنة 2017</h4>
                <h2>
                  لدينا شراكات مع أفضل الجامعات <br />و وكيل UKEC في السعودية
                </h2>
                <p>
                  With more highly educated people, the hope is that <br />
                  can become valuable assets for the country's <br />future
                  development
                </p>
              </div>
            </div>
            <!-- /lc-block -->
            <div class="lc-block d-flex mb-5 stats">
              <div class="pe-3 text-center">
                <h3 class="h2 mb-0 " editable="inline" data-aos="flip-up" data-aos-duration="2000">500+</h3>
                <span editable="inline" class="mb-0 text-muted" >يدرس الآن</span>
              </div>
  
              <div class="px-3 text-center">
                <h3 class="h2 mb-0 " editable="inline" data-aos="flip-up" data-aos-duration="2000">3500+</h3>
                <span editable="inline" class="mb-0 text-muted">طالب</span>
              </div>
  
              <div class="ps-3 text-center">
                <h3 class="h2 mb-0" editable="inline" data-aos="flip-up" data-aos-duration="2000">1050+</h3>
                <span editable="inline" class="mb-0 text-muted">مسجل</span>
              </div>
            </div>
            <!-- /lc-block -->
          </div>
          <!-- /col -->
        </div>
      </div>
  
      <!-- ----------------
        section four
      --------------------->
  @include('univs')
      <!------------------
        section five
      --------------------->
      <div class="container theysaid" style="padding-top: 10vh; padding-bottom: 10vh">
  
        <div class="row align-items-center px-2">
          <!-- side image -->
          <div class="col-12 col-md-5 col-lg-6">
            <div class="lc-block">
              <img
                alt=""
                class="img-fluid mx-auto d-block" style=" position: relative; z-index: 2;"
                src="assets/img3.png"
              />
            </div>
            <!-- /lc-block -->
          </div>
          <!-- /col -->
          <!-- side text -->
          <div class="col-12 col-md-7 col-lg-6" dir="rtl">
            <div class="lc-block mb-4 mt-4">
              <div editable="rich">
                <h4 data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="300"
                data-aos-offset="0">قالوا عنا</h4>
                <h2 data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="400"
                data-aos-offset="0">من آراء طلابنا</h2>
                <p data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="500"
                data-aos-offset="0">
                  شغفنا يبدأ بإيماننا بأن كل شخص له الحق في أفضل <br />
                  فرصة للتعليم. نوفر الاستشارات التي توجه الطلاب حسب <br />
                  متطلباتهم وما يناسب مستقبلهم
                </p>
              </div>
            </div>
            <!-- /lc-block -->
            <div class="lc-block d-grid gap-2 d-md-flex justify-content-md-start">
              <a class="btn btn-primary px-5 py-3 me-md-2 btn3" href="#" role="button">تواصل معنا</a
              >
            </div>
          </div>
          <!-- /col -->
        </div>
   
      </div>
      <div class="radialD"></div>
      <div class="radialR2"></div>
      <!------------------
        section six
      --------------------->
      <div class="container articles">
        <h2 editable="inline" class="mb-4 text-center ">آخر المقالات</h2>
        <div class="row justify-content-center">

          @foreach($posts as $post)
          <div class="card col-md-3 col-lg-3 p-0 me-4 mb-4" data-aos="fade-up"
          data-aos-anchor-placement="top-bottom">
            <!-- Card image -->
            <div class="view overlay">
              <img
                class="card-img-top"
                src="{{ Voyager::image( $post->image  ) }}"
                alt="Card image cap"
              />
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Card content -->
            <div class="card-body">
              <!-- Title -->
              <h4 class="card-title" dir="RTL">{{ $post->title }}</h4>
              <!-- Text -->
 

   
              <button class="btn btn-indigo btn-rounded btn-md">
                 اقرأ المزيد
              </button>
            </div>
          </div>
          <!-- Card -->
  @endforeach
      
          <!-- Card -->
   
          <!-- Card -->
        </div>
      </div>
      <!------------------
        section seven
      --------------------->
  <div id="app"> 
 <register-portal> </register-portal>
      <!------------------
        section eight
      --------------------->
    </div>
      <div class="newsletter">
        <div class="container">
        <div class="row">
        <div class="col-sm-12">
            <div class="content">
              <h6>اشترك في قائمتنا البريدية</h6>
                <h1>ليصلك كل جديد</h1>
                <h5 class="content-tuned">أكتب ايميلك لتصلك آخر العروض وآخر المستجدات والمواضيع المفيديو في الدراسة في الخارج</h5>
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
        section nine
      --------------------->



@endsection





