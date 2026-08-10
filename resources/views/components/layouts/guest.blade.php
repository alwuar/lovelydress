<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-18109702667"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-18109702667');
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JJ17M58XYJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-JJ17M58XYJ');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }} Lovely Dress</title>
    <meta property="og:locale" content="es_LA" />
    <meta property="og:url" content="https://lovelydress.com.mx/" />
    <meta property="og:site_name" content="Lovely Dress Bridal Boutique" />
    <script src="https://kit.fontawesome.com/d63ca50714.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Red+Rose:wght@300;400;700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;0,900;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">

        
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v8.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <style>
         #exampleModal2 .modal-dialog {
        display: flex;
        align-items: center;
        min-height: calc(100% - 3.5rem);
        max-width: 90vw;
        width: auto;
        margin: 1.75rem auto;
    }
    </style>

    @stack('estilos')
</head>



<body>

    <!-- Modal -->
{{-- <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" id="modalVideoDialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal2Label">Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <video controls autoplay muted id="modalVideo" style="max-width: 100%; max-height: 80vh; display: block; margin: 0 auto;">
                    <source src="{{ asset('video/promo-agosto.webm') }}">
                    Tu navegador no soporta el elemento de video.
                </video>
            </div>
        </div>
    </div>
</div> --}}


    <div class="cta-cita">
        <a href="https://wa.me/+529992973768" id="btn-whatsapp" class="btn btn-primary">
            Contactar por whatsapp
        </a>
    </div>

    <main role="main" class="container">

        <div class="modal fade" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="tituloVentana"
            aria-hidden="true">

            <div class="modal-dialog" role="document">

                <div class="modal-content">


                    <div class="modal-body">
                        <x-form-landing></x-form-landing>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>

            </div>


        </div>

    </main><!--/.container-->

    <x-nav></x-nav>
    {{ $slot }}
    <x-footer></x-footer>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Bootstrap 4.5 JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    @stack ('js')


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $(window).scroll(function() {
                $('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
            });
        });

        document.addEventListener('DOMContentLoaded', function() {

            document.getElementById('btn-whatsapp').addEventListener('click', function() {

                gtag('event', 'clic_whatsapp', {
                    link_url: this.href,
                    page_location: window.location.href
                });

            });

        });
    </script>


    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
    <script>
        // Usamos querySelectorAll para capturar todas las instancias del componente
        document.querySelectorAll('.contactForm').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Buscamos elementos SOLO dentro de este formulario específico (usando form.querySelector)
                const btn = form.querySelector('.btnSubmit');
                const btnText = form.querySelector('.btnText');
                const loader = form.querySelector('.btnLoader');
                const recaptchaInput = form.querySelector('.g-recaptcha-response');

                // Bloquear botón y mostrar loader
                btn.disabled = true;
                if (btnText) btnText.innerText = 'Enviando...';
                if (loader) loader.classList.remove('d-none');

                grecaptcha.ready(function() {
                    grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', {
                        action: 'submit'
                    }).then(function(token) {
                        // El token se asigna solo al input de este formulario
                        recaptchaInput.value = token;
                        // Se envía solo este formulario
                        form.submit();
                    });
                });
            });
        });
    </script>

    <!-- Script para abrir el modal automáticamente -->
    <script>
        $(document).ready(function() {
            $('#exampleModal2').modal('show');
        });
    </script>
</body>

</html>
