<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TJ2PZ8R');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WHARTON | EMPREDIMIENTO E INNOVACIÓN</title>

    <link rel="shortcut icon" type="image/png" href="../business-analytics/assets/img/favicon.ico" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../assets/css/stylesheet.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css"> <!-- Material Design -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJ2PZ8R"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Getting the querystring -->
    <?php
        $queryStringArray = array();
        foreach ($_GET as $key => $value) {
            $parameter = $key . "=" . $value;
            array_push($queryStringArray, $parameter);
        }
        $queryString = implode("&", $queryStringArray);
    ?>

    <!-- Getting the current url (used in the retURL in the form.) -->
    <?php
        if (isset($_SERVER["HTTPS"]) && ($_SERVER["HTTPS"] == "on" || $_SERVER["HTTPS"] == 1) || isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && $_SERVER["HTTP_X_FORWARDED_PROTO"] == "https") {
            $protocol = "https://";

        } else {
            $protocol = "http://";
        }

        $current_link = $protocol . $_SERVER["HTTP_HOST"] . parse_url($_SERVER["REQUEST_URI"])['path'];

    ?>


    <!-- Header Fixed -->
    <header class="header">
        <div class="header-container">
            <div class="header-logos">
                <img class="white lazyload" data-src="../business-analytics/assets/img/svg/wharton-execed-white-LG.svg" alt="Wharton">
                <img class="blue lazyload" data-src="../business-analytics/assets/img/svg/wharton-execed-blue-LG.svg" alt="Executive-Education">
            </div>

            <div class="text-button desktop robotoBo fs20 blanco">CERTIFICADO ONLINE</div>

            <div class="header-button">
                <a class="robotoBo fs14 blanco">
                    MÁS INFORMACIÓN
                </a>
            </div>
        </div>
    </header>
    <!-- Body -->
    <div class="space"></div>
    <div class="text-float movil robotoBo fs20 blanco">CERTIFICADO ONLINE</div>
    <!-- Section Hero Image -->
    <div class="hero-container banner-entrepreneurship">
        <div class="hero-title-cont">
            <div class="hero-title">
                <!-- <div class="banner robotoRe fs16 dorado73">Aplica hoy al programa</div> -->
                <div class="title robotoBo fs26 blanco" style="border-bottom: 1px solid white">
                    Programa de Aceleración del Emprendimiento: 
                    <span class="robotoRe">Escala tu negocio</span>
                </div>
                <div class="subtitle robotoRe fs18 blanco">
                    En este curso, el ganador del mejor pitch obtendrá una inversión de capital 
                    de $25,000 dólares. El segundo lugar será reconocido con $10,000 dólares.
                </div>
                <div class="apply">
                    <a class="robotoRe fs15" target="_blank" rel="noopener noreferrer">
                        <i>*Aplican términos y condiciones</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Form -->
    <div class="formulario-container">
        <div class="formulario-cont">
            <div class="form" id="form">
                <div class="form-title robotoBo fs18 azul41">Solicitar información del curso</div>
                <!-- Form Element -->
                <form class="form-cont" action="http://www2.emeritus.org/l/134351/2019-05-17/53j9xg" id="fordesk">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="robotoRe fs16 gris91 mdl-textfield__input" type="text" id="first_name"
                            name="first_name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" style="text-transform: capitalize;" required>
                        <label class="robotoRe fs16 gris91 mdl-textfield__label" for="first_name">Nombre(s)</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="robotoRe fs16 gris91 mdl-textfield__input" type="text" id="last_name"
                            name="last_name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" style="text-transform: capitalize;" required>
                        <label class="robotoRe fs16 gris91 mdl-textfield__label" for="last_name">Apellido(s)</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="robotoRe fs16 gris91 mdl-textfield__input" type="email" id="email" name="email"
                            pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$" required>
                        <label class="robotoRe fs16 gris91 mdl-textfield__label" for="email">Email</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <select id="country" name="Country" class="mdl-textfield__input Country" required>
                        </select>
                        <label class="robotoRe fs16 gris91 mdl-textfield__label" for="country">País</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <select id="work_experience" name="work_experience"
                            class="robotoRe fs16 gris91 mdl-textfield__input work_experience" required>
                            <option value=""></option>
                            <option value="Less than 5 Years">Menos de 5 años</option>
                            <option value="5-10 Years">5-10 años</option>
                            <option value="10-15 Years">10-15 años</option>
                            <option value="15-20 Years">15-20 años</option>
                            <option value="> 20 Years">&gt; 20 años</option>
                        </select>
                        <label class="robotoRe fs16 gris91 mdl-textfield__label" for="work_experience">Experiencia
                            Profesional</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="robotoRe fs16 gris91 mdl-textfield__input" type="tel" id="mobile" name="mobile"
                            maxlength="15" minlength="5" onkeypress="return valida(event)" pattern="[0-9]+" required>
                        <label class="robotoRe fs16 gris91 mdl-textfield__label" for="mobile">Teléfono Movíl</label>
                    </div>
                    <!-- GDPR checkbox -->
                    <div class="">
                        <div class="form-group" id="gdpr-consent" style="display:none;">
                            <label class="checkbox-inline fs14 robotoRe negro23">
                                <input type="checkbox" value="Yes I Agree" name="agree" id="agree">
                                Me gustaría recibir un correo electrónico y otras comunicaciones de EMERITUS y
                                Sus socios universitarios sobre este curso y otros cursos relevantes.
                            </label>
                        </div>
                    </div>
                    <!-- End checkbox -->
                    <div class="button-container">
                        <input type="hidden" name="lead_source" id="lead_source" value="">
                        <input type="hidden" name="utm_source" id="utm_source" value="">
                        <input type="hidden" name="utm_medium" id="utm_medium" value="">
                        <input type="hidden" name="utm_term" id="utm_term" value="">
                        <input type="hidden" name="utm_content" id="utm_content" value="">
                        <input type="hidden" name="utm_campaign" id="utm_campaign" value="">
                        <input type="hidden" name="browser" id="browser" value="">
                        <input type="hidden" name="course" id="course" value="Wharton - Entrepreneurship">
                        <input type="hidden" name="retURL" value="<?php echo $current_link.'Thanks.php' ?>">
                        <button class="robotoBo fs16 blanco" type="submit" id="btn-download-brochure">
                            DESCARGAR EL FOLLETO
                            <img class="lazyload" data-src="../assets/img/svg/icon-descargar.svg" alt="Download">
                        </button>
                    </div>
                </form>
                <div class="private-data">
                    <div class="data robotoRe fs16 negro3D">
                        Tu información no se compartirá con nadie
                    </div>
                    <div>
                        <a class="robotoBo fs16 azul84" href="https://latam.emeritus.org/politica-de-privacidad" target="_blank" rel="noopener noreferrer">
                            Política de Privacidad
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Details of program -->
    <div class="detalles-container">
        <div class="detalles-cont">
            <div class="detalle">
                <div class="detalle-img">
                    <img class="lazyload" data-src="../assets/img/svg/icono-inicio.svg" alt="">
                </div>
                <div class="detalles">
                    <div class="text robotoRe fs20 grisD9">
                        INICIA EL
                    </div>
                    <div class="fechas-precio robotoBo fs20 grisD9">
                        28 de agosto del 2019
                    </div>
                    <div class="notas robotoRe fs14 grisD9">
                        Nota: la fecha para mandar tu solicitud se extendió hasta el 27 de agosto de 2019.
                    </div>
                </div>
            </div>
            <div class="detalle">
                <div class="detalle-img">
                    <img class="lazyload" data-src="../assets/img/svg/icono-duracion.svg" alt="">
                </div>
                <div class="detalles">
                    <div class="text robotoRe fs20 grisD9">
                        DURACIÓN
                    </div>
                    <div class="fechas-precio robotoBo fs20 grisD9">
                        3 meses, en línea
                    </div>
                    <div class="notas robotoRe fs14 grisD9">
                        En español
                        <br>
                        3–4 horas por semana
                    </div>
                </div>
            </div>
            <div class="detalle">
                <div class="detalle-img">
                    <img class="lazyload" data-src="../assets/img/svg/icono-cuota.svg" alt="">
                </div>
                <div class="detalles">
                    <div class="text robotoRe fs20 grisD9">
                        CUOTA DEL PROGRAMA
                    </div>
                    <div class="fechas-precio robotoBo fs20 grisD9">
                        $1,950 dólares
                    </div>
                    <div class="notas robotoRe fs14 amarillo73">
                        <a class="amarillo73" href="#ex2" rel="modal:open">
                            <img class="lazyload" data-src="../assets/img/svg/info-circle-solid.svg" alt="información">
                            Pagos flexibles disponibles
                        </a>
                    </div>
                    <div id="ex2" class="modal modal-pagos-flexibles">
                        <div class="modal-pagos-title fs20 robotoBo negro23">
                            Plan de pagos flexibles
                        </div>
                        <div class="modal-pagos-descripcion fs14 robotoBo negro23">
                            Esta opción permite al alumno pagar la cuota del curso en parcialidades.
                            Está disponible en la solicitud de inscripción y deberá seleccionarse antes
                            de realizar el pago.
                        </div>
                        <div class="modal-pagos-subtitle robotoRe fs16 negro46">
                            Las siguientes opciones de pago están disponibles para el
                            <span class="robotoBo">Curso de Emprendimiento e Innovación para la Aceleración de Negocios: Entrepreneurship:</span>
                        </div>
                        <div class="pagos">
                            <div class="pagos-title fs18 robotoBo gris70">
                                Pago total
                            </div>
                            <div class="precio-pago fs14 robotoRe negro23">
                                <div class="dot-pagos"></div>
                                La cuota completa del curso <span class="robotoBo">$1,950
                                    USD</span> .
                            </div>
                        </div>
                        <div class="pagos">
                            <div class="pagos-title fs18 robotoBo gris70">
                                Pago en dos parcialidades
                            </div>
                            <div class="precio-pago fs14 robotoRe negro23">
                                <div class="dot-pagos"></div>
                                La primera parcialidad de <span class="robotoBo">$,1055 USD</span>
                                se paga al inicio.
                            </div>
                            <div class="precio-pago">
                                <div class="dot-pagos"></div>
                                La segunda parcialidad de <span class="robotoBo">$935 USD</span>
                                a pagar del 22 de septiembre del 2019.
                            </div>
                        </div>
                        <div class="pagos no-border">
                            <div class="pagos-title fs18 robotoBo gris70">
                                Pago en tres parcialidades
                            </div>
                            <div class="precio-pago fs14 robotoRe negro23">
                                <div class="dot-pagos"></div>
                                Inmediato <span class="robotoBo">$778 USD</span>.
                            </div>
                            <div class="precio-pago">
                                <div class="dot-pagos"></div>
                                La segunda parcialidad de <span class="robotoBo">$635 USD</span>
                                a pagar del 22 de septiembre del 2019.
                            </div>
                            <div class="precio-pago">
                                <div class="dot-pagos"></div>
                                La tercera parcialidad se paga a más tardar el 07 de octubre del 2019
                                <span class="robotoBo">$635 USD.</span>
                            </div>
                        </div>
                    </div> <!-- modal-pagos-flexibles -->
                </div>
            </div>
        </div>
    </div>
    <!-- Section Information of program -->
    <div class="information-container">
        <div class="information-title robotoRe fs24 azul84">
            ¿Por qué inscribirte al programa de 
            <br>
            <span class="robotoBo">Emprendimiento de Wharton?</span>
        </div>
        <div class="information-description robotoRe fs16 negro23">
            Muchas organizaciones expresan que las personas son su activo más importante. Entonces 
            ¿cómo pueden los profesionales de RH continuar ganando como socios estratégicos de negocio 
            gestionando a su gente de manera más efectiva y explotando la analítica de datos? Midiendo, 
            luego gestionando. Sin embargo...
        </div>
    </div>
    <div class="information-cont container-fluid" style="background-color: #F3F3F3;">
        <div class="row">
            <div class="title-information robotoBo fs20 negro23 col-md-12">
                Tres de las razones más comunes por las que una startup fracasa:
            </div>
        </div>
        <div class="row">
            <div class="information col-sm-4">
                <div class="number robotoBo fs42 azul84">
                    <span class="robotoRe fs19">#</span>1
                </div>
                <div class="description robotoBo fs16 gris7D">
                    Vender un producto o servicio que nadie quiere
                </div>
                <div class="source robotoRe fs14 gris7D">FUENTE: FORBES</div>
            </div>
            <div class="information col-sm-4">
                <div class="number robotoBo fs42 azul84">
                    <span class="robotoRe fs19">#</span>2
                </div>
                <div class="description robotoBo fs16 gris7D">
                    Modelo de negocio equivocado y no escalable
                </div>
                <div class="source robotoRe fs14 gris7D">FUENTE: FORBES</div>
            </div>
            <div class="information col-sm-4">
                <div class="number robotoBo fs42 azul84">
                    <span class="robotoRe fs19">#</span>3
                </div>
                <div class="description robotoBo fs16 gris7D">
                    Falta de financiamiento adecuado para impulsar el crecimiento
                </div>
                <div class="source robotoRe fs14 gris7D">FUENTE: FORBES</div>
            </div>
        </div>
    </div>
    <!-- Section Experience of journey -->
    <div class="experience-container">
        <div class="experience-description entrepreneurship-description robotoBo fs20 negro23">
            Incrementa dramáticamente las probabilidades de éxito de tu negocio aprendiendo a:
        </div>
        <div class="experience-list container-fluid">
            <div class="row" style="width: 100%; margin: 0 auto; max-width: 780px;">
                <div class="list col-md-6">
                    <ul>

                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">
                                Escoger el modelo de negocio adecuado
                            </span>
                        </li>

                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">
                                Construir un buen equipo
                            </span>
                        </li>

                    </ul>
                </div>
                <div class="list col-md-6">
                    <ul>

                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">
                                Elegir un método adecuado de financiamiento
                            </span>
                        </li>

                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">
                                Mejorar las ventas y escalar el negocio
                            </span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        
        <div class="button-apply-now">
            <a class="btn-apply-now robotoBo fs16 blanco">
                DESCARGA EL FOLLETO
            </a>
        </div>

        <div class="experience-icons container-fluid">
            <div class="row">
                <div class="icons-title col-md-12 robotoBo fs24 azul84">
                    Tu experiencia de aprendizaje
                </div>
            </div>
            <div class="row">
                <div class="icons col-md-3 col-sm-6">
                    <div class=row>
                        <div class="icons-img entrepreneurship-img col-sm-12 col-2">
                            <img class="lazyload" data-src="../assets/img/svg/icono-tu-idea-de-negocio.svg" alt="Contexto">
                        </div>
                        <div class="icons-description col-sm-12 col-10">
                            <div class="title robotoBo fs20 negro23">
                                Tu idea de negocio
                            </div>
                            <div class="subtitle robotoRe fs16 negro23">
                                Independientemente de su grado de madurez
                            </div>
                        </div>
                    </div>
                </div>
                <div class="icons col-md-3 col-sm-6">
                    <div class=row>
                        <div class="icons-img entrepreneurship-img col-sm-12 col-2">
                            <img class="lazyload" data-src="../assets/img/svg/icono-ejemplos-de-la-vida-real.svg" alt="Ejemplos-del-mundo-real">
                        </div>
                        <div class="icons-description col-sm-12 col-10">
                            <div class="title robotoBo fs20 negro23">
                                Ejemplos de la vida real
                            </div>
                            <div class="subtitle robotoRe fs16 negro23">
                                Impartidos a través de una mezcla de clases grabadas y en vivo, 
                                con profesores e invitados que puedes ver en línea
                            </div>
                        </div>
                    </div>
                </div>
                <div class="icons col-md-3 col-sm-6">
                    <div class=row>
                        <div class="icons-img entrepreneurship-img col-sm-12 col-2">
                            <img class="lazyload" data-src="../assets/img/svg/icono-foros-de-discusión.svg" alt="Aplicación-al-conjunto-de-datos">
                        </div>
                        <div class="icons-description col-sm-12 col-10">
                            <div class="title robotoBo fs20 negro23">
                                Foros de discusión
                            </div>
                            <div class="subtitle robotoRe fs16 negro23">
                                Moderados por expertos en la materia
                            </div>
                        </div>
                    </div>
                </div>
                <div class="icons col-md-3 col-sm-6">
                    <div class=row>
                        <div class="icons-img entrepreneurship-img col-sm-12 col-2">
                            <img class="lazyload" data-src="../assets/img/svg/icono-inversión-de-capital.svg" alt="Reportes-de-aprendizaje">
                        </div>
                        <div class="icons-description col-sm-12 col-10">
                            <div class="title robotoBo fs20 negro23">
                                Inversión de capital para los pitches ganadores
                            </div>
                            <div class="subtitle robotoRe fs16 negro23">
                                Para los dos mejores pitches… y todos mejoran en el proceso
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Themes of the program -->
    <div class="themes-program-container">
        <div class="themes-program-title robotoBo fs24 azul84">
            Temas del programa
        </div>
        <div class="themes-container container-fluid">
            <div class="row">
                <div class="theme-cont col-md-12">
                    <div class="row">
                        <div class="theme col-md-12" style="max-width: 700px;">
                            <div class="row">
                                <div class="number robotoBo fs16 negro23 col-md-2 col-3">
                                    Módulo 1
                                </div>
                                <div class="title robotoRe fs16 negro23 col-md-10 col-9">
                                    Emprendimiento basado en evidencias
                                </div>
                            </div>
                        </div>
                        <div class="theme col-md-12" style="max-width: 700px;">
                            <div class="row">
                                <div class="number robotoBo fs16 negro23 col-md-2 col-3">
                                    Módulo 2
                                </div>
                                <div class="title robotoRe fs16 negro23 col-md-10 col-9">
                                    Armar el equipo apropiado
                                </div>
                            </div>
                        </div>
                        <div class="theme col-md-12" style="max-width: 700px;">
                            <div class="row">
                                <div class="number robotoBo fs16 negro23 col-md-2 col-3">
                                    Módulo 3
                                </div>
                                <div class="title robotoRe fs16 negro23 col-md-10 col-9">
                                    Abogados, asesores y mentores
                                </div>
                            </div>
                        </div>
                        <div class="theme col-md-12" style="max-width: 700px;">
                            <div class="row">
                                <div class="number robotoBo fs16 negro23 col-md-2 col-3">
                                    Módulo 4
                                </div>
                                <div class="title robotoRe fs16 negro23 col-md-10 col-9">
                                    Modelos de negocio y valor del tiempo de vida del cliente
                                </div>
                            </div>
                        </div>
                        <div class="theme col-md-12" style="max-width: 700px;">
                            <div class="row">
                                <div class="number robotoBo fs16 negro23 col-md-2 col-3">
                                    Módulo 5
                                </div>
                                <div class="title robotoRe fs16 negro23 col-md-10 col-9">
                                    Captación de clientes y generación de demanda
                                </div>
                            </div>
                        </div>
                        <div class="theme col-md-12" style="max-width: 700px;">
                            <div class="row">
                                <div class="number robotoBo fs16 negro23 col-md-2 col-3">
                                    Módulo 6
                                </div>
                                <div class="title robotoRe fs16 negro23 col-md-10 col-9">
                                    Precio y estrategias de distribución
                                </div>
                            </div>
                        </div>
                        <div class="theme col-md-12" style="max-width: 700px;">
                            <div class="row">
                                <div class="number robotoBo fs16 negro23 col-md-2 col-3">
                                    Módulo 7
                                </div>
                                <div class="title robotoRe fs16 negro23 col-md-10 col-9">
                                    Prepararse para el crecimiento
                                </div>
                            </div>
                        </div>
                        <div class="theme col-md-12" style="max-width: 700px;">
                            <div class="row">
                                <div class="number robotoBo fs16 negro23 col-md-2 col-3">
                                    Módulo 8
                                </div>
                                <div class="title robotoRe fs16 negro23 col-md-10 col-9">
                                    Financiamiento: fondos y valoración
                                </div>
                            </div>
                        </div>
                        <div class="theme col-md-12" style="max-width: 700px;">
                            <div class="row">
                                <div class="number robotoBo fs16 negro23 col-md-2 col-3">
                                    Módulo 9
                                </div>
                                <div class="title robotoRe fs16 negro23 col-md-10 col-9">
                                    Financiamiento: capital de riesgo vs. canales de financiamiento 
                                    alternativos
                                </div>
                            </div>
                        </div>
                        <div class="theme col-md-12" style="max-width: 700px;">
                            <div class="row">
                                <div class="number robotoBo fs16 negro23 col-md-2 col-3">
                                    Módulo 10
                                </div>
                                <div class="title robotoRe fs16 negro23 col-md-10 col-9">
                                    Elementos de un pitch
                                </div>
                            </div>
                        </div>
                        <div class="theme col-md-12" style="max-width: 700px;">
                            <div class="row">
                                <div class="number robotoBo fs16 negro23 col-md-2 col-3">
                                    Módulo 11
                                </div>
                                <div class="title robotoRe fs16 negro23 col-md-10 col-9">
                                    Concurso de planes de negocio
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button-apply-now">
            <a class="btn-apply-now robotoBo fs16 blanco">
                DESCARGA EL FOLLETO
            </a>
        </div>
    </div>
    <!-- Section Who is this program? -->
    <div class="for-who-container" style="background-color: #FFFFFF;">
        <div class="for-who-title robotoBo fs24 azul84">
            Entrevistas y ejemplos de la industria
        </div>
        <div class="for-who-subtitle robotoBo fs18 negro18" style="width: 100%; margin: 15px auto; max-width: 750px; text-align: center;">
            Este programa de Wharton comprende entrevistas a profundidad con fundadores 
            de empresas y representantes de startups y de firmas de capital de riesgo.
        </div>
        <div class="for-who-list container-fluid">
            <div class="row" style="width: 100%; margin: 0 auto; max-width: 490px;">
                <div class="list description-list col-sm-6">
                    <ul>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Big Ass Fans</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Forerunner Ventures</span>
                        </li>
                    </ul>
                </div>
                <div class="list description-list col-sm-6">
                    <ul>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Greylock Partners</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Stringr</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="for-who-subtitle robotoRe fs18 negro18" style="width: 100%; margin: 30px auto 15px; max-width: 750px; text-align: center;">
            El programa en línea también incluye ejemplos de startups y de compañías 
            establecidas que alguna vez fueron startups. Además, cubre múltiples 
            industrias, como las de bienes de consumo empaquetados, comercio 
            electrónico y tecnología.
        </div>
        <div class="for-who-list container-fluid">
            <div class="row" style="width: 100%; margin: 0 auto; max-width: 840px;">
                <div class="list col-sm-4">
                    <ul>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Adobe</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Intel</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Qualcomm</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Aerocardal</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Harry's Blades</span>
                        </li>
                    </ul>
                </div>
                <div class="list col-sm-4">
                    <ul>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Dollar Shave Club</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Jet.com</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">The Walt Disney Company</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Bandar Foods</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Silicon Valley Bank</span>
                        </li>
                    </ul>
                </div>
                <div class="list col-sm-4">
                    <ul>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">IBM</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Kickstarter</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Xiami</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Belle-V Kitchen</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Wholly Moly</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="robotoRe fs14 negro18" style="width: 100%; margin: 30px auto 0; max-width: 750px; text-align: center;">
            <i>Nota: Todos los productos y los nombres de las compañías son marcas o 
                marcas registradas de sus respectivos propietarios. Su uso no implica 
                ninguna afiliación o apoyo.</i>
        </div>
    </div>
    <!-- Section Professor -->
    <div class="professor-container">
        <div class="professor-title robotoBo fs24 azul84">
            Profesorado
        </div>
        <div class="professor-slider-container">
            <div class="professor">
                <div class="professor-img">
                    <img class="lazyload" data-src="../assets/img/png/Ethan-Mollick.png" alt="Ethan-Mollick">
                </div>
                <div class="professor-description">
                    <div class="name robotoBo fs18 negro23">
                        Ethan Mollick
                    </div>
                    <div class="info robotoRe fs16 negro23">
                        Profesor Adjunto de Administración
                    </div>
                </div>
            </div>
            <div class="professor">
                <div class="professor-img">
                    <img class="lazyload" data-src="../assets/img/jpg/Kartik-Hosanagar.jpg" alt="Kartik-Hosanagar">
                </div>
                <div class="professor-description">
                    <div class="name robotoBo fs18 negro23">
                        Kartik Hosanagar
                    </div>
                    <div class="info robotoRe fs16 negro23">
                        Profesor John C. Hower; Profesor de Operaciones, Información y Decisiones
                    </div>
                </div>
            </div>
            <div class="professor">
                <div class="professor-img">
                    <img class="lazyload" data-src="../assets/img/jpg/Lori-Rosenkopf.jpg" alt="Lori-Rosenkopf">
                </div>
                <div class="professor-description">
                    <div class="name robotoBo fs18 negro23">
                        Lori Rosenkopf
                    </div>
                    <div class="info robotoRe fs16 negro23">
                        Profesora Simon and Midge Palley; Docente de Administración, Vicerrectora 
                        y Directora División de Estudiantes
                    </div>
                </div>
            </div>
            <div class="professor">
                <div class="professor-img">
                    <img class="lazyload" data-src="../assets/img/jpg/David-Hsu.jpg" alt="David-Hsu">
                </div>
                <div class="professor-description">
                    <div class="name robotoBo fs18 negro23">
                        David Hsu
                    </div>
                    <div class="info robotoRe fs16 negro23">
                    Director Académico Richard A. Sapp Profesor; Profesor de gestion
                    </div>
                </div>
            </div>
            <div class="professor">
                <div class="professor-img">
                    <img class="lazyload" data-src="../assets/img/jpg/Karl-Ulrich.jpg" alt="Karl-Ulrich">
                </div>
                <div class="professor-description">
                    <div class="name robotoBo fs18 negro23">
                        Karl Ulrich
                    </div>
                    <div class="info robotoRe fs16 negro23">
                        Profesor CIBC Dotado; Profesor de Operaciones, Información y Decisiones; 
                        Profesor de gestión; y vicedecano de Emprendimiento e Innovación.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Certificate -->
    <div class="certificate-container">
        <div class="certificate-cont container-fluid">
            <div class="row">
                <div class="certificate-info col-md-6">
                    <div class="certificate-title robotoBo fs24 azul84">
                        Certificado
                    </div>
                    <div class="certificate-subtitle robotoRe fs20 negro23">
                        Obtén un certificado digital de Wharton School una vez que 
                        termines tu programa en línea de manera exitosa. 
                    </div>
                </div>
                <div class="col-md-6 certificate-img">
                    <a href="#ex1" rel="modal:open">
                        <img class="lazyload" data-src="../assets/img/png/Certificado-Entreprenuership.png" alt="Certificado">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 certificate-note robotoRe fs16 gris7D">
                        <i>
                            Nota: Tras haber completado el programa en línea con éxito, tu certificado 
                            digital verificado te será enviado vía correo electrónico con el nombre 
                            que usaste al registrarte para el programa. Todas las imágenes del 
                            certificado son solo para propósitos ilustrativos y pueden estar sujetas 
                            a cambios a discreción de The Wharton School. 
                            <br>
                            <br>
                            NOTA: Este programa en línea no otorga créditos académicos o un título 
                            de la Wharton School, de la Universidad de Pensilvania
                        </i>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal HTML embedded directly into document -->
    <div id="ex1" class="modal modal-certificate">
        <img src="../assets/img/jpg/certificate-entrepreneurship.jpg" alt="Certificado">
    </div>
    <!-- Section Apply Now / Felxible Payments -->
    <div class="apply-now-container">
        <div class="button">
            <a class="robotoBo fs16 azul84" href="http://bit.ly/2w4kQoA" target="_blank" rel="noopener noreferrer">
                APLICA AHORA
            </a>
        </div>
        <div class="apply-now-title robotoBo fs24">
            Cupo limitado. Aplica lo antes posible.
        </div>
        <div class="apply-now-subtitle robotoRe fs18">
            Opciones de pagos flexibles. 
            <a class="amarillo73" href="#ex2" rel="modal:open">
                Haz clic aquí para saber más.
            </a>
        </div>
    </div>
    <!-- Section Colaboration -->
    <div class="colaboration-container">
        <div class="logo-emeritus">
            <img class="lazyload" data-src="../assets/img/svg/emeritus-green-logo.svg" alt="Certificado">
        </div>
        <div class="description-emeritus robotoRe fs14 negro23">
            Wharton Executive Education colabora con el proveedor de educación en línea 
            EMERITUS Institute of Management para ofrecer un portafolio de cursos en 
            línea de alto impacto. Con más de 16,000 estudiantes de más de 132 países, 
            EMERITUS imparte programas de administración en línea mediante un modelo 
            de aprendizaje con clases en vivo, dinámicas de aprendizaje en grupo y 
            tareas con calificación. Gracias a esta colaboración, tenemos la posibilidad 
            de ofrecer la educación de clase mundial por la que es conocida Wharton 
            School, a través de un ambiente digital atractivo e interactivo.
        </div>
    </div>

    <!-- Javascript -->
    <script type="text/javascript" src="assets/js/lazysizes.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../assets/js/form-input-manager.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="../assets/js/logs.js"></script>
    <script type="text/javascript" src="../assets/js/utm_populate.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script type="text/javascript" src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>

</html>