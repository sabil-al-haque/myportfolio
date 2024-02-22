<div class="container-fluid pt-5" id="blog">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Blog</h1>
            <h1 class="position-absolute text-uppercase text-primary">Latest Blog</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-5">
                @foreach ($blogdata as $item)
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded w-100" src="blogimage/{{ $item->image }}" alt="blogimage">
                    <div class="blog-date">
                        <h4 class="font-weight-bold mb-n1">{{ $item->day }}</h4>
                        <small class="text-white text-uppercase">{{ $item->month }}</small>
                    </div>
                </div>
                <h5 class="font-weight-medium mb-4">{{ $item->content }}</h5>
                <a class="btn btn-sm btn-outline-primary py-2" href="">Read More</a>
                @endforeach
            </div>

        </div>
    </div>
</div>
