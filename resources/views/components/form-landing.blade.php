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

            <form action="{{ route('contacto.send') }}" method="POST" id="contactForm">
                @csrf
                <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="inputName" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputApellido">Apellido</label>
                        <input type="text" name="apellido" class="form-control" id="inputApellido" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputTel">Teléfono</label>
                        <input type="tel" name="telefono" class="form-control" id="inputTel" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="inputCity">Ciudad</label>
                        <input type="text" name="ciudad" class="form-control" id="inputCity" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="autorizacion" id="gridCheck" required>
                        <label class="form-check-label" for="gridCheck" style="color: gray">
                            Autorizo a Lovely Dress contactarme vía whatsapp o llamada con fines informativos.
                        </label>
                    </div>
                </div>
                <div class="botones">
                    <button type="submit" class="btn btn-enviar" id="btnSubmit">
                        <span id="btnText">Agendar una cita</span>
                        <span id="btnLoader" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                    </button>
                    <a href="https://wa.me/+529992973768" target="_blank" class="btn btn-whatsapp">Contactar por whatsapp</a>
                </div>
            </form>
            
            <p class="text-center pt-4">Recibirás una llamada confirmando el horario. Las citas para pruebas de novia son limitadas <br class="d-none d-sm-none d-md-block"> para garantizarte una atención 100% personalizada. Permítenos ser parte de tu sueño.</p>
        </div>
    </div>
</section>

<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Elementos del botón
        const btn = document.getElementById('btnSubmit');
        const btnText = document.getElementById('btnText');
        const loader = document.getElementById('btnLoader');

        // Activar Loader
        btn.disabled = true;
        btnText.innerText = 'Enviando...';
        loader.classList.remove('d-none');

        grecaptcha.ready(function() {
            grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', {action: 'submit'}).then(function(token) {
                document.getElementById('g-recaptcha-response').value = token;
                document.getElementById('contactForm').submit();
            });
        });
    });
</script>