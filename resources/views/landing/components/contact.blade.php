<!-- Contact Start -->
<div class="container-fluid py-5" id="contact">
    <div class="container py-5">
        <div class="section-title position-relative text-center">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Contacto</h6>
            <h1 class="font-secondary display-4">Envianos un Mensaje</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate"
                        action="{{ route('admin.contact.store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control bg-secondary border-0 py-4 px-3"
                                    id="nombre" name="nombre" placeholder="Tu Nombre" required="required"
                                    data-validation-required-message="Por favor ingresa tu nombre" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <input type="email" class="form-control bg-secondary border-0 py-4 px-3"
                                    id="email" name="email" placeholder="Tu Email" required="required"
                                    data-validation-required-message="Por favor ingresa tu email" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control bg-secondary border-0 py-4 px-3" id="telefono"
                                name="telefono" placeholder="Teléfono" required="required"
                                data-validation-required-message="Por favor ingresa tu teléfono" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control bg-secondary border-0 py-4 px-3" id="asunto"
                                name="asunto" placeholder="Asunto" required="required"
                                data-validation-required-message="Por favor ingresa el asunto" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control bg-secondary border-0 py-2 px-3" rows="6" id="mensaje" name="mensaje"
                                placeholder="Mensaje" required="required" data-validation-required-message="Por favor ingresa tu mensaje"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div id="mensajeError" class="text-danger text-center">

                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit"
                                id="sendMessageButton">Enviar Mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->




