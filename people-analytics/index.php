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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Script -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"
        integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="../assets/js/form-input-manager.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="../assets/js/logs.js"></script>
    <script type="text/javascript" src="../assets/js/utm_populate.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js">
    </script>
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
                <div class="banner robotoRe fs16 dorado73">Aplica hoy al programa</div>
                <div class="title robotoBo fs26 blanco">Administración e Inteligencia Analítica de Recursos Humanos:
                </div>
                <div class="subtitle robotoRe fs18 blanco"><i>People Analytics</i>
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
                <form class="form-cont" action="https://www2.emeritus.org/l/134351/2019-04-24/4ypz77" id="fordesk">
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
                        <input type="hidden" name="course" id="course" value="Wharton - People Analytics">
                        <input type="hidden" name="retURL" value="<?php echo $current_link.'Thanks.php' ?>">
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
    <!-- Section Details of program -->
    <div class="detalles-container">
        <div class="detalles-cont">
            <div class="detalle">
                <div class="detalle-img">
                    <img src="../assets/img/svg/icono-inicio.svg" alt="">
                </div>
                <div class="detalles">
                    <div class="text robotoRe fs20 grisD9">
                        INICIA EL
                    </div>
                    <div class="fechas-precio robotoBo fs20 grisD9">
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
                    <div class="text robotoRe fs20 grisD9">
                        DURACIÓN
                    </div>
                    <div class="fechas-precio robotoBo fs20 grisD9">
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
                    <div class="text robotoRe fs20 grisD9">
                        CUOTA DEL PROGRAMA
                    </div>
                    <div class="fechas-precio robotoBo fs20 grisD9">
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
                            <span class="robotoBo">Curso de People Analytics :</span>
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
    <!-- Section Information of program -->
    <div class="information-container">
        <div class="information-title robotoBo fs24 azul85">
            Las nuevas reglas de la administración de RH en la era digital
        </div>
        <div class="information-description robotoRe fs16 negro23">
            El <i>Big Data</i> alcanza hoy cada esquina de la organización y abre caminos hacia la
            implementación de mejoras en operaciones, ventas, investigación y desarrollo. Su
            objetivo: lograr procesos más eficientes, <i>insights</i> acertados del negocio y ventajas
            competitivas para aquellos que saben cómo aprovechar los datos.
            <br>
            <br>
            La mayoría de las organizaciones se ha dado cuenta de que la transformación digital
            es inminente y abraza el concepto de la analítica de RH. Por eso resulta indispensable
            contar con profesionales con el conocimiento y las habilidades necesarias para recolectar,
            analizar e interpretar los datos, de forma que sus hallazgos influyan e impulsen el
            mejor desempeño del capital humano.
        </div>
        <div class="information-cont container-fluid">
            <div class="row">
                <div class="information col-sm">
                    <div class="number robotoBo fs42 azul85">
                        5<span class="robotoRe fs19">%</span>
                    </div>
                    <div class="description robotoBo fs16 gris7D">
                        Solo el 5 por ciento de las inversiones en Big Data se destinan a RH. Esto es,
                        al grupo que usualmente administra la analítica de RH.
                    </div>
                    <div class="source robotoRe fs14 gris7D">FUENTE: TATA CONSULTANCY SERVICES</div>
                </div>
                <div class="information col-sm">
                    <div class="number robotoBo fs42 azul85">
                        9<span class="robotoRe fs19">%</span>
                    </div>
                    <div class="description robotoBo fs16 gris7D">
                        Solo el 9 por ciento de las compañías cree que entiende con claridad cuál es
                        el tipo de talento que impulsa el desempeño en su organización.
                    </div>
                    <div class="source robotoRe fs14 gris7D">FUENTE: DELOITTE</div>
                </div>
                <div class="information col-sm">
                    <div class="number robotoBo fs42 azul85">
                        11<span class="robotoRe fs19">%</span>
                    </div>
                    <div class="description robotoBo fs16 gris7D">
                        Solo el 11 por ciento de los encuestados indicaron que su sistema de compensaciones se 
                        encuentra verdaderamente alineado con sus metas organizacionales; mientras 
                        que 23% reportaron no saber cuáles son las recompensas que valoran más sus 
                        empleados.
                    </div>
                    <div class="source robotoRe fs14 gris7D">FUENTE: DELOITTE</div>
                </div>
            </div>
        </div>
        <div class="button-apply-now">
            <a class="btn-apply-now robotoBo fs16 blanco">
                DESCARGA EL FOLLETO
            </a>
        </div>
    </div>
    <!-- Section Experience of journey -->
    <div class="experience-container">
        <div class="experience-title robotoBo fs24 azul85">
            Tu experiencia de aprendizaje
        </div>
        <div class="experience-description robotoBo fs18 gris7D">
            El programa en línea de Wharton, Administración e Inteligencia Analítica de
            Recursos Humanos, combina la teoría con aplicaciones prácticas, y la flexibilidad
            con el rigor, lo que da como resultado una experiencia de educación profesional
            holística. Al final de este curso en línea serás capaz de:
        </div>
        <div class="experience-list container-fluid">
            <div class="row">
                <div class="list col-sm-6">
                    <ul>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Comprender los cuatro factores clave en medidas de
                                desempeño: regresión
                                a la media, tamaño de muestra, independencia de señales (signal independence)
                                y proceso vs. resultado.</span>
                        </li>

                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Aprovechar el análisis de datos para separar habilidades
                                de suerte;
                                identificar sesgos internos, y entender los ciclos de contratación,
                                movilidad interna y deserción.</span>
                        </li>

                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Entender los principios básicos del uso de la analítica
                                de RH para mejorar
                                la colaboración entre empleados y entre departamentos para lograr objetivos,
                                ya sea que conlleve innovación o eficiencia.</span>
                        </li>
                    </ul>
                </div>
                <div class="list col-sm-6">
                    <ul>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Motivar el desempeño individual y diseñar sistemas de
                                recompensas.</span>
                        </li>

                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Crear una mentalidad y una cultura alrededor de los
                                sistemas de
                                trabajo vs. el trabajo individualizado.</span>
                        </li>

                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Diseñar una estructura organizacional optimizada para el
                                éxito.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="experience-icons container-fluid">
            <div class="row">
                <div class="icons col-md-3 col-sm-6">
                    <div class=row>
                        <div class="icons-img col-sm-12 col-2">
                            <img src="../assets/img/svg/contexto-icon.svg" alt="Contexto">
                        </div>
                        <div class="icons-description col-sm-12 col-10">
                            <div class="robotoBo fs20 negro23">
                                Contexto
                            </div>
                            <div class="robotoRe fs16 negro23">
                                Independientemente de su grado de madurez
                            </div>
                        </div>
                    </div>
                </div>
                <div class="icons col-md-3 col-sm-6">
                    <div class=row>
                        <div class="icons-img col-sm-12 col-2">
                            <img src="../assets/img/svg/mundo-real-icon.svg" alt="Ejemplos-del-mundo-real">
                        </div>
                        <div class="icons-description col-sm-12 col-10">
                            <div class="robotoBo fs20 negro23">
                                Ejemplos del mundo real
                            </div>
                            <div class="robotoRe fs16 negro23">
                                A través de clases en video y clases en vivo
                            </div>
                        </div>
                    </div>
                </div>
                <div class="icons col-md-3 col-sm-6">
                    <div class=row>
                        <div class="icons-img col-sm-12 col-2">
                            <img src="../assets/img/svg/aplicacion-al-conjunto.svg" alt="Aplicación-al-conjunto-de-datos">
                        </div>
                        <div class="icons-description col-sm-12 col-10">
                            <div class="robotoBo fs20 negro23">
                                Aplicación al conjunto de datos
                            </div>
                            <div class="robotoRe fs16 negro23">
                                Aprende a través de tareas individuales y 
                                retroalimentación
                            </div>
                        </div>
                    </div>
                </div>
                <div class="icons col-md-3 col-sm-6">
                    <div class=row>
                        <div class="icons-img col-sm-12 col-2">
                            <img src="../assets/img/svg/Reportes-de-aprendizaje-icon.svg" alt="Reportes-de-aprendizaje">
                        </div>
                        <div class="icons-description col-sm-12 col-10">
                            <div class="robotoBo fs20 negro23">
                                Reportes de aprendizaje
                            </div>
                            <div class="robotoRe fs16 negro23">
                                A través de una mezcla de videos grabados 
                                y en vivo
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Who is this program? -->
    <div class="for-who-container">
        <div class="for-who-title robotoBo fs24 azul85">
            ¿A quién va dirigido este programa?
        </div>
        <div class="for-who-list container-fluid">
            <div class="row">
                <div class="list col-sm-12">
                    <ul>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Gerentes y directores de recursos humanos y profesionales de capacitación. </span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Jefes de equipo con funciones de evaluación de desempeño. </span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Directores generales. </span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Propietarios de negocios pequeños y medianos que deseen desarrollar talento. </span>
                        </li>
                        <li class="vino33">
                            <span class="robotoRe fs16 negro23">Consultores y profesionales del desarrollo de talento en empresas.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="for-who-subtitle robotoBo fs20 azul85">
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
                            <span class="robotoRe fs16 negro23">Gerente de programa de people analytics</span>
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
                            <span class="robotoRe fs16 negro23">Director de estrategia</span>
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
        <div class="for-who-subtitle robotoBo fs20 azul85">
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
                <div class="col-sm-6" style="border: 1px solid red;">
                    <div class="diagram-title robotoBo fs20 gris7D">
                        Experiencia laboral
                    </div>
                    <div class="diagram-img">
                        <img src="../assets/img/svg/Experiencia-laboral.svg" alt="Experiencia-laboral">
                    </div>
                </div>
                <div class="col-sm-6" style="border: 1px solid blue;">
                    <div class="diagram-title robotoBo fs20 gris7D">
                        Industrias Participantes
                    </div>
                    <div class="diagram-img">
                        <img src="../assets/img/svg/Industrias-participantes.svg" alt="Industrias-Participantes">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Management of human deploy -->
    <!-- Section Examples of the insdustry -->
    <!-- Section Professor -->
    <!-- Section Certificate -->
    <!-- Section Apply Now / Felxible Payments -->
    <!-- Section Colaboration -->
</body>

</html>