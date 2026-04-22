@push('estilos')
    @vite(['resources/css/app.scss', 'resources/css/landing.scss', 'resources/js/app.js', 'resources/js/main.js'])
@endpush
<x-layouts.guest title="Vestidos de novia Plus Size en Mérida">
    <header class="header">
        <div class="container">
            <div class="titular text-center">
                <h2> El vestido que soñaste, diseñado <br class="d-none d-sm-none d-md-block d-lg-block"> para la mujer que eres hoy.</h2>
                <p> En Lovely Dress, creemos que cada novia merece sentirse radiante, segura y absolutamente perfecta.<br class="d-none d-sm-none d-md-block d-lg-block">
                    Nuestra colección Bridal Curvy celebra tus curvas con diseños de alta costura que abrazan tu silueta
                    y honran tu historia de amor.</p>
                <a href="#formulario" class="btn btn-primary">Agendar una cita</a>
            </div>
        </div>
    </header>

    <section class="intro">
        <div class="contenido">
            <div class="contenido__texto">
                <h2>Tu boda no es el momento de encajar</h2>
                <p>Es el momento de que el vestido se rinda a tu belleza. No buscamos que quepas en un diseño, tenemos el diseño que te haga sentir la versión más espectacular de ti misma</p>
                <a href="https://wa.me/+529992973768"  target="blank_" class="btn btn-primary">Contactar a una asesora</a>
            </div>
            <div class="contenido__carrusel">
                <div class="contenido__img">
                    <img src="{{ asset('images/2026/curvy/webp/modelo-plus-7.webp') }}" alt="fotografía vestido de novia">
                </div>
                <div class="contenido__img">
                    <img src="{{ asset('images/2026/curvy/webp/modelo-plus-8.webp') }}" alt="fotografía vestido de novia">
                </div>
                <div class="contenido__img">
                    <img src="{{ asset('images/2026/curvy/webp/modelo-plus-9.webp') }}" alt="fotografía vestido de novia">
                </div>
                <div class="contenido__img">
                    <img src="{{ asset('images/2026/curvy/webp/modelo-plus-3.webp') }}" alt="fotografía vestido de novia">
                </div>                
            </div>
        </div>
    </section>

    <section class="unico">
        <div class="container">
            <div class="titular text-center">
                <span>Los pilares de tu vestido perfecto</span>
                <h2>¿Qué hace a un Lovely dress único?</h2>
            </div>
            <div class="unico__valores">
                <div class="valores__opcion">
                    <div class="video">
                        <video src="{{ asset('video/plus-1.webm') }}" playsinline playsinline muted no-controls loop preload="metadata"
                            autoplay>
                        </video>
                    </div>
                    <h5>Soporte Invisible, Confianza Total</h5>
                    <p>Estructuras internas tipo corset que definen tu figura y te brindan soporte durante toda la celebración, sin sacrificar la comodidad.</p>

                </div>
                <div class="valores__opcion">
                    <div class="video">
                        <video src="{{ asset('video/plus-2.webm') }}" playsinline  muted no-controls loop preload="metadata"
                            autoplay>
                        </video>
                    </div>
                    <h5>Telas que Cuentan Historias</h5>
                    <p>Encajes delicados, tules fluidos y satín premium seleccionados para estilizar y dar movimiento natural a cada paso hacia el altar.</p>

                </div>
                <div class="valores__opcion">
                    <div class="video">
                        <video src="{{ asset('video/plus-3.webm') }}" playsinline  muted no-controls loop preload="metadata"
                            autoplay>
                        </video>
                    </div>
                    <h5>El Corte que te Favorece</h5>
                    <p>Desde el romántico Corte Princesa hasta el sofisticado Sirena, tenemos el patrón exacto para resaltar lo que más amas de ti.</p>

                </div>
            </div>
        </div>
    </section>
    <section class="faqs">
        <div class="container">
            <h3 class="text-center pb-3">Preguntas frecuentes.</h3>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 video m-auto">
                    <video src="{{ asset('video/entrevista-estefani.webm') }}" playsinline muted controls loop preload="metadata"
                        autoplay class="w-100">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 preguntas">
                    
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        ¿Cuánto tiempo antes debo comprar mi vestido de novia?
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Lo recomendable es 3 meses.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                       ¿Cómo puedo estar segura de elegir la talla correcta para mi vestido?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                   Contamos con una Guía de Medidas detallada en cada producto que incluye busto, cintura y cadera. Si estás entre dos tallas, te recomendamos elegir la más grande, ya que es más sencillo realizar un ajuste menor con un sastre para que el vestido se adapte impecablemente a tu silueta.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        ¿Cómo debo lavar y cuidar mi vestido para que se mantenga como nuevo?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                   Debido a la delicadeza de nuestras telas (como satín, tul o aplicaciones de pedrería), recomendamos estrictamente el lavado en seco (tintorería). Para guardarlo, utiliza un gancho acolchado y evita la exposición directa al sol para proteger la intensidad del color. Si necesitas quitar arrugas leves, te sugerimos usar vaporizador a temperatura baja en lugar de plancha convencional.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        ¿Es necesario agendar una cita para visitar la boutique y probarme vestidos?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    En Lovely Dress nos encanta brindarte una atención personalizada y dedicada. Aunque puedes visitarnos para conocer nuestras colecciones, te recomendamos agendar una cita previa. De esta manera, una de nuestras asesoras de imagen estará lista para acompañarte, ayudarte a elegir los cortes que mejor favorezcan tu silueta y asegurar que tengas un probador disponible sin esperas.
                                </div>
                            </div>
                        </div>
<div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Si el vestido que me gusta necesita ajustes, ¿ustedes realizan el servicio de costura?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                   ¡Por supuesto! Queremos que el vestido te quede impecable. Contamos con un servicio especializado de ajustes de alta costura dentro de la boutique. Nuestras costureras expertas pueden encargarse de bastillas, ajuste de talles o tirantes para que la prenda se adapte perfectamente a tu cuerpo antes del día de tu evento.
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <x-form-landing></x-form-landing>

</x-layouts.guest>
