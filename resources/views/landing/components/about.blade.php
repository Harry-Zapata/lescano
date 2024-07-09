
    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid mb-4 mb-lg-0" src="{{asset($inicio->imgNosotros)}}" alt="">
                </div>
                <div class="col-lg-7">
                    <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Sobre Nosotros</h6>
                    <h1 class="display-4 mb-3"><span class="text-primary">{{ $inicio->TituloNosotros }}</span> {{ $inicio->textoNosotros }}</h1>
                    <p class="text-justify">
                        {{ $inicio->descripcionNosotros }}
                    </p>
                    <a class="btn btn-primary font-weight-bold py-3 px-5 mt-2" type="button" data-toggle="modal" data-target="#modalNosotros">Mas Informacion</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->