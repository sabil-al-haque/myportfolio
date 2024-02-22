<div class="container-fluid py-5" id="qualification">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Quality</h1>
            <h1 class="position-absolute text-uppercase text-primary">Education & Expericence</h1>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h3 class="mb-4">My Education</h3>
                @foreach ($educationdata as $item)
                <div class="border-left border-primary pt-2 pl-4 ml-2">
                    <div class="position-relative mb-4">
                        <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                        <h5 class="font-weight-bold mb-1">{{ $item->exam_name }}</h5>
                        <p class="mb-2"><strong>{{ $item->institue }}</strong> | <small>{{ $item->exam_year }}</small></p>
                        <p>{{ $item->details }}</p>
                    </div>

                </div>
                @endforeach
            </div>
            <div class="col-lg-6">
                @foreach ($experiencetdata as $item)



                <h3 class="mb-4">My Expericence</h3>
                <div class="border-left border-primary pt-2 pl-4 ml-2">
                    <div class="position-relative mb-4">
                        <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                        <h5 class="font-weight-bold mb-1">{{ $item->title }}</h5>
                        <p class="mb-2"><strong>{{ $item->company }}</strong> | <small>{{ $item->period }}</small></p>
                        <p>{{ $item->details }}</p>
                    </div>

                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>
