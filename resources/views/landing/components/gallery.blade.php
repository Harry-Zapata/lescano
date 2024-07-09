    <!-- Gallery Start -->
    <div class="container-fluid bg-gallery" id="project" style="padding: 120px 0; margin: 90px 0;">
        <div class="section-title position-relative text-center" style="margin-bottom: 120px;">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Proyectos</h6>
            <h1 class="font-secondary display-4 text-white">{{ $inicio->TextoGaleria }}</h1>
        </div>
        <div class="owl-carousel gallery-carousel">
            @foreach ($galeria as $img)
                <div class="gallery-item">
                    <img class="img-fluid w-100" style="width:500px; height: 200px " src="{{ asset($img->imagen) }}" alt="{{ $img->imagen }}">
                    <a class="btn btn-primary" href="{{ asset($img->imagen) }}" data-lightbox="gallery">
                        <i class="fa fa-2x fa-plus text-white"></i>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Gallery End -->
