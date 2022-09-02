
{{ menu('website', 'partials.nav') }}
      <!-- section one -->
  
       <!-- radial gradient-->
      <div class="radial"></div>
      <div class="radialR"></div>
      <!-- radial gradient end -->
  
      <div class="container presentation">
        <div class="row">
          <div class="col-md-6">
            <div class="lc-block mb-3 mb-md-0">
              <div class="ratio ratio-16x9" lc-helper="video-embed">
                <!-- video js  -->
                @if(!empty($home->vedio_link))

                <iframe class="video-js vjs-theme-sea"  allowpaymentrequest src="{{ $home->vedio_link }}"  title="Iframe Example"></iframe>
           
                @else 
                <img src="{{ Voyager::image( $home->img_link  ) }}"  class="img-responsive" style="border-radius: 10px;">
                @endif
          
              </div>
            </div>
            <!-- /lc-block -->
          </div>
          <!-- /col -->
          <div class="col-md-6 align-self-center" dir="rtl">
            <div class="lc-block mb-2">
              <div editable="rich">
                <h1>
                  {{ $home->title  }}<br />
                  <span class="second-part"> {{  $home->sub_title  }} </span>
                </h1>
                <p class="text-secondary">
              {{ $home->descrip }}
                  <br>
                </p>
              </div>
              <div
                class="lc-block d-grid gap-2 d-md-flex justify-content-md-start"
              >
                <a
                  class="btn px-4 py-4 me-md-2 btn1"
                  href="#register"
                  role="button"
                  >ابدء الدراسة الآن</a
                >
                <a
                  class="btn btn-outline-secondary px-4 btn2 pt-2"
                  href="#"
                  role="button"
                  >لديك سؤال أو استفسار؟<br />
                  احجز استشارة مجانية</a
                >
              </div>
            </div>
            <!-- /lc-block -->
          </div>
          <!-- /col -->
        </div>
      </div>