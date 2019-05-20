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
    <title>WHARTHON | Busines Analytics</title>


    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.ico" />
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.ico" />


    <link rel="stylesheet" href="assets/scss/stylesheet.css">
    <link rel="stylesheet" href="../assets/libs/mdl/material.min.css">
    <link rel="stylesheet" href="../assets/libs/slick/slick.css">
    <link rel="stylesheet" href="../assets/libs/slick/slick-theme.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />


    <script type="text/javascript" src="../assets/libs/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../assets/js/onkeypress.js"></script>
    <script type="text/javascript" src="../assets/js/logs.js"></script>
    <script type="text/javascript" src="../assets/js/utm_populate.js"></script>
    <script type="text/javascript" src="../assets/libs/mdl/material.min.js"></script>
    <script type="text/javascript" src="../assets/js/countries-latam-update.js"></script>
    <script type="text/javascript" src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script type="text/javascript" src="../assets/js/main.js"></script>
    <script type="text/javascript" src="../assets/libs/slick/slick.js"></script>
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>


</head>

<body> 
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJ2PZ8R"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->   
    
    <!-- Getting the querystring -->
    <?php
        $queryStringArray = array();
        foreach($_GET as $key=>$value){
        $parameter = $key."=".$value;
            array_push($queryStringArray, $parameter);
        }
        $queryString = implode("&", $queryStringArray);
    ?>

    <!-- Getting the current url (used in the retURL in the form.) -->
    <?php
    if (isset($_SERVER["HTTPS"]) && ($_SERVER["HTTPS"] == "on" || $_SERVER["HTTPS"] == 1) ||  isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && $_SERVER["HTTP_X_FORWARDED_PROTO"] == "https") {
        $protocol = "https://";

    }else {
        $protocol = "http://";
    }
        
    $current_link = $protocol.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
    
    ?>
    <header class="header">
        <div class="header-container">
            <div class="header-logos">
                <img class="white" src="assets/img/svg/wharton-execed-white-LG.svg" alt="Executive Education">
                <img class="blue" src="assets/img/svg/wharton-execed-blue-LG.svg" alt="Executive Education">
            </div>
            <div class="header-button">
                <a class="whitSBo fs14 blanco">
                    MÁS INFORMACIÓN
                </a>
            </div>
        </div>
    </header>

    <!-- Whitespace to prevent content from being placed behind the header. -->
    <div class="space"></div>


    <!-- Section no 1: Hero Container-->
    <div class="hero-container">

        <div class="hero-data">
            <div class="hero-data-cont">
                <div class="whitMe fs18 blanco">
                    NUEVO PROGRAMA ONLINE
                </div>
                <div class="whitSBo fs32 blanco">
                    Business Analytics
                </div>
                <div class="whitLi fs20 blanco">
                    De los datos a la acción
                </div>
            </div>
        </div>

        <div class="price-container">
            <div class="whitSBo fs20 negro4B">
                27 / junio / 2019
            </div>
            <div class="whitMe fs16 negro19">
                3 MESES
            </div>
            <div class="movil whitMe fs16 negro19">
                6-7 HORAS POR SEMANA
            </div>
            <div class="desktop whitMe fs16 negro19">
                | 6-7 HORAS POR SEMANA |
            </div>
            <div class="whitMe fs16 negro19">
                COSTO: $ 1,950 USD
            </div>
            <div class="notas">
                <a class="whitBo fs16 vino56" href="#ex2" rel="modal:open">
                    <img src="assets/img/svg/info-circle-solid.svg" alt="información">
                    Pagos flexibles disponibles
                </a>
            </div>
        </div>

        <div class="formulario-container">
            <div class="formulario-cont">
                <div class="form" id="form">
                    <div class="form-title whitSBo fs18 negro23">Para obtener más información, llena el formulario</div>

                    <!-- Form Element -->
                    <form class="form-cont" action="http://www2.emeritus.org/l/134351/2019-04-12/4ybyr1" id="fordesk">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="whitLi fs16 gris91 mdl-textfield__input" type="text" id="first_name"
                                name="first_name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" style="text-transform: capitalize;">
                            <label class="whitLi fs16 gris91 mdl-textfield__label" for="first_name">Nombre(s)</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="whitLi fs16 gris91 mdl-textfield__input" type="text" id="last_name"
                                name="last_name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" style="text-transform: capitalize;">
                            <label class="whitLi fs16 gris91 mdl-textfield__label" for="last_name">Apellido(s)</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="whitLi fs16 gris91 mdl-textfield__input" type="email" id="email" name="email"
                                pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$">
                            <label class="whitLi fs16 gris91 mdl-textfield__label" for="email">Email</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <select id="country" name="Country" class="mdl-textfield__input Country" required>
                            </select>
                            <label class="whitLi fs16 gris91 mdl-textfield__label" for="country">País</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <select id="work_experience" name="work_experience"
                                class="whitLi fs16 gris91 mdl-textfield__input work_experience" required>
                                <option value=""></option>
                                <option value="Less than 5 Years">Menos de 5 años</option>
                                <option value="5-10 Years">5-10 años</option>
                                <option value="10-15 Years">10-15 años</option>
                                <option value="15-20 Years">15-20 años</option>
                                <option value="> 20 Years">&gt; 20 años</option>
                            </select>
                            <label class="whitLi fs16 gris91 mdl-textfield__label" for="work_experience">Experiencia
                                Profesional</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="whitLi fs16 gris91 mdl-textfield__input" type="tel" id="mobile" name="mobile"
                                maxlength="15" minlength="5" onkeypress="return valida(event)" pattern="[0-9]+">
                            <label class="whitLi fs16 gris91 mdl-textfield__label" for="mobile">Teléfono Movíl</label>
                        </div>
                        <!-- GDPR checkbox -->
                        <div class="">
                            <div class="form-group" id="gdpr-consent" style="display:none;">
                                <label class="checkbox-inline fs14 grapRe negro23">
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
                            <button class="whitSBo fs16 blanco" type="submit" id="btn-download-brochure">
                                DESCARGAR EL FOLLETO
                                <img src="assets/img/svg/icon-descargar.svg" alt="Download">
                            </button>
                        </div>
                    </form>
                    <div class="private-data">
                        <div class="data whitLi fs16 negro3D">
                            Tus datos personales no serán compartidos con terceros.
                        </div>
                        <div>
                            <a class="whitSBo fs16 vino56" href="#" target="_blank" rel="noopener noreferrer">
                                Política de Privacidad
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Modal pagos flexibles -->
    <div id="ex2" class="modal modal-pagos-flexibles">
        <div class="modal-pagos-title fs24 whitBo negro19">
            Plan de pagos flexibles
        </div>
        <div class="modal-pagos-descripcion fs18 whitBo negro19">
            Esta opción permite al alumno pagar la cuota del curso en parcialidades.
            Está disponible en la solicitud de inscripción y deberá seleccionarse
            antes de realizar el pago.
        </div>
        <div class="modal-pagos-subtitle fs16 whitMe negro19">
            Las siguientes opciones de pago están disponibles para el Curso de Business Analytics:
        </div>
        <div class="pagos">
            <div class="pagos-title fs16 whitBo negro19">
                Pago total
            </div>
            <div class="precio-pago fs14 whitMe negro23">
                <div class="dot-pagos"></div>La cuota completa del curso $1,950 USD.
            </div>
        </div>
        <div class="pagos">
            <div class="pagos-title fs16 whitBo negro19">
                Pago en dos parcialidades
            </div>
            <div class="precio-pago fs14 whitMe negro23">
                <div class="dot-pagos"></div>La primera parcialidad de $,1054 USD
                se paga al inicio.
            </div>
            <div class="precio-pago">
                <div class="dot-pagos"></div>La segunda parcialidad de $935 USD.
                a pagar del 22 de julio del 2019.
            </div>
        </div>
        <div class="pagos no-border">
            <div class="pagos-title fs16 whitBo negro19">
                Pago en 3 parcialidades
            </div>
            <div class="precio-pago fs14 whitMe negro23">
                <div class="dot-pagos"></div>La primera parcialidad de $778 USD.
                se paga al inicio.
            </div>
            <div class="precio-pago">
                <div class="dot-pagos"></div>La segunda parcialidad de $635 USD.
                a pagar del 22 de julio del 2019.
            </div>
            <div class="precio-pago">
                <div class="dot-pagos"></div>La tercera parcialidad se paga a más tardar el 06 de agosto $635 USD.
            </div>
        </div>
    </div>


    <!-- Section no 2: Additional information fo universisty -->
    <div class="university-info-container">
        <div class="info whitMe fs20 negro19">
            El certificado en línea con duración de tres meses, <strong>Business Analytics, de los datos a la
                acción</strong>,
            de Wharton, le proporciona a administradores y líderes de negocio la posibilidad de entender cómo es que la
            analítica
            puede mejorar su proceso de toma de decisión. Este programa te ayudará a analizar datos para identificar
            insights
            valiosos, mejorar tu habilidad para hacer predicciones a largo plazo y prescribir acciones a futuro que
            ayuden a
            tomar mejores decisiones de negocio.
        </div>
    </div>


    <!-- Section no 3:  Important Facts -->
    <div class="datos-importantes-container">
        <div class="datos-importantes-title fs30 whitSBo blanco">
            ¿Por qué estudiar Business Analytics?
        </div>
        <div class="datos-cont">
            <div class="dato">
                <div class="whitMe fs36 azulDA">
                    2x
                </div>
                <div class="whitLi fs20 blanco">
                    La cantidad de datos a nivel
                    mundial se duplica cada tres años.
                </div>
                <div class="whitSBo fs14 blanco">
                    Fuente: McKinsey & Company
                </div>
            </div>
            <div class="dato">
                <div class="whitMe fs36 azulDA">
                    1.5 millones
                </div>
                <div class="whitLi fs20 blanco">
                    Es el déficit actual de gerentes y
                    analistas capacitados para tomar
                    decisiones con base en conceptos
                    analíticos.
                </div>
                <div class="whitSBo fs14 blanco">
                    Fuente: McKinsey & Company
                </div>
            </div>
            <div class="dato">
                <div class="whitMe fs36 azulDA">
                    75%
                </div>
                <div class="whitLi fs20 blanco">
                    De las compañías carecen de las
                    habilidades y tecnología para
                    sacar el máximo provecho de los
                    datos que colectan.
                </div>
                <div class="whitSBo fs14 blanco">
                    Fuente: PWC
                </div>
            </div>
        </div>
    </div>


    <!-- Section no 4:  Learning online -->
    <div class="learning-container">
        <div class="learning-title fs30 whitSBo negro19">
            Aprendizaje en línea de alto impacto
        </div>
        <div class="learning-cont">
            <div class="learning" data-aos="fade-up" data-aos-delay="100">
                <div class="learning-img">
                    <img src="assets/img/svg/icono-framework.svg" alt="Frameworks">
                </div>
                <div class="learning-description">
                    <div class="title whitSBo fs18 negro4B">
                        Frameworks
                    </div>
                    <div class="subtitle whitMe fs18 negro19">
                        En clases en video
                    </div>
                </div>
            </div>
            <div class="learning" data-aos="fade-up" data-aos-delay="200">
                <div class="learning-img">
                    <img src="assets/img/svg/icono-ejemplos-mundo-real.svg" alt="Frameworks">
                </div>
                <div class="learning-description">
                    <div class="title whitSBo fs18 negro4B">
                        Ejemplos del mundo real
                    </div>
                    <div class="subtitle whitMe fs18 negro19">
                        Presentados en clases en vivo y en video
                    </div>
                </div>
            </div>
            <div class="learning" data-aos="fade-up" data-aos-delay="300">
                <div class="learning-img">
                    <img src="assets/img/svg/icono-aplicaciones-conjuntos.svg" alt="Frameworks">
                </div>
                <div class="learning-description">
                    <div class="title whitSBo fs18 negro4B">
                        Aplicaciones a conjuntos de datos
                    </div>
                    <div class="subtitle whitMe fs18 negro19">
                        Aprende con tareas individuales y retroalimentación
                    </div>
                </div>
            </div>
            <div class="learning" data-aos="fade-up" data-aos-delay="400">
                <div class="learning-img">
                    <img src="assets/img/svg/icono-aprendizajes.svg" alt="Frameworks">
                </div>
                <div class="learning-description">
                    <div class="title whitSBo fs18 negro4B">
                        Informe de aprendizajes
                    </div>
                    <div class="subtitle whitMe fs18 negro19">
                        Presentados en clases en vivo y en video
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Section no 5:  Study Plan. -->
    <div class="plan-de-estudios-container">
        <div class="plan-de-estudios-title whitSBo fs30 blanco">
            Experiencia del Programa
        </div>
        <div class="plan-de-estudios-subtitle whitMe fs18 blanco" style="margin-bottom: 20px!important;">
            4 sesiones en vivo con profesores de Wharton • 1 Sesión de Data Analytics
        </div>
        <div class="plan-de-estudios-subtitle whitSBo fs24 blanco">
            Plan de estudios
        </div>
        <div class="modulos-container">
            <ul class="collapsible">
                <li class="active modulo-cont">
                    <div class="collapsible-header fs16">
                        <div class="No whitMe fs14 vino56">Módulo 1</div>
                        <div class="module-title whitLi negro23">Analítica descriptiva: reuniendo insights.
                        </div>

                    </div>
                    <div class="collapsible-body hide"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header fs16">
                        <div class="No whitMe fs14 vino56">Módulo 2</div>
                        <div class="module-title whitLi negro23">Analítica descriptiva: describiendo y pronosticando
                            eventos futuros.
                        </div>

                    </div>
                    <div class="collapsible-body hide"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header fs16">
                        <div class="No whitMe fs14 vino56">Módulo 3</div>
                        <div class="module-title whitLi negro23">Analítica predictiva: hacer predicciones usando datos.
                        </div>

                    </div>
                    <div class="collapsible-body hide"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header fs16">
                        <div class="No whitMe fs14 vino56">Módulo 4</div>
                        <div class="module-title whitLi negro23">Analítica predictiva y prescriptiva: aplicación y kit
                            de herramientas.
                        </div>

                    </div>
                    <div class="collapsible-body hide"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header fs16">
                        <div class="No whitMe fs14 vino56">Módulo 5</div>
                        <div class="module-title whitLi negro23">Analítica predictiva: herramientas para la toma de
                            decisiones.
                        </div>

                    </div>
                    <div class="collapsible-body hide"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header fs16">
                        <div class="No whitMe fs14 vino56">Módulo 6</div>
                        <div class="module-title whitLi negro23">Analítica predictiva: usar datos para predecir el
                            desempeño de los empleados.
                        </div>

                    </div>
                    <div class="collapsible-body hide"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header fs16">
                        <div class="No whitMe fs14 vino56">Módulo 7</div>
                        <div class="module-title whitLi negro23">Analítica prescriptiva: aportar recomendaciones para
                            cambiar el comportamiento.
                        </div>

                    </div>
                    <div class="collapsible-body hide"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header fs16">
                        <div class="No whitMe fs14 vino56">Módulo 8</div>
                        <div class="module-title whitLi negro23">Analítica prescriptiva: determinar los resultados más
                            favorables.
                        </div>

                    </div>
                    <div class="collapsible-body hide"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header fs16">
                        <div class="No whitMe fs14 vino56">Módulo 9</div>
                        <div class="module-title whitLi negro23">Aplicación de analítica de negocios.
                        </div>

                    </div>
                    <div class="collapsible-body hide"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
            </ul>
        </div>
        <div class="plan-de-estudios-subtitle whitSBo fs24 blanco">
            Métodos y herramientas
        </div>
        <div class="metodos-herramientas-container">

            <div class="modulos-container">
                <ul class="collapsible">
                    <li class="modulo-cont">
                        <div class="metodo-header fs16">
                            <div class="module-title whitLi negro4D">MÉTODOS DE RECOLECCIÓN DE DATOS</div>
                            <ul class="list-description">
                                <li class="whitMe fs16 negro4D">Recolección de datos descriptivos: Encuestas, Net
                                    Promoter Score (NPS) y autoinformes</li>
                                <li class="whitMe fs16 negro4D">Recolección de datos pasivos</li>
                                <li class="whitMe fs16 negro4D">Recolección de datos de medios:</li>
                            </ul>
                        </div>
                    </li>
                    <li class="modulo-cont">
                        <div class="metodo-header fs16">
                            <div class="module-title whitLi negro4D">PRUEBAS A/B</div>
                            <div class="module-title whitLi negro4D">CORRELACIÓN Y CAUSALIDAD PROYECCIONES</div>
                            <ul class="list-description">
                                <li class="whitMe fs16 negro4D">Objetivas y subjetivas </li>
                                <li class="whitMe fs16 negro4D">Variación de hebra o variación estacional </li>
                                <li class="whitMe fs16 negro4D">Suavizamiento exponencial </li>
                                <li class="whitMe fs16 negro4D">Estadística descriptiva </li>
                                <li class="whitMe fs16 negro4D">Tendencias y estacionalidad </li>
                                <li class="whitMe fs16 negro4D">Nuevos productos</li>
                            </ul>
                        </div>
                    </li>
                    <li class="modulo-cont">
                        <div class="metodo-header fs16">
                            <div class="module-title whitLi negro4D">ANÁLISIS DE REGRESIÓN HERRAMIENTAS DE SIMULACIÓN
                            </div>
                            <ul class="list-description">
                                <li class="whitMe fs16 negro4D">Paquete de herramientas de análisis </li>
                                <li class="whitMe fs16 negro4D">Herramienta de Soluciones</li>
                            </ul>
                            <div class="module-title whitLi negro4D">OPTIMIZADAS (SOLVER OPTIMIZATION TOOL)
                                VISUALIZACIÓN E INTERPRETACIÓN DE DATOS MODELOS DE OPTIMIZACIÓN ÁRBOLES DE DECISIÓN
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Section no 6: Examples of industry -->
    <div class="industry-container">
        <div class="industry-title whitSBo fs30 negro4B">
            Ejemplos de la industria
        </div>
        <div class="industry-cont">
            <div class="examples-industry" data-aos="zoom-in" data-aos-delay="100">
                <div class="industry-img"></div>
                <div class="industry-description">
                    <div class="title whitSBo fs20 blanco">
                        Productos empacados
                    </div>
                    <div class="subtitle whitMe fs16 blanco">
                        ¿Cómo Starbucks identifica a qué clientes debe darles ofertas
                        con el objetivo de maximizar el retorno de inversión (RoI)?
                    </div>
                </div>
            </div>
            <div class="examples-industry" data-aos="zoom-in" data-aos-delay="200">
                <div class="industry-img"></div>
                <div class="industry-description">
                    <div class="title whitSBo fs20 blanco">
                        Servicios financieros
                    </div>
                    <div class="subtitle whitMe fs16 blanco">
                        ¿Cómo American Express utiliza las redes sociales para predecir
                        si vas a cancelar tu tarjeta?
                    </div>
                </div>
            </div>
            <div class="examples-industry" data-aos="zoom-in" data-aos-delay="300">
                <div class="industry-img"></div>
                <div class="industry-description">
                    <div class="title whitSBo fs20 blanco">
                        Medios y entretenimiento
                    </div>
                    <div class="subtitle whitMe fs16 blanco">
                        ¿Cómo Netflix utiliza etiquetado de metadatos para saber qué es lo que
                        ves y crear contenido relevante?
                    </div>
                </div>
            </div>
            <div class="examples-industry ejemplos-ocultos" data-aos="zoom-in" data-aos-delay="100">
                <div class="industry-img"></div>
                <div class="industry-description">
                    <div class="title whitSBo fs20 blanco">
                        Ventas
                    </div>
                    <div class="subtitle whitMe fs16 blanco">
                        ¿Por qué había tiendas o bien vendiendo todos los ejemplares de la revista
                        Time o solo vendiendo una pequeña fracción de su inventario?
                    </div>
                </div>
            </div>
            <div class="examples-industry ejemplos-ocultos" data-aos="zoom-in" data-aos-delay="200">
                <div class="industry-img"></div>
                <div class="industry-description">
                    <div class="title whitSBo fs20 blanco">
                        Ropa
                    </div>
                    <div class="subtitle whitMe fs16 blanco">
                        Cómo Kohl ha empleado la analítica para el targeting
                        en smartphones
                    </div>
                </div>
            </div>
            <div class="examples-industry ejemplos-ocultos" data-aos="zoom-in" data-aos-delay="300">
                <div class="industry-img"></div>
                <div class="industry-description">
                    <div class="title whitSBo fs20 blanco">
                        Tecnología
                    </div>
                    <div class="subtitle whitMe fs16 blanco">
                        ¿Cómo podría Amazon enviar algo antes de que compres?
                    </div>
                </div>
            </div>
        </div>
        <div class="button-industry">
            <a class="button-examples whitSBo fs16 vino4E" id="btn-examples">
                VER MÁS EJEMPLOS
            </a>
        </div>
    </div>


    <!-- Section no 7: Professor's -->
    <div class="professor-container">
        <div class="professor-title whitSBo fs32 negro19">
            Profesorado
        </div>
        <div class="professor-subtitle whitSBo fs24 negro4B">
            Director académico
        </div>
        <div class="professor">
            <div class="professor-img">
                <img src="assets/img/jpg/profesor-christopher-D.jpg" alt="Christopher-D.-Ittner">
            </div>
            <div class="professor-description">
                <span class="name whitSBo fs18 negro4B">
                    Christopher D. Ittner
                </span>
                <div class="position-work whitLi fs16 negro4B">
                    Profesor EY de Contabilidad; Presidente del
                    Departamento de Contabilidad, The Wharton
                    School
                </div>
                <div class="information whitLi fs16 negro4B">
                    Temas de investigación: contabilidad analítica,
                    bienes intangibles, medición de desempeño
                </div>
            </div>
            <div class="button-link">
                <a class="whitBo vino56 fs14"
                    href="https://executiveeducation.wharton.upenn.edu/faculty/christopher-ittner/" target="_blank"
                    rel="noopener noreferrer">
                    Más información
                </a>
            </div>
        </div>
        <div class="professor-subtitle whitSBo fs24 negro4B">
            Profesores adicionales
        </div>
        <div id="width-detect">
            <div class="profesor-cont">
                <div class="professor">
                    <div class="professor-img">
                        <img src="assets/img/jpg/profesor-Ron-Berman.jpg" alt="Ron-Berman,-PhD">
                    </div>
                    <div class="professor-description">
                        <span class="name whitSBo fs18 negro4B">
                            Ron Berman, PhD
                        </span>
                        <div class="position-work whitLi fs16 negro4B">
                            Profesor asistente de Marketing, The Wharton School
                        </div>
                        <div class="information whitLi fs16 negro4B">
                            Temas de investigación: marketing online, emprendedurismo, analítica de marketing,
                            mercadotecnia para motores de búsqueda, teoría de juegos, organización industrial
                        </div>
                    </div>
                    <div class="button-link">
                        <a class="whitBo vino56 fs14"
                            href="https://executiveeducation.wharton.upenn.edu/faculty/ron-berman/" target="_blank"
                            rel="noopener noreferrer">
                            Más información
                        </a>
                    </div>
                </div>
            </div>
            <div class="profesor-cont">
                <div class="professor">
                    <div class="professor-img">
                        <img src="assets/img/jpg/profesor-Matthew-Bidwell.jpg" alt="Matthew-Bidwell,-PhD">
                    </div>
                    <div class="professor-description">
                        <span class="name whitSBo fs18 negro4B">
                            Matthew Bidwell, PhD
                        </span>
                        <div class="position-work whitLi fs16 negro4B">
                            Profesor adjunto de Administración, The Wharton School
                        </div>
                        <div class="information whitLi fs16 negro4B">
                            Temas de investigación: administración de recursos humanos, trabajadores del conocimiento,
                            movilidad laboral
                        </div>
                    </div>
                    <div class="button-link">
                        <a class="whitBo vino56 fs14"
                            href="https://executiveeducation.wharton.upenn.edu/faculty/matthew-bidwell/" target="_blank"
                            rel="noopener noreferrer">
                            Más información
                        </a>
                    </div>
                </div>
            </div>
            <div class="profesor-cont">
                <div class="professor">
                    <div class="professor-img">
                        <img src="assets/img/jpg/profesor-Eric-Bradlow.jpg" alt="Eric-Bradlow,-PhD">
                    </div>
                    <div class="professor-description">
                        <span class="name whitSBo fs18 negro4B">
                            Eric Bradlow, PhD
                        </span>
                        <div class="position-work whitLi fs16 negro4B">
                            Profesor K.P. Chao; profesor de Marketing; director de la facultad, Wharton Customer
                            Analytics Initiative; presidente del departamento de Marketing de Wharton; profesor de
                            Economía; profesor en Educación; profesor en Estadística
                        </div>
                        <div class="information whitLi fs16 negro4B">
                            Temas de investigación: métodos de investigación en marketing, problemas de datos perdidos,
                            psicométricas
                        </div>
                    </div>
                    <div class="button-link">
                        <a class="whitBo vino56 fs14"
                            href="https://executiveeducation.wharton.upenn.edu/faculty/eric-bradlow/" target="_blank"
                            rel="noopener noreferrer">
                            Más información
                        </a>
                    </div>
                </div>
            </div>
            <div class="profesor-cont">
                <div class="professor">
                    <div class="professor-img">
                        <img src="assets/img/jpg/profesor-Peter-Fader.jpg" alt="Peter-Fader,-PhD">
                    </div>
                    <div class="professor-description">
                        <span class="name whitSBo fs18 negro4B">
                            Peter Fader, PhD
                        </span>
                        <div class="position-work whitLi fs16 negro4B">
                            Profesor EY de Contabilidad; Presidente del
                            Departamento de Contabilidad, The Wharton
                            School
                        </div>
                        <div class="information whitLi fs16 negro4B">
                            Temas de investigación: valor del ciclo de vida del cliente,
                            pronóstico de ventas para nuevos productos, datos de comportamiento
                        </div>
                    </div>
                    <div class="button-link">
                        <a class="whitBo vino56 fs14"
                            href="https://executiveeducation.wharton.upenn.edu/faculty/peter-fader/" target="_blank"
                            rel="noopener noreferrer">
                            Más información
                        </a>
                    </div>
                </div>
            </div>
            <div class="profesor-cont">
                <div class="professor">
                    <div class="professor-img">
                        <img src="assets/img/jpg/profesor Noah Gans.jpg" alt="Noah-Gans">
                    </div>
                    <div class="professor-description">
                        <span class="name whitSBo fs18 negro4B">
                            Noah Gans
                        </span>
                        <div class="position-work whitLi fs16 negro4B">
                            Profesor Anheuser-Busch de Ciencias de la Gestión; profesor de Operaciones, Información y
                            Decisiones y presidente del departamento, The Wharton School
                        </div>
                        <div class="information whitLi fs16 negro4B">
                            Temas de investigación: operaciones de servicio, procesos estocásticos, control de sistemas
                            de líneas de espera
                        </div>
                    </div>
                    <div class="button-link">
                        <a class="whitBo vino56 fs14"
                            href="https://executiveeducation.wharton.upenn.edu/faculty/noah-gans/" target="_blank"
                            rel="noopener noreferrer">
                            Más información
                        </a>
                    </div>
                </div>
            </div>
            <div class="profesor-cont">
                <div class="professor">
                    <div class="professor-img">
                        <img src="assets/img/jpg/profesor-Raghuram-Iyengar.jpg" alt="Raghuram-Iyengar,-PhD">
                    </div>
                    <div class="professor-description">
                        <span class="name whitSBo fs18 negro4B">
                            Raghuram Iyengar, PhD
                        </span>
                        <div class="position-work whitLi fs16 negro4B">
                            Profesor Miers-Busch, W‘1885; profesor de Marketing y Codirector de la facultad, Wharton
                            Customer Analytics Initiative (WCAI), The Wharton School
                        </div>
                        <div class="information whitLi fs16 negro4B">
                            Temas de investigación: fijación de precios, influencia en redes sociales, redes sociales
                        </div>
                    </div>
                    <div class="button-link">
                        <a class="whitBo vino56 fs14"
                            href="https://executiveeducation.wharton.upenn.edu/faculty/raghuram-iyengar/"
                            target="_blank" rel="noopener noreferrer">
                            Más información
                        </a>
                    </div>
                </div>
            </div>
            <div class="profesor-cont">
                <div class="professor">
                    <div class="professor-img">
                        <img src="assets/img/jpg/profesor-Sergei-Savin.jpg" alt="Sergei-Savin,-PhD">
                    </div>
                    <div class="professor-description">
                        <span class="name whitSBo fs18 negro4B">
                            Sergei Savin, PhD
                        </span>
                        <div class="position-work whitLi fs16 negro4B">
                            Profesor adjunto de Operaciones, Información y Decisiones, The Wharton School
                        </div>
                        <div class="information whitLi fs16 negro4B">
                            Temas de investigación: gestión de capacidad y pacientes en operaciones del sector salud,
                            modelos de difusión para nuevos productos y servicios, administración de ingresos
                        </div>
                    </div>
                    <div class="button-link">
                        <a class="whitBo vino56 fs14"
                            href="https://executiveeducation.wharton.upenn.edu/faculty/sergei-savin/" target="_blank"
                            rel="noopener noreferrer">
                            Más información
                        </a>
                    </div>
                </div>
            </div>
            <div class="profesor-cont">
                <div class="professor">
                    <div class="professor-img">
                        <img src="assets/img/jpg/profesor-Senthil-Veeraraghavan.jpg" alt="Senthil-Veeraraghavan">
                    </div>
                    <div class="professor-description">
                        <span class="name whitSBo fs18 negro4B">
                            Senthil Veeraraghavan
                        </span>
                        <div class="position-work whitLi fs16 negro4B">
                            Profesor de Operaciones, Información y Decisiones, The Wharton School
                        </div>
                        <div class="information whitLi fs16 negro4B">
                            Temas de investigación: operaciones empíricas de administración, operaciones analíticas,
                            operaciones administrativas, operaciones estratégicas, fijación de precios y administración
                            e ingresos, administración operativa de servicios, administración de cadena de suministros
                        </div>
                    </div>
                    <div class="button-link">
                        <a class="whitBo vino56 fs14"
                            href="https://executiveeducation.wharton.upenn.edu/faculty/senthil-veeraraghavan/"
                            target="_blank" rel="noopener noreferrer">
                            Más información
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Section no 8: Certificate Image Container. -->
    <div class="certificado-container">
        <div class="certificado-cont">
            <!-- Link to open the modal -->
            <a class="certificado-img" href="#ex1" rel="modal:open">
                <div>
                    <img src="assets/img/jpg/diploma-Wharton-Business-Analytics-large.jpg" alt="Certificado">
                </div>
            </a>
            <!-- Modal HTML embedded directly into document -->
            <div id="ex1" class="modal modal-certificado">
                <img src="assets/img/jpg/diploma-Wharton-Business-Analytics.jpg" alt="Certificado">
            </div>
            <div class="certificado-datos">
                <div class="certificado-title whitSBo fs32 blanco">
                    Certificado
                </div>
                <div class="certificado-subtitle witLi fs20 blanco">
                    Al concluir satisfactoriamente el programa, los participantes son
                    reconocidos con un certificado oficial de conclusión de estudios
                    respaldado por Wharton, University of Pennsylvania, Aresty
                    Institute of Executive Education.
                </div>
                <div class="certificado-button">
                    <a class="whitSBo fs14 blanco" href="http://bit.ly/2VQvwCg" target="_blank" rel="noopener noreferrer">
                        APLICAR
                        <!-- <img src="assets/img/svg/long-arrow-alt-right-solid.svg" alt="arrow"> -->
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Section Colaboración -->
    <div class="colaboracion-container">
        <div class="colaboracion-cont">
            <div class="colaboracion-img">
                <img src="assets/img/svg/emeritus-logo-complete.svg" alt="EMERITUS">
            </div>
            <div class="colaboracion-desc robotoRe fs16 negro17">
                Wharton Executive Education está colaborando con el proveedor de educación en línea EMERITUS Institute
                of Management
                para ofrecer una cartera de programas de alto impacto para profesionales que trabajan. Con más de 16,000
                estudiantes
                de más de 132 países, EMERITUS ofrece programas de educación gerencial con un modelo de enseñanza en
                vivo junto con
                trabajo en grupo y tareas calificadas. A través de esta colaboración, podemos ofrecer un amplio acceso
                al conocimiento
                de clase mundial por el que se conoce a la Escuela Wharton, en un entorno digital atractivo e
                interactivo.
            </div>
        </div>
    </div>


    <!-- AOS Animations inline Script -->
    <script>
        AOS.init();
        AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            //offset: 120, // offset (in px) from the original trigger point
            //delay: 0, // values from 0 to 3000, with step 50ms
            //duration: 400, // values from 0 to 3000, with step 50ms
            //easing: 'ease', // default easing for AOS animations
            once: false, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });
    </script>
    <script async type="text/javascript" src="../assets/js/gdpr.js"></script>
    <!-- Script para select de países -->
    <script type="text/javascript">
        populateCountries("country");
    </script>
</body>

</html>