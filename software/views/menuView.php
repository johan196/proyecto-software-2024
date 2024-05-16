<?php

class menuView
{
    

    function showMenu()
    {
?>
    
?>
         <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Corporación Tapia Pisá</title>
    <link rel="shortcut icon" href="img/favicon/apple-icon-152x152.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6c/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
</head>

<body>
    <header>
        <nav>
            <a href="#">Inicio</a>
            <a href="#">Acerca de</a>
            <a href="#">Portafolio</a>
            <a href="#">Servicios</a>
            <a href="#">Contacto</a>
            <a href="logueo.php">Ingresar</a>
        </nav>
        <section class="textos-header">
            <h1>Corporación Tapia Pisá.</h1>
            <h2>Eventos culturales y deportivos.</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Conocenos</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/TEORAMA.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3>MISIÓN</h3>
                    <p> La Corporación Tapia Pisá tiene como misión generar proyectos y actividades, en torno a la cultura, las artes y sus diversas disciplinas, así como eventos deportivos, con la finalidad de propiciar espacios para la participación ciudadana en torno a la cultura y el deporte, articulándose con agentes y organizaciones pertinentes en la materia, contribuyendo al desarrollo y crecimiento de la cultura en la subregión de El Catatumbo.</p>
                    <h3>VISIÓN</h3>
                    <p>La visión de la Corporación Tapia Pisá es ser una organización cultural con presencia en el territorio, que conecte y promueva manifestaciones culturales, artísticas y patrimoniales de la subregión de El Catatumbo, a través de la formulación de proyectos que tengan injerencia en las comunidades y contribuyan con la preservación del patrimonio cultural.</p>
                </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Portafolio</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="img/IMAGEN1.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/IMAGEN2.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro Trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/IMAGEN3.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro Trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/IMAGEN4.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro Trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/IMAGEN5.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro Trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/IMAGEN6.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro Trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/IMAGEN7.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro Trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/IMAGEN8.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro Trabajo</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clientes contenedor">
            <h2 class="titulo">Que Dicen Nuestros Clientes</h2>
            <div class="cards">
                <div class="card">
                    <img src="img/face1.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Natalia</h4>
                        <p>¡El evento estuvo genial! Conocimos paisajes increíbles y culturas diversas en el camino!</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/face2.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Lorena</h4>
                        <p>¡Los juegos de parques en el parque son puro entretenimiento al aire libre! Risas, competencias amistosas y unión comunitaria</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Nuestros Servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/RUTA.jpg" alt="">
                        <h3>RUTA CICLISTICA</h3>
                        <p></p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/DADOS.jpg" alt="">
                        <h3>PARQUES AL PARQUE</h3>
                        <p></p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/MARATON.jpg" alt="">
                        <h3>MARATON</h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Telefono</h4>
                <p>3118083900</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>corporaciontapiapisa@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Ubicacion</h4>
                <p>Ocaña, Norte de Santander, Colombia</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Corporación Tapia Pisá</h2>
    </footer>
</body>

</html>
<?php
    }
}
?>