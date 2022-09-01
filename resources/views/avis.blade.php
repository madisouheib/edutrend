<!-- lc-needs-hard-refresh -->

<div class="container py-6 testimonials" >
	<div class="lc-block text-center">
		<div editable="rich">
			<h2 class="mb-3 display-6 fw-bold">آراء طلابنا</h2>
		</div>
	</div>
	<div class="row align-items-center py-2">
		<div class="position-relative">
			<!-- Slider main container -->
			<div class="swiper mySwiper position-relative swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper mb-5" id="swiper-wrapper-c11bf912925d5250" aria-live="polite" style="cursor: grab; transform: translate3d(-382px, 0px, 0px); transition-duration: 0ms;">
					<!-- Slides -->
                    @foreach($avis as $avi)
					<div class="swiper-slide lc-block swiper-slide-prev" role="group" aria-label="1 / 6" style="width: 352px; margin-right: 30px;">
						<div class="card p-2 hover-overlay" style="background-color: #F1FAFF; outline:non; border:none;  ">
							<div class="card-body">
								<div class="lc-block mb-4">
									<div editable="rich">
										<p style="color:inherit;">
                                            <img class=" my-2" src="assets/quote1.svg" alt="">
                                            <br>
   {{ $avi->body  }} &nbsp;
                                           
                                            <img  class="mx-2 my-2" src="assets/quote2.svg" alt="">
                                        </p>  
                                        </div>
								</div>
								<div class="lc-block d-inline-flex">
									<div class="lc-block me-3" style="min-width:72px">
										<img class="img-fluid rounded-circle " src="{{ Voyager::image( $avi->image  ) }}" width="72" height="72">
									</div>
									<div class="lc-block px-2 py-2 pt-3 pe-3">
										<div editable="rich">
											<p class="h5 mb-0" style="color: inherit"><b>  {{ $avi->name }} </b></p>
											<p style="color: inherit;"> {{ $avi->created_at }} &nbsp;</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

@endforeach

          
           
				</div>
				<!-- If we need pagination -->
				<div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
			<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
		</div>
	</div>
</div>
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