<div class="accordion container col-lg-8" id="myAccordion" dir="rtl">
    <h2 class="text-center my-4 mt-6">الأسئلة الشائعة</h2>
    @foreach($questions as $question)
    <div class="accordion-item" >
        <h2 class="accordion-header" id="headingOne" >
            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne"> {{ $question->question }} </button>									
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
            <div class="card-body">
                <p>
                    {{ $question->response }}

                </p>
            </div>
        </div>
    </div>
 @endforeach

  
</div>
