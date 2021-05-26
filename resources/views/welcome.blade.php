@extends('layouts.app')
@section('content')
<style>
body {
background-color:#000;

}
</style>
<div class="position-relative overflow-hidden px-5 mx-4 text-center bg-light " id="fondo">
    <h1 class="Titulos m-3" id="loMejor">Nuestros mejores modelos</h1>
    <!-- Carrusel de imágenes -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/jeep1.jpg">
                <div class="container ">
                    <div class="carousel-caption text-center cajac">
                        <p id="camp1"> Jeep Wrangler Sport<br>
                            Una trayectoria de capacidad 4×4 te acompaña en cada viaje, lista para llevarte a lugares
                            donde muchos
                            no se atreven a ir.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/jeep2.jpg">
                <div class="container">
                    <div class="carousel-caption text-center cajac">
                        <p id="camp2">Jeep GRAND CHEROKEE LIMITED <br>
                            Líneas dramáticas y curvas aerodinámicas, el Jeep® Grand Cherokee equilibra su belleza
                            impactante con el
                            estilo contundente de la marca Jeep®. Ha recibido más premios a lo largo de su vida que
                            cualquier otro
                            SUV.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/audi1.jpg">
                <div class="container">
                    <div class="carousel-caption text-center cajac">
                        <p id="camp3"> RS 6 Avant "RS Tribute edition" <br>
                            Rinde homenaje al RS
                            2 con sus llantas plateadas, rieles de techo negros, pintura exterior azul Nogaro, espejos
                            del color de
                            la carrocería, pinzas de freno rojas, escape RS Sport, paquete óptico negro y una variedad
                            de Audi
                            acabados interiores exclusivos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/audi2.jpg">
                <div class="container">
                    <div class="carousel-caption text-center cajac">
                        <p id="camp4">Audi A3 Sedan <br> Impresiona por su exterior deportivo y elegante y convence por
                            su
                            interior de
                            alta calidad. Con tecnologías innovadoras, avanzados sistemas de asistencia a la conducción
                            y un espacio
                            interior sorprendente, es justo lo que deseabas.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/nissan1.jpg">
                <div class="container">
                    <div class="carousel-caption text-center cajac">
                        <p id="camp5">NISSAN X-TRAIL<br> Disfruta de la vida familiar en un todoterreno más grande y
                            audaz, de hasta 7 plazas, con
                            todo lo que necesitas: estilo, respuesta sólida, tecnología de primer nivel y todo el
                            confort y
                            flexibilidad que necesitas para tus aventuras llenas de acción con los niños.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/nissan2.jpg">
                <div class="container">
                    <div class="carousel-caption text-center cajac">
                        <p id="camp6">Nissan 370z coupe 2020<br> Legendario motor V6 con 332 caballos de fuerza. Un
                            chasis
                            perfectamente equilibrado. Tanto
                            en curvas como en rectas, no hay nada que transmita las emociones como un Z.</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <h1 class="Titulos m-3" id="sobreNosotros">Sobre nosotros</h1>
    <div class="row p-2 ">
        <div class="col-lg-6 col-sm-12 col-12 m-auto">
            <h3 class="text-center">¿Quíenes somos?</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae aut fugit repudiandae odit,
                    similique
                    error. Adipisci similique qui, inventore omnis consectetur libero quo placeat perspiciatis ratione
                    doloribus
                    numquam consequuntur blanditiis!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi laboriosam aliquid accusantium neque
                    corrupti
                    aspernatur amet, nesciunt facere necessitatibus ullam doloribus quam cum! Ab magni ad non
                    laudantium, rem
                    similique!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, architecto ullam, sed illum,
                    harum sint
                    et expedita modi dignissimos maxime voluptatum officiis quam nobis illo obcaecati dolores enim iure
                    facilis.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed qui amet mollitia delectus maiores
                    deleniti,
                    quod alias officiis tempore illo similique dolorum provident veniam dignissimos unde quos nam quas
                    sunt!
                </p>
        </div>
        <div class="col-lg-6">
            <img src="images/Motores bolombolo.png" alt="" class="img-fluid">
        </div>
    </div>
    <div class="row p-2">
        <div class="col-lg-6">
            <img src="img/interior2.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 col-sm-12 col-12 m-auto">
            <h3 class="text-center">Misión</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab praesentium nihil quod beatae et
                    consequuntur
                    ipsum qui necessitatibus quisquam quibusdam? Saepe dignissimos eius blanditiis quod perspiciatis
                    officia,
                    aspernatur culpa ullam.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi eveniet atque esse accusamus
                    expedita, quae
                    iure veritatis tenetur. Asperiores sunt eveniet iste sed distinctio tempore hic, molestias
                    accusantium eos
                    quo!
                </p>
        </div>

    </div>
    <div class="row p-2align-middle">
        <div class="col-lg-6 col-sm-12 col-12  m-auto">
            <h3 class="text-center">Visión</h2>
                <p class="">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, voluptatibus? Laboriosam illo
                    voluptates
                    dolore tempore dignissimos, aliquam officiis perspiciatis asperiores eos maxime! Odio, quas.
                    Officiis
                    recusandae odit vero molestias ipsa.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo eius autem ex nam quasi dolores
                    cum
                    reprehenderit explicabo, libero cumque amet illum dignissimos aspernatur aperiam laborum
                    tempore, harum
                    officiis minima.
                </p>
        </div>
        <div class="col-lg-6">
            <img src="img/vision.png" alt="" class="img-fluid">
        </div>
    </div>
    <h1 id="vehiculos" class="Titulos m-3">Vehículos Disponibles</h1>
    <div class="row m-5 d-flex justify-content-center">
        @foreach($vehiculos as $vehiculo)
        <div class="col-lg-4 col-md-6 col-xs-12 col-12">
            <div class="card mb-3 vh">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/{{$vehiculo->foto}}" alt="..." class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"> {{$vehiculo->marca}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Color: {{$vehiculo->color}}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Modelo: {{$vehiculo->modelo}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <h1 id="empleados" class="Titulos m-3 ">Nuestros Empleados</h1>
    <div class="row m-5 d-flex justify-content-center">
        @foreach($empleados as $empleado)
        <div class="col-lg-3 col-md-4">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/{{$empleado->avatar}}" alt="..." class="img-fluid rounded-circle vh">
                </div>
                <div class="col-md-8">
                    <h5>{{$empleado->name}} {{$empleado->lastName}}</h5>
                    <h6 class="mb-2 text-muted"> {{$empleado->cargo}}</h6>
                    <h6 class="mb-2 text-muted"> {{$empleado->area}}</h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Ultimas noticias -->
    <h1 class="Titulos m-3" id="noticias">Noticias de nuestras marcas asociadas</h1>
    <div class="row">

        <div class="col-lg-4 ">
            <a id="twitter" class="twitter-timeline" data-tweet-limit="1" href="https://twitter.com/ToyotaLatino">Tweets
                by
                Toyota</a>
        </div>

        <div class="col-lg-4 ">
            <a class="twitter-timeline" data-tweet-limit="1" href="https://twitter.com/AudiLatam">Tweets by
                AudiLatam</a>
        </div>

        <div class="col-lg-4">
            <a class="twitter-timeline" data-tweet-limit="1" href="https://twitter.com/ManadaJeep">Tweets by Jeep
                Colombia</a>
        </div>
    </div>
</div>
@endsection