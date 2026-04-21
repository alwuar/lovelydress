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
    <link
        href="https://fonts.googleapis.com/css2?family=Red+Rose:wght@300;400;700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;0,900;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">


    @stack('estilos')
</head>

<body>
    <main role="main" class="container">

        <div class="modal fade" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="tituloVentana"
            aria-hidden="true">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header">
                        <h5 id="tituloVentana">Envíanos un mensaje ✨</h5>
                        <button class="close" data-dismiss ="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="alert alert-succes">

                            <form name="contact-form" method="post" action="enviar.php">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nombre</label>
                                    <input type="name" name="nombre" class="form-control"
                                        id="exampleFormControlInput1" required="required"
                                        placeholder="Escribe tu nombre">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input type="email" name="email" class="form-control"
                                        id="exampleFormControlInput1" required="required"
                                        placeholder="Escribe tu correo electrónico">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Fecha en que quieres visitarnos</label>
                                    <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" required="required" rows="1"
                                        placeholder="Ejemplo: 14 de Febrero 2021"></textarea>
                                </div>
                                <button type="submit" class="btn btn-secondary">Enviar</button>
                            </form>


                        </div>
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
