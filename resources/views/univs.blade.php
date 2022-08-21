
      <div class="container univ">
        <div class="row">
          <div class="col-md-12 text-center">
            
            <div class="lc-block">
              <span editable="inline" class="medium mt-4 d-block">نصلك بأكثر من 200 جامعة بريطانية</span>
              <h2 editable="inline" class="mb-4">أشهر الجامعات التي نتعامل معها</h2>
            </div><!-- /lc-block -->
          </div>
  
  
  @foreach($univs as $univ)
          <div class="col-md-4 col-lg-4 col-xs-12">
            <div class="p-lg-2 px-4 me-4 shadow univ-item  carousel-cell ">
              <div class="lc-block mb-4 px-4 pt-4 "><img alt="" class="img-fluid" src="{{ Voyager::image( $univ->logo_univ  ) }}" style="height:10vh">
      
                <h4 class="my-3" editable="inline"></h4>
                <p editable="inline"> {{ $univ->descrip_univ }} </p>
      
              </div><!-- /lc-block -->
            </div>
          </div><!-- /col -->
  @endforeach

        </div>
  
      
  
  
          
          
  
        </div>
      </div>
      