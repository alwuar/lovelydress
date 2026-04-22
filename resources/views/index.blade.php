@push('estilos')
    @vite(['resources/css/app.scss', 'resources/css/index.scss', 'resources/js/app.js', 'resources/js/main.js'])
@endpush
<x-layouts.guest title="Vestidos de novia en mérida">
    <section id="cabecera" class="cabecera">
        <div class="background-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12" id="text-left">
                        <h1 class="content-left" style=" color: #a37e88; font-weight: 800;">EL VESTIDO PERFECTO, <br>PARA
                            EL MOMENTO PERFECTO.</br></h1>
                        <h6 class="lead" style="color: #a37e88;">LUCE COMO SIEMPRE LO IMAGINASTE.</h6>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#ventanaModal">MÁS
                            INFORMACIÓN</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="nosotros" class="nosotros">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12" id="image-left">
                    <img src="images/ring.jpg" class="image-left"
                        alt="Vestidos de novia plus size nuevos y seminuevos | Lovely Dress Bridal Boutique">
                </div>
                <div class="col-md-6 col-sm-12" id="content-right">
                    <img src="images/lovely-icon.svg"
                        alt="Vestidos de novia plus size nuevos y seminuevos | Lovely Dress Bridal Boutique">
                    <h1>NOSOTROS</h1>
                    <p>Somos la primera tienda en Mérida en ofrecer la venta de vestidos de novia tallas plus size. Brindamos un servicio único que te permite vivir la experiencia completa
                        para encontrar tu vestido ideal.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios" class="servicios">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12" id="serv-left">
                    <img src="images/serv-icon-dress.svg"
                        alt="Vestidos de novia plus size nuevos | Lovely Dress Bridal Boutique">
                    <h1>Vestidos de novia <br> Plus size</h1>
                    <p>Elige el que más te guste entre todos nuestros artículos disponibles. Nosotros nos encargamos
                        de hacer el ajuste que necesites para convertirlo en el vestido perfecto para ti.</p>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#ventanaModal">MÁS
                        INFORMACIÓN</button>
                </div>
                <div class="col-md-6 col-sm-12" id="serv-right">
                    <img src="images/serv-icon-accesories.svg"
                        alt="Vestidos de novia plus size nuevos | Lovely Dress Bridal Boutique">
                    <h1>Velos y accesorios <br>para novia</h1>
                    <p>El ajuar nupcial es la extensión de tu personalidad. Te ayudamos a encontrar el que vaya con
                        tu vestido de novia, complexión, facciones y por supuesto, que sea el de tus sueños.</p>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#ventanaModal">MÁS
                        INFORMACIÓN</button>
                </div>
            </div>
        </div>
    </section>

    <section id="first-gallery" class="first-gallery">
        <div class="bgcolor">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-12" id="content-gal-left">
                        <h1>Conoce nuestro <br> nuevo showroom</h1>
                        <p>Nuestro objetivo es estar a la altura de este momento tan especial, por eso creamos un
                            espacio pensando en ti. </p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/gallery-1/9.jpg" class="d-block w-100"
                                        alt="Vestidos de novia plus size nuevos | Lovely Dress Bridal Boutique">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/gallery-1/2.jpg" class="d-block w-100"
                                        alt="Vestidos de novia plus size nuevos | Lovely Dress Bridal Boutique">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/gallery-1/3.jpg" class="d-block w-100"
                                        alt="Vestidos de novia plus size nuevos | Lovely Dress Bridal Boutique">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/gallery-1/4.jpg" class="d-block w-100"
                                        alt="Vestidos de novia plus size nuevos | Lovely Dress Bridal Boutique">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/gallery-1/5.jpg" class="d-block w-100"
                                        alt="Vestidos de novia plus size nuevos| Lovely Dress Bridal Boutique">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/gallery-1/6.jpg" class="d-block w-100"
                                        alt="Vestidos de novia plus size nuevos | Lovely Dress Bridal Boutique">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                </div>

    </section>

    <section id="second-gal" class="second-gallery">
        <div class="container">
            <div class="carousel-inner" role="listbox">
                <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel slide carousel-multi-item carousel-multi-item-2"
                    data-ride="carousel">



                    <!--Slides-->
                    <!--Controls-->
                    <div class="controls-top" style="text-align: center; padding-top: 40px; padding-bottom: 10px">
                        <a class="black-text" href="#multi-item-example" data-slide="prev"><i
                                class="fas fa-angle-left fa-3x pr-3" style="color: gray;"></i></a>
                        <a class="black-text" href="#multi-item-example" data-slide="next"><i
                                class="fas fa-angle-right fa-3x pl-3" style="color: gray;"></i></a>
                    </div>
                    <!--/.Controls-->


                    <!--First slide-->
                    <div class="carousel-item active">

                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="img-fluid" src="images/gallery-3/1.jpg"
                                    alt="Vestidos de novia plus size nuevos| Lovely Dress Bridal Boutique">
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="img-fluid" src="images/gallery-3/2.jpg"
                                    alt="Vestidos de novia plus size nuevos| Lovely Dress Bridal Boutique">
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="img-fluid" src="images/gallery-3/3.jpg"
                                    alt="Vestidos de novia plus size nuevos y seminuevos | Lovely Dress Bridal Boutique">
                            </div>
                        </div>

                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item">
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="img-fluid" src="images/gallery-2/2.jpg"
                                    alt="Vestidos de novia plus size nuevos y seminuevos | Lovely Dress Bridal Boutique">
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="img-fluid" src="images/gallery-2/7.jpg"
                                    alt="Vestidos de novia plus size nuevos y seminuevos | Lovely Dress Bridal Boutique">
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="img-fluid" src="images/gallery-2/8.jpg"
                                    alt="Vestidos de novia plus size nuevos y seminuevos | Lovely Dress Bridal Boutique">
                            </div>
                        </div>


                    </div>
                    <!--/.Second slide-->

                    <!--Third slide-->
                    <div class="carousel-item">

                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="img-fluid" src="images/gallery-2/5.jpg"
                                    alt="Vestidos de novia plus size nuevos y seminuevos | Lovely Dress Bridal Boutique">
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="img-fluid" src="images/gallery-2/1.jpg"
                                    alt="Vestidos de novia plus size nuevos y seminuevos | Lovely Dress Bridal Boutique">
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="img-fluid" src="images/gallery-2/9.jpg"
                                    alt="Vestidos de novia plus size nuevos y seminuevos | Lovely Dress Bridal Boutique">
                            </div>
                        </div>



                    </div>
                    <!--/.Third slide-->

                </div>
                <!--/.Slides-->

            </div>
            <!--/.Carousel Wrapper-->
        </div>


        <div class="col-12" style="text-align: center;">
            <a href="/showroom" class="btn btn-primary">Ver más</a>
        </div>


    </section>

    <x-form-landing></x-form-landing>


</x-layouts.guest>
