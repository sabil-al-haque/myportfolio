<div class="container-fluid py-5" id="about">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
            <h1 class="position-absolute text-uppercase text-primary">About Me</h1>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5 pb-4 pb-lg-0">
                @foreach ($aboutdata as $item)
                <img class="img-fluid rounded w-100" src="aboutimage/{{ $item->image }}" alt="">
            </div>
            <div class="col-lg-7">


                <h3 class="mb-4">{{ $item->title }}</h3>
                <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum. Amet dolor stet lorem diam dolor justo et dolor dolor dolor</p>
                <div class="row mb-3">
                    <div class="col-sm-6 py-2"><h6>Name: <span class="text-secondary">{{ $item->title }}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Birthday: <span class="text-secondary">{{ $item->content }}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Degree: <span class="text-secondary">{{ $item->name }}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Experience: <span class="text-secondary">{{ $item->birthday }}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Phone: <span class="text-secondary">{{ $item->degree }}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Email: <span class="text-secondary">{{ $item->experience }}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Address: <span class="text-secondary">{{ $item->phone }}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Freelance: <span class="text-secondary">{{ $item->email }}</span></h6></div>
                    
                    @endforeach
                </div>
                <a href="" class="btn btn-outline-primary mr-4">Hire Me</a>
                <a href="" class="btn btn-outline-primary">Learn More</a>
            </div>
        </div>
    </div>
</div>
