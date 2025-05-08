<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="card bg-soft-success rounded-4">
      <div class="card-body p-md-10 p-xl-11">
        <div class="row gx-lg-8 gx-xl-12 gy-10">
          <div class="col-lg-6">
            <h3 class="display-4 mb-4">Frequently Asked Questions</h3>
            <p class="lead fs-lg mb-0">If you don't see an answer to your question, you can send us an email from our contact form.</p>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <div class="accordion accordion-wrapper" id="accordionExample">
              @foreach($faqs as $index => $faq)
              <div class="card plain accordion-item">
                <div class="card-header" id="heading{{ $index }}">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">
                    {{ $faq->question }}
                  </button>
                </div>
                <!--/.card-header -->
                <div id="collapse{{ $index }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>{{ $faq->answer }}</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              @endforeach
              <!--/.accordion-item -->
            </div>
            <!--/.accordion -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!--/.card-body -->
    </div>
    <!--/.card -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->