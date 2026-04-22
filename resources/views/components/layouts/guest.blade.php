<!DOCTYPE html>
<html lang="en">

<head>
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


    @stack('estilos')
</head>

<body>
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

    @stack ('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $(window).scroll(function() {
                $('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
            });
        });
    </script>
</body>

</html>
