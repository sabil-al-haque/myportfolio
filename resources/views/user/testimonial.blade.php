<div class="container-fluid py-5" id="testimonial">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Review</h1>
            <h1 class="position-absolute text-uppercase text-primary">Clients Say</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="owl-carousel testimonial-carousel">
                    @foreach ($clientdata as $item)
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-light mb-4">{{ $item->say }}</h4>
                        <img class="img-fluid rounded-circle mx-auto mb-3" src="clientimage/{{ $item->image }}" style="width: 80px; height: 80px;">
                        <h5 class="font-weight-bold m-0">C{{ $item->name }}</h5>
                        <span>{{ $item->profession }}</span>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
