   <!-- Carousel Start -->
   <div class="container-fluid p-0 mb-5 pb-5" id="home">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                <img class="position-absolute w-100 h-100" src="{{ asset($inicio->imgSlider1)}}" style="object-fit: cover;" alt="img">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">{{$inicio->tituloSlider1}}</h4>
                        <h3 class="display-2 font-secondary text-white mb-4 text-uppercase">{{$inicio->textoSlider1}}</h3>
                        <a class="btn btn-light font-weight-bold py-3 px-5 mt-2 btn-scroll" href="#contact">Ver mas</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                <img class="position-absolute w-100 h-100" src="{{ asset($inicio->imgSlider2)}}" style="object-fit: cover;" alt="img">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">{{$inicio->tituloSlider2}}</h4>
                        <h3 class="display-2 font-secondary text-white mb-4 text-uppercase">{{$inicio->textoSlider2}}</h3>
                        <a class="btn btn-light font-weight-bold py-3 px-5 mt-2 btn-scroll" href="#contact">ver mas</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                <img class="position-absolute w-100 h-100" src="{{ asset($inicio->imgSlider3)}}" style="object-fit: cover;" alt="img">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">{{$inicio->tituloSlider3}}</h4>
                        <h3 class="display-2 font-secondary text-white mb-4 text-uppercase">{{$inicio->textoSlider3}}</h3>
                        <a class="btn btn-light font-weight-bold py-3 px-5 mt-2 btn-scroll" href="#contact">ver mas</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev justify-content-start" href="#header-carousel" data-slide="prev">
            <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                <span class="carousel-control-prev-icon mt-3"></span>
            </div>
        </a>
        <a class="carousel-control-next justify-content-end" href="#header-carousel" data-slide="next">
            <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                <span class="carousel-control-next-icon mt-3"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->