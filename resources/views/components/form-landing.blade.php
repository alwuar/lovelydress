<section class="leads" id="form-lead">
    <div class="container">
        <div class="contenido-form">
            <div class="titular">
                <span>Nuestro servicio, una de las grandes diferencias</span>
                <h3>Un espacio exclusivo para tu gran decisión</h3>
                <p>Recibe asesoría privada donde nuestro equipo de expertas te guiará para encontrar "El Único" <br class="d-none d-sm-none d-md-block">en un ambiente de respeto, amor y celebración.</p>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- 1. CAMBIO: id="contactForm" por class="contactForm" -->
            <form action="{{ route('contacto.send') }}" method="POST" class="contactForm">
                @csrf
                <!-- 2. CAMBIO: id por class -->
                <input type="hidden" name="g-recaptcha-response" class="g-recaptcha-response">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Apellido</label>
                        <input type="text" name="apellido" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Teléfono</label>
                        <input type="tel" name="telefono" class="form-control" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-12">
                        <label>Ciudad</label>
                        <input type="text" name="ciudad" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="autorizacion" required>
                        <label class="form-check-label" style="color: gray">
                            Autorizo a Lovely Dress contactarme vía whatsapp o llamada con fines informativos.
                        </label>
                    </div>
                </div>
                <div class="botones">
                    <!-- 3. CAMBIO: id="btnSubmit" por class="btnSubmit" (igual con el texto y loader) -->
                    <button type="submit" class="btn btn-enviar btnSubmit">
                        <span class="btnText">Agendar una cita</span>
                        <span class="spinner-border spinner-border-sm d-none btnLoader" role="status" aria-hidden="true"></span>
                    </button>
                    <a href="https://wa.me/+529992973768" target="_blank" class="btn btn-whatsapp">Contactar por whatsapp</a>
                </div>
            </form>
            
            <p class="text-center pt-4">Recibirás una llamada confirmando el horario. Las citas para pruebas de novia son limitadas <br class="d-none d-sm-none d-md-block"> para garantizarte una atención 100% personalizada. Permítenos ser parte de tu sueño.</p>
        </div>
    </div>
</section>
