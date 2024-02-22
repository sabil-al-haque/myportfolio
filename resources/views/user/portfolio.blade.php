<div class="container-fluid pt-5 pb-3" id="portfolio">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Gallery</h1>
            <h1 class="position-absolute text-uppercase text-primary">My Portfolio</h1>
        </div>
        <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">All</li>
                    <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first">Design</li>
                    <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second">Development</li>
                    <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third">Marketing</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">
            <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                @foreach ($projectdata as $item)
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid rounded w-100" src="projectimage/{{ $item->project_image }}" alt="">
                    <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                        <a href="user/img/portfolio-1.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                        </a>
                    </div>
                    <p>Project Name: {{ $item->project_name }}</p>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
