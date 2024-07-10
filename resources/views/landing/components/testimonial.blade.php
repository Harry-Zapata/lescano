    <!-- Testimonial Start -->
    <div class="container-fluid py-5" id="testimonial">
        <div class="container py-5">
            <div class="section-title position-relative text-center" style="margin-bottom: 120px;">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Testimonios</h6>
                <h1 class="display-4">Lo que Nuestros Clientes dicen</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        @foreach ($testimonio as $testimonio)
                            <div class="text-center">
                                <img class="img-fluid mx-auto mb-3" src="{{ asset($testimonio->imagen) }}"
                                    style="width: 100px;" alt="">
                                <p style="font-size: 22px;">{{$testimonio->texto}}</p>
                                <h4>{{$testimonio->nombre}}</h4>
                                <span>{{$testimonio->cargo}}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
