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
    <title>WHARTON | PEOPLE ANALYTICS</title>

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
    <div class="hero-container">
        <div class="hero-title-cont">
            <div class="hero-title">
                <!-- <div class="banner robotoRe fs16 dorado73">Aplica hoy al programa</div> -->
                <div class="title robotoBo fs26 blanco">
                    Administración e Inteligencia 
                    <br>
                    <span class="robotoRe">
                        <i>Analítica de Recursos Humanos</i>
                    </span>
                </div>
                <!-- <div class="subtitle robotoRe fs18 blanco"><i>People Analytics</i> -->
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
                <form class="form-cont" action="http://www2.emeritus.org/l/134351/2019-04-24/4ypz77" id="fordesk">
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
                        <input type="hidden" name="course" id="course" value="Wharton - People Analytics">
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
                        14 de noviembre del 2019
                    </div>
                    <div class="notas robotoRe fs14 grisD9">
                        Nota: la fecha para mandar tu solicitud se extendió hasta el 14 de noviembre de 2019.
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
                        2 meses, en línea
                    </div>
                    <div class="notas robotoRe fs14 grisD9">
                        En español
                        <br>
                        4–6 horas por semana
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
                        <div class="modal-pagos-title fs20 openBo negro28">
                            Plan de pagos flexibles
                        </div>
                        <div class="modal-pagos-descripcion fs14 robotoBo negro23">
                            Esta opción permite al alumno pagar la cuota del curso en parcialidades.
                            Está disponible en la solicitud de inscripción y deberá seleccionarse antes
                            de realizar el pago.
                        </div>
                        <div class="modal-pagos-subtitle robotoRe fs16 negro46">
                            Las siguientes opciones de pago están disponibles para el
                            <span class="robotoBo">Curso de Administración e Inteligencia Analítica de Recursos Humanos: People Analytics:</span>
                        </div>
                        <div class="pagos">
                            <div class="pagos-title fs18 openBo gris70">
                                Pago total
                            </div>
                            <div class="precio-pago fs14 robotoRe negro23">
                                <div class="dot-pagos"></div>
                                La cuota completa del curso <span class="robotoBo">$1,950
                                    USD</span> .
                            </div>
                        </div>
                        <div class="pagos">
                            <div class="pagos-title fs18 openBo gris70">
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
                                a pagar del 9 de diciembre del 2019.
                            </div>
                        </div>
                        <div class="pagos no-border">
                            <div class="pagos-title fs18 openBo gris70">
                                Pago en tres parcialidades
                            </div>
                            <div class="precio-pago fs14 robotoRe negro23">
                                <div class="dot-pagos"></div>
                                Inmediato <span class="robotoBo">$778 USD</span>.
                            </div>
                            <div class="precio-pago">
                                <div class="dot-pagos"></div>
                                La segunda parcialidad de <span class="robotoBo">$635 USD</span>
                                a pagar del 9 de diciembre del 2019.
                            </div>
                            <div class="precio-pago">
                                <div class="dot-pagos"></div>
                                La tercera parcialidad se paga a más tardar el 24 de diciembre del 2019
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
        <div class="information-title robotoBo fs24 azul84">
            No puedes gestionar lo que no puedes medir
        </div>
        <div class="information-description robotoRe fs16 negro23">
            Muchas organizaciones expresan que las personas son su activo más importante. Entonces 
            ¿cómo pueden los profesionales de RH continuar ganando como socios estratégicos de negocio 
            gestionando a su gente de manera más efectiva y explotando la analítica de datos? Midiendo, 
            luego gestionando. Sin embargo...
        </div>
    </div>
    <div class="information-cont container-fluid">
        <div class="row">
            <div class="information col-sm-4">
                <div class="number robotoBo fs42 azul84">
                    5<span class="robotoRe fs19">%</span>
                </div>
                <div class="description robotoBo fs16 gris7D">
                    Solo el 5 por ciento de las inversiones en Big Data se destinan a RH. Esto 
                    es, al grupo que usualmente administra la analítica de RH.
                </div>
                <div class="source robotoRe fs14 gris7D">FUENTE: TATA CONSULTANCY SERVICES</div>
            </div>
            <div class="information col-sm-4">
                <div class="number robotoBo fs42 azul84">
                    9<span class="robotoRe fs19">%</span>
                </div>
                <div class="description robotoBo fs16 gris7D">
                    Solo el 9 por ciento de las compañías cree que entiende con claridad cuál es
                    el tipo de talento que impulsa el desempeño en su organización.
                </div>
                <div class="source robotoRe fs14 gris7D">FUENTE: DELOITTE</div>
            </div>
            <div class="information col-sm-4">
                <div class="number robotoBo fs42 azul84">
                    11<span class="robotoRe fs19">%</span>
                </div>
                <div class="description robotoBo fs16 gris7D">
                    Solo el 11 por ciento de los encuestados indicaron que su sistema de compensaciones se 
                    encuentra verdaderamente alineado con sus metas organizacionales, mientras 
                    que 23 por ciento reportaron no saber cuáles son las recompensas que valoran más sus 
                    empleados.
                </div>
                <div class="source robotoRe fs14 gris7D">FUENTE: DELOITTE</div>
            </div>
        </div>
        <div class="row">
            <div class="button-apply-now col-md-12">
                <a class="btn-apply-now robotoBo fs16 blanco">
                    DESCARGA EL FOLLETO
                </a>
            </div>
        </div>
    </div>
    <!-- Section Who is this program? -->
    <div class="for-who-container">
        <div class="for-who-title robotoBo fs24 azul84">
            ¿A quién va dirigido este programa?
        </div>
        <div class="for-who-list container-fluid">
            <div class="row">
                <div class="list col-sm-12">
                    <ul>
                        <li class="vino33">
                            <span class="robotoBo fs16 gris7D">Gerentes y directores de recursos humanos y profesionales de capacitación. </span>
                        </li>
                        <li class="vino33">
                            <span class="robotoBo fs16 gris7D">Jefes de equipo con funciones de evaluación de desempeño. </span>
                        </li>
                        <li class="vino33">
                            <span class="robotoBo fs16 gris7D">Directores generales. </span>
                        </li>
                        <li class="vino33">
                            <span class="robotoBo fs16 gris7D">Propietarios de negocios pequeños y medianos que deseen desarrollar talento. </span>
                        </li>
                        <li class="vino33">
                            <span class="robotoBo fs16 gris7D">Consultores y profesionales del desarrollo de talento en empresas.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="for-who-subtitle robotoBo fs20 azul84">
            Roles representativos
        </div>
        <div class="for-who-list container-fluid">
            <div class="row">
                <div class="list col-sm-4">
                    <ul>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">VP de gestión de talento</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Director de estrategia</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Business manager de división de RH</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Socio de RH</span>
                        </li>
                    </ul>
                </div>
                <div class="list col-sm-4">
                    <ul>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Gerente de Programa de analítica de personas</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">VP senior/Director de operaciones</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Director de compensaciones</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Director de gestión de talento</span>
                        </li>
                    </ul>
                </div>
                <div class="list col-sm-4">
                    <ul>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">VP de RH</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Chief People Officer</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Gerente de Grupo de Recursos Humanos</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Director de cambios y personas</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="for-who-subtitle robotoBo fs20 azul84">
            Compañías representativas
        </div>
        <div class="for-who-list container-fluid">
            <div class="row">
                <div class="list col-sm-4">
                    <ul>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">DBS Bank</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">3M</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Google</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">The Home Depot</span>
                        </li>
                    </ul>
                </div>
                <div class="list col-sm-4">
                    <ul>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Kotak Mahindra Bank</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">The Emirates Group</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Godrej Industries Ltd</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">AECOM</span>
                        </li>
                    </ul>
                </div>
                <div class="list col-sm-4">
                    <ul>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Interops Consulting</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Oasis Investments - Al Shirawi Group</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Mercer Japón</span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Power Finance Corporation</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="for-who-diagrams container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="diagram-title robotoBo fs20 azul84">
                        Experiencia laboral
                    </div>

                    <div class="diagram-img desktop">
                        <img class="lazyload" data-src="../assets/img/svg/Experiencia-laboral-desktop.svg" alt="Experiencia-laboral">
                    </div>
                    
                    <div class="diagram-img movil">
                        <img class="lazyload" data-src="../assets/img/svg/Experiencia-laboral-mobile.svg" alt="Industrias-Participantes">
                    </div>

                    <div class="movil">
                        <div class="details-cont">
                            <div class="detail">
                                <div class="square back-1"></div>
                                <div class="title robotoRe fs14 negro23">
                                    1-5 años
                                </div>
                            </div>
                            <div class="detail">
                                <div class="square back-2"></div>
                                <div class="title robotoRe fs14 negro23">
                                    6-10 años
                                </div>
                            </div>
                        </div>
                        <div class="details-cont">
                            <div class="detail">
                                <div class="square back-3"></div>
                                <div class="title robotoRe fs14 negro23">
                                    11-15 años
                                </div>
                            </div>
                            <div class="detail">
                                <div class="square back-4"></div>
                                <div class="title robotoRe fs14 negro23">
                                    16-20 años
                                </div>
                            </div>
                        </div>
                        <div class="details-cont">
                            <div class="detail">
                                <div class="square back-5"></div>
                                <div class="title robotoRe fs14 negro23">
                                    21-25 años
                                </div>
                            </div>
                            <div class="detail">
                                <div class="square back-6"></div>
                                <div class="title robotoRe fs14 negro23">
                                    >25 años
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="diagram-title robotoBo fs20 azul84">
                        Industrias Participantes
                    </div>

                    <div class="diagram-img desktop">
                        <img class="lazyload" data-src="../assets/img/svg/Industrias-participantes-desktop.svg" alt="Industrias-Participantes">
                    </div>
                    
                    <div class="diagram-img movil">
                        <img class="lazyload" data-src="../assets/img/svg/Industrias-participantes-mobile.svg" alt="Industrias-Participantes">
                    </div>
                    <div class="movil">
                        <div class="details-cont">
                            <div class="detail" style="width: 210px; margin: 0 auto;">
                                <div class="square back-2"></div>
                                <div class="title robotoRe fs14 negro23">
                                    Consultoría
                                </div>
                            </div>
                            <div class="detail" style="width: 210px; margin: 0 auto;">
                                <div class="square back-3"></div>
                                <div class="title robotoRe fs14 negro23">
                                    Banca y servicios financieros
                                </div>
                            </div>
                            <div class="detail" style="width: 210px; margin: 0 auto;">
                                <div class="square back-4"></div>
                                <div class="title robotoRe fs14 negro23">
                                    Proveedor de servicios de RH
                                </div>
                            </div>
                            <div class="detail" style="width: 210px; margin: 0 auto;">
                                <div class="square back-5"></div>
                                <div class="title robotoRe fs14 negro23">
                                    Salud
                                </div>
                            </div>
                            <div class="detail" style="width: 210px; margin: 0 auto;">
                                <div class="square back-6"></div>
                                <div class="title robotoRe fs14 negro23">
                                    Energía
                                </div>
                            </div>
                            <div class="detail" style="width: 210px; margin: 0 auto;">
                                <div class="square back-1"></div>
                                <div class="title robotoRe fs14 negro23">
                                    Otros
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="diagram-description robotoRe fs14 negro23">
                        <i>Otros* - incluye industria minorista, educativa, automotriz, 
                        aviación, agricultura, manufactura y más</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Experience of journey -->
    <div class="experience-container">
        <div class="experience-title robotoBo fs24 azul84">
            Tu experiencia de aprendizaje
        </div>
        <div class="experience-description robotoRe fs18 negro23">
            El programa en línea de Wharton, <i>Administración e Inteligencia Analítica de Recursos 
            Humanos</i>, combina la teoría con aplicaciones prácticas, y la flexibilidad con el rigor, 
            lo que da como resultado una experiencia de educación profesional holística. Al final 
            de este curso en línea serás capaz de:
        </div>
        <div class="experience-list container-fluid">
            <div class="row">
                <div class="list col-sm-12">
                    <ul>

                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Entender los principios básicos del uso de la analítica
                                de RH para mejorar
                                la colaboración entre empleados y entre departamentos para lograr objetivos,
                                ya sea que conlleve innovación o eficiencia.</span>
                        </li>

                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Aprovechar el análisis de datos para separar habilidades
                                de suerte,
                                identificar sesgos internos, y entender los ciclos de contratación,
                                movilidad interna y deserción.</span>
                        </li>

                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Comprender los cuatro factores clave en medidas de
                                desempeño: regresión
                                a la media, tamaño de muestra, independencia de señales (signal independence)
                                y proceso vs. resultado.</span>
                        </li>

                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Iniciar y administrar proyectos de analítica de personas 
                            para ayudarlo a alcanzar los objetivos de su organización.</span>
                        </li>

                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Motivar el desempeño individual y diseñar sistemas de
                                recompensas, para crear un ambiente de trabajo positivo.</span>
                        </li>

                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Crear una mentalidad y una cultura alrededor de los
                                sistemas de
                                trabajo vs. el trabajo individualizado, enfocándose en retención y el potencial del empleado.</span>
                        </li>

                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Diseñar una estructura organizacional optimizada para reclutar al mejor talento y obtener ventaja competitiva.</span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="experience-icons container-fluid">
            <div class="row">
                <div class="icons col-md-2 col-sm-6">
                    <div class=row>
                        <div class="icons-img col-sm-12 col-2">
                            <img class="lazyload" data-src="../assets/img/svg/contexto-recuadro.svg" alt="Contexto">
                        </div>
                        <div class="icons-description col-sm-12 col-10">
                            <div class="title robotoBo fs20 negro23">
                                Contexto
                            </div>
                            <div class="subtitle robotoRe fs16 negro23">
                                A través de clases en video
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 plus">
                    <div class="plus-img desktop">
                        <img class="lazyload" data-src="../assets/img/svg/+.svg" alt="Plus">
                    </div>
                </div>
                <div class="icons col-md-2 col-sm-6">
                    <div class=row>
                        <div class="icons-img col-sm-12 col-2">
                            <img class="lazyload" data-src="../assets/img/svg/ejemplos-del-mundo-recuadro.svg" alt="Ejemplos-del-mundo-real">
                        </div>
                        <div class="icons-description col-sm-12 col-10">
                            <div class="title robotoBo fs20 negro23">
                                Ejemplos del mundo real
                            </div>
                            <div class="subtitle robotoRe fs16 negro23">
                                A través de clases en video y clases en vivo
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 plus">
                    <div class="plus-img desktop">
                        <img class="lazyload" data-src="../assets/img/svg/+.svg" alt="Plus">
                    </div>
                </div>
                <div class="icons col-md-2 col-sm-6">
                    <div class=row>
                        <div class="icons-img col-sm-12 col-2">
                            <img class="lazyload" data-src="../assets/img/svg/Aplicacion-al-conjunto-recuadro.svg" alt="Aplicación-al-conjunto-de-datos">
                        </div>
                        <div class="icons-description col-sm-12 col-10">
                            <div class="title robotoBo fs20 negro23">
                                Aplicación al conjunto de datos
                            </div>
                            <div class="subtitle robotoRe fs16 negro23">
                                Aprende a través de tareas individuales y 
                                retroalimentación
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 plus">
                    <div class="plus-img desktop">
                        <img class="lazyload" data-src="../assets/img/svg/+.svg" alt="Plus">
                    </div>
                </div>
                <div class="icons col-md-2 col-sm-6">
                    <div class=row>
                        <div class="icons-img col-sm-12 col-2">
                            <img class="lazyload" data-src="../assets/img/svg/Reportes-de-aprendizaje-recuadro.svg" alt="Reportes-de-aprendizaje">
                        </div>
                        <div class="icons-description col-sm-12 col-10">
                            <div class="title robotoBo fs20 negro23">
                                Reportes de aprendizaje
                            </div>
                            <div class="subtitle robotoRe fs16 negro23">
                                A través de una mezcla de videos grabados 
                                y en vivo
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
        <div class="themes-program-diagram">
            <img class="desktop lazyload" data-src="../assets/img/svg/Temas-del-programa-desktop.svg" alt="Diagram">
            <img class="movil lazyload" data-src="../assets/img/svg/Temas-del-programa-mobile.svg" alt="Diagram">
        </div>
        <div class="themes-container container-fluid">
            <div class="row">
                <div class="theme-cont col-md-6">
                    <div class="row">
                        <div class="theme col-md-12">
                            <div class="row">
                                <div class="number robotoBo fs16 azul84 col-md-2 col-3">
                                    Módulo 1
                                </div>
                                <div class="title robotoRe fs16 negro23 col-md-10 col-9">
                                    Introducción a people analytics y evaluación del desempeño
                                </div>
                            </div>
                        </div>
                        <div class="theme col-md-12">
                            <div class="row">
                                <div class="number robotoBo fs16 azul84 col-md-2 col-3">
                                    Módulo 2
                                </div>
                                <div class="title robotoRe fs16 negro23 col-md-10 col-9">
                                    Motivación y recompensa
                                </div>
                            </div>
                        </div>
                        <div class="theme col-md-12">
                            <div class="row">
                                <div class="number robotoBo fs16 azul84 col-md-2 col-3">
                                    Módulo 3
                                </div>
                                <div class="title robotoRe fs16 negro23 col-md-10 col-9">
                                    Tareas, trabajos y sistemas de trabajo
                                </div>
                            </div>
                        </div>
                        <div class="theme col-md-12">
                            <div class="row">
                                <div class="number robotoBo fs16 azul84 col-md-2 col-3">
                                    Módulo 4
                                </div>
                                <div class="title robotoRe fs16 negro23 col-md-10 col-9">
                                    Selección estratégica de personal
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="theme-cont col-md-6">
                    <div class="row">
                        <div class="theme col-md-12">
                            <div class="row">
                                <div class="number robotoBo fs16 azul84 col-md-2 col-3">
                                    Módulo 5
                                </div>
                                <div class="title robotoRe fs16 negro23 col-md-10 col-9">
                                    Redes de colaboración
                                </div>
                            </div>
                        </div>
                        <div class="theme col-md-12">
                            <div class="row">
                                <div class="number robotoBo fs16 azul84 col-md-2 col-3">
                                    Módulo 6
                                </div>
                                <div class="title robotoRe fs16 negro23 col-md-10 col-9">
                                    Administración de talento y analítica
                                </div>
                            </div>
                        </div>
                        <div class="theme col-md-12">
                            <div class="row">
                                <div class="number robotoBo fs16 azul84 col-md-2 col-3">
                                    Módulo 7
                                </div>
                                <div class="title robotoRe fs16 negro23 col-md-10 col-9">
                                    Gestionar tu carrera como un profesional de RH
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
    <!-- Section Examples of the insdustry -->
    <div class="examples-industry-container">
        <div class="examples-industry-title robotoBo fs24 azul84">
            Ejemplos de la industria
        </div>
        <div class="examples-container container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-12 example">
                    <img class="lazyload" data-src="../assets/img/jpg/Ejemplo-1.jpg" alt="Google:-Proyecto-Oxígeno">
                    <div class="information">
                        <div class="title robotoBo fs20">
                            Google: Proyecto Oxígeno
                        </div>
                        <div class="description robotoRe fs16">
                            Descubre como Google implementó una iniciativa de RH para toda 
                            la compañía llamada “Proyecto Oxígeno”, para identificar los 
                            principales atributos de una gestión exitosa haciéndose la 
                            pregunta: los gerentes... ¿importan?
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 example">
                    <img class="lazyload" data-src="../assets/img/jpg/Ejemplo-2.jpg" alt="Industria-automotriz-japonesa">
                    <div class="information">
                        <div class="title robotoBo fs20">
                            Industria automotriz japonesa
                        </div>
                        <div class="description robotoRe fs16">
                            Entiende cómo es que la autonomía de los empleados está relacionada 
                            con la productividad.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 example">
                    <img class="lazyload" data-src="../assets/img/jpg/Ejemplo-3.jpg" alt="National-Football-League-(NFL)">
                    <div class="information">
                        <div class="title robotoBo fs20">
                            National Football League (NFL)
                        </div>
                        <div class="description robotoRe fs16">
                            Explora cómo en el mundo de los deportes profesionales, donde se 
                            recolectan más datos que en muchos otros ámbitos, identificar a 
                            los mejores atletas puede ser todo un reto.
                        </div>
                    </div>
                </div>
            </div>
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
                    <img class="lazyload" data-src="../assets/img/png/Michael-Useem-PhD.png" alt="Michael-Useem,-PhD">
                </div>
                <div class="professor-description">
                    <div class="name robotoBo fs18 negro23">
                        Michael Useem, PhD
                    </div>
                    <div class="info robotoRe fs16 negro23">
                        Profesor de Administración William and Jacalyn Egan; Director del 
                        Centro de Liderazgo y Gestión del Cambio; Editor de Wharton 
                        Leadership Digest
                    </div>
                </div>
            </div>
            <div class="professor">
                <div class="professor-img">
                    <img class="lazyload" data-src="../assets/img/png/Peter-Cappelli-DPhil.png" alt="Peter-Cappelli,-DPhil">
                </div>
                <div class="professor-description">
                    <div class="name robotoBo fs18 negro23">
                        Peter Cappelli, DPhil
                    </div>
                    <div class="info robotoRe fs16 negro23">
                        Profesor de Administración George W. Taylor; Director del Centro de 
                        Recursos Humanos, The Wharton School
                    </div>
                </div>
            </div>
            <div class="professor">
                <div class="professor-img">
                    <img class="lazyload" data-src="../assets/img/png/Matthew-Bidwell-PhD.png" alt="Matthew-Bidwell,-PhD">
                </div>
                <div class="professor-description">
                    <div class="name robotoBo fs18 negro23">
                        Matthew Bidwell, PhD
                    </div>
                    <div class="info robotoRe fs16 negro23">
                        Profesor Adjunto de Administración, The Wharton School
                    </div>
                </div>
            </div>
            <div class="professor">
                <div class="professor-img">
                    <img class="lazyload" data-src="../assets/img/png/cade-massey.png" alt="Cade-Massey,-PhD">
                </div>
                <div class="professor-description">
                    <div class="name robotoBo fs18 negro23">
                        Cade Massey, PhD
                    </div>
                    <div class="info robotoRe fs16 negro23">
                        Profesor de Práctica, Operaciones, Información y Decisiones, The 
                        Wharton School
                    </div>
                </div>
            </div>
            <div class="professor">
                <div class="professor-img">
                    <img class="lazyload" data-src="../assets/img/png/martine-haas.png" alt="Martine-Haas,-PhD">
                </div>
                <div class="professor-description">
                    <div class="name robotoBo fs18 negro23">
                        Martine Haas, PhD
                    </div>
                    <div class="info robotoRe fs16 negro23">
                        Profesora de Administración en Wharton School, Directora Anthony L. Davis 
                        del Joseph H. Lauder Institute for Management and International Studies, 
                        Universidad de Pensilvania
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
                        Obtén un certificado digital de Wharton School una vez que termines tu programa 
                        en línea de manera exitosa.
                    </div>
                </div>
                <div class="col-md-6 certificate-img">
                    <a href="#ex1" rel="modal:open">
                        <img class="lazyload" data-src="../assets/img/png/Certificado-People-Analytics.png" alt="Certificado">
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
        <img src="../assets/img/jpg/certificate-people-analytics.jpg" alt="Certificado">
    </div>
    <!-- Section Apply Now / Felxible Payments -->
    <div class="apply-now-container">
        <div class="button">
            <a class="robotoBo fs16 azul84" href="http://bit.ly/2XJoBey" target="_blank" rel="noopener noreferrer">
                APLICA AHORA
            </a>
        </div>
        <div class="apply-now-title robotoBo fs24">
            Aplica lo antes posible.
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