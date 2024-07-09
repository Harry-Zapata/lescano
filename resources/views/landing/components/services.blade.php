  <!-- Service Start -->
  <div class="container-fluid py-5" id="service">
      <div class="container py-5">
          <div class="section-title position-relative text-center">
              <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Servicios</h6>
              <h1 class="font-secondary display-4">Nuestros Servicios</h1>
          </div>
          <div class="row">
              @foreach ($servicios as $servicios)
                  <div class="col-lg-4 mb-3">
                      <div class="product-item mb-2">
                          <div class="product-img">
                              <img class="img-fluid" src="{{ asset($servicios->imagen) }}"
                                  alt="{{ $servicios->imagen }}" style="width: 100%; height: 300px">
                              <a type="button" class="btn btn-primary" data-toggle="modal"
                                  data-target="#modalServicio{{ $servicios->id }}">
                                  <i class="fa fa-2x fa-plus text-white"></i>
                              </a>
                          </div>
                          <div class="bg-secondary text-center p-4">
                              <h3 class="m-0">{{ $servicios->nombre }}</h3>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </div>
  <!-- Service End -->