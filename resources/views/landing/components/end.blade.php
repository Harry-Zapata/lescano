<!-- Scroll to Bottom -->
<i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i
        class="fa fa-angle-double-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>

<script>
    // si el formulario #contactForm es invalido, mostrar un alerta de error
    let form = document.getElementById('contactForm');
    form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
            let mensajeError = document.getElementById("mensajeError");
            mensajeError.textContent = "Todos los campos deven ser llenados"
            setTimeout(() => {
                document.getElementById('mensajeError').textContent = ""
            }, 5000);
            return false;
        }
        form.classList.add('was-validated');
    }, false);
</script>
<!-- Template Javascript -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<script>
    let navbar = {!! json_encode($inicio->navbar) !!};
    if (navbar == 'true') {
        $(window).on('load', function() {
            $('.navbar').fadeIn('slow').css('display', 'flex');
        })
    } else {

        $(window).scroll(function() {
            if ($(this).scrollTop() > 0) {
                $('.navbar').fadeIn('slow').css('display', 'flex');
            } else {
                $('.navbar').fadeOut('slow').css('display', 'none');
            }
        });
    }
</script>
<script>
    function updateNavLinks() {
        if (window.innerWidth < 991) {
            document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
                link.setAttribute('data-toggle', 'collapse');
                link.setAttribute('data-target', '#navbarCollapse');
            });
        } else {
            document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
                link.removeAttribute('data-toggle');
                link.removeAttribute('data-target');
            });
        }
    }

    window.addEventListener('resize', updateNavLinks);
    window.addEventListener('load', updateNavLinks);
</script>
</body>

</html>
