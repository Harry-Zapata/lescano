   <!-- Navbar Start -->
   <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-dark navbar-dark py-1 py-lg-0 px-lg-5">
    <a href="index.html" class="navbar-brand d-block d-lg-none">
        <h1 class="display-4 text-white text-uppercase m-0">MSLescano</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav ml-auto py-0">
            <a href="#home" class="nav-item nav-link active">Inicio</a>
            <a href="#about" class="nav-item nav-link" >Nosotros</a>
            <a href="#service" class="nav-item nav-link" >Servicios</a>
            <a href="#project" class="nav-item nav-link" >Proyectos</a>
        </div>
        <a href="index.html" class="navbar-brand bg-primary px-4 mx-3 d-none d-lg-block">
            <h1 class="display-4 text-white text-uppercase m-0">{{$inicio->Textologo}}</h1>
        </a>
        <div class="navbar-nav mr-auto py-0">
            <a href="#team" class="nav-item nav-link" >Equipo</a>
            <a href="#faqs" class="nav-item nav-link" >FAQs</a>
            <a href="#testimonial" class="nav-item nav-link" >Testimonios</a>
            <a href="#contact" class="nav-item nav-link" >Contacto</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->