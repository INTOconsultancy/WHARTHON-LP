<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WHARTON | PEOPLE ANALYTICS</title>

    <link rel="shortcut icon" type="image/png" href="../business-analytics/assets/img/favicon.ico" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../assets/css/stylesheet.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css"> <!-- Material Design -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>

    <!-- Script -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="crossorigin="anonymous"></script> <!-- jQuery -->
    <script type="text/javascript" src="../assets/js/form-input-manager.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="../assets/js/logs.js"></script>
    <script type="text/javascript" src="../assets/js/utm_populate.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script type="text/javascript" src="https://code.getmdl.io/1.3.0/material.min.js"></script> <!-- Material Design -->

</head>
<body>

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
                <img class="white" src="../business-analytics/assets/img/svg/wharton-execed-white-LG.svg" alt="Wharton">
                <img class="blue" src="../business-analytics/assets/img/svg/wharton-execed-blue-LG.svg" alt="Executive-Education">
            </div>
            <div class="text-button robotoBo fs20 blanco">CERTIFICADO ONLINE</div>
            <div class="header-button">
                <a class="robotoBo fs14 blanco">
                    MÁS INFORMACIÓN
                </a>
            </div>
        </div>
    </header>
    <!-- Body -->
    <div class="space"></div>
    <!-- Section Hero Image -->
    <div class="hero-container">
        <div class="hero-title-cont">
            <div class="hero-title">
                <div class="banner robotoRe fs16 dorado73">Aplica hoy al programa</div>
                <div class="title robotoBo fs26 blanco">Administración e Inteligencia Analítica de Recursos Humanos:</div>
                <div class="subtitle robotoRe fs18 blanco"><i>People Analytics</i>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Formulario -->
    <div class="formulario-container">
            <div class="formulario-cont">
                <div class="form" id="form">
                    <div class="form-title robotoBo fs18 azul41">Solicitar información del curso</div>
                    <!-- Form Element -->
                    <form class="form-cont" action="https://www2.emeritus.org/l/134351/2019-04-12/4ybyr1" id="fordesk">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="robotoRe fs16 gris91 mdl-textfield__input" type="text" id="first_name"
                                name="first_name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" style="text-transform: capitalize;">
                            <label class="robotoRe fs16 gris91 mdl-textfield__label" for="first_name">Nombre(s)</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="robotoRe fs16 gris91 mdl-textfield__input" type="text" id="last_name"
                                name="last_name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" style="text-transform: capitalize;">
                            <label class="robotoRe fs16 gris91 mdl-textfield__label" for="last_name">Apellido(s)</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="robotoRe fs16 gris91 mdl-textfield__input" type="email" id="email" name="email"
                                pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$">
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
                                maxlength="15" minlength="5" onkeypress="return valida(event)" pattern="[0-9]+">
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
                            <input type="hidden" name="course" id="course" value="WHARTON - Business Analytics">
                            <input type="hidden" name="retURL"
                                value="<?php echo $current_link.'Thanks.php' ?>">
                            <button class="robotoBo fs16 blanco" type="submit" id="btn-download-brochure">
                                DESCARGAR EL FOLLETO
                                <img src="../assets/img/svg/icon-descargar.svg" alt="Download">
                            </button>
                        </div>
                    </form>
                    <div class="private-data">
                        <div class="data robotoRe fs16 negro3D">
                            Tu información no se compartirá con nadie
                        </div>
                        <div>
                            <a class="robotoBo fs16 azul85" href="#" target="_blank" rel="noopener noreferrer">
                                Política de Privacidad
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Section Detalles del programa -->
    <div class="detalles-container">
        <div class="detalles-cont">
            <div class="detalle">
                <div class="detalle-img">
                    <img src="../assets/img/svg/icono-inicio.svg" alt="">
                </div>
                <div class="detalles">
                    <div class="text robotoRe fs24 grisD9">
                        INICIA EL
                    </div>
                    <div class="fechas-precio robotoBo fs24 grisD9">
                        06 de junio del 2019
                    </div>
                    <div class="notas robotoRe fs14 grisD9">
                        Nota: la fecha para mandar tu solicitud se extendió hasta el 5 de junio de 2019.
                    </div>
                </div>
            </div>
            <div class="detalle">
                <div class="detalle-img">
                    <img src="../assets/img/svg/icono-duracion.svg" alt="">
                </div>
                <div class="detalles">
                    <div class="text robotoRe fs24 grisD9">
                        DURACIÓN
                    </div>
                    <div class="fechas-precio robotoBo fs24 grisD9">
                        2 meses, en línea,
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
                    <img src="../assets/img/svg/icono-cuota.svg" alt="">
                </div>
                <div class="detalles">
                    <div class="text robotoRe fs24 grisD9">
                        CUOTA DEL PROGRAMA
                    </div>
                    <div class="fechas-precio robotoBo fs24 grisD9">
                        $1,950 dólares
                    </div>
                    <div class="notas robotoRe fs14 amarillo73">
                        <a class="amarillo73" href="#ex2" rel="modal:open">
                            <img src="../assets/img/svg/info-circle-solid.svg" alt="información">
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
                            <span class="robotoBo">Curso de Estrategias digitales de marketing:</span>
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
                                La primera parcialidad de <span class="robotoBo">$,1054 USD</span>
                                se paga al inicio.
                            </div>
                            <div class="precio-pago">
                                <div class="dot-pagos"></div>
                                La segunda parcialidad de <span class="robotoBo">$935 USD</span>
                                a pagar del 22 de julio del 2019.
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
                                a pagar del 22 de julio del 2019.
                            </div>
                            <div class="precio-pago">
                                <div class="dot-pagos"></div>
                                La tercera parcialidad se paga a más tardar el 6 de agosto del 2019
                                <span class="robotoBo">$635 USD.</span>
                            </div>
                        </div>
                    </div> <!-- modal-pagos-flexibles -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>