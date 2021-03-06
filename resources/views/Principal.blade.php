<!DOCTYPE html>
<html lang = "es">
    <head>
        <meta charset = "utf-8">
        <title>FitnessClub</title>
        <link rel = "icon" href = "img/icons8-prelum.png">
        <meta name = "description" content = "Aprenderas a ejercitarse con un entrenador personal a distancia a un bajo precio. ">
        <meta name = "author" content = "Juan Manuel Aguilar Garrido, Jose Julian Celio Arellano">
        <meta name = "keywords" content = "html, css, bootstrap, laravel, javascript, trainer, personal, fit, fitness, club, health">
        <link rel="stylesheet" type = "text/css" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/iconos.css">
        <script src="https://kit.fontawesome.com/b9d17ab13b.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light container-fluid">
                <div class="container">
                    <div id = "imageLogo">
                        <img src="{{asset('img/logoFit.png')}}" alt="Logo">
                    </div>
                    <a class="navbar-brand" href="#">FitnessClub</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item active">
                        <a class="nav-link" href="Principal">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                      </ul>
                    </div>
                  </nav>
                </div>
        </header>
        <main style="border:1px solid;">
            <section class ="options row justify-content-center">
                <div class="col-lg-3 col-md-3 col-sm-12 text-center">
                    <h2>1-ON-1 TRAINING</h2>
                    <p>SERVICIOS DE ENTRENAMIENTO PERSONAL DE ??LITE BASADOS EN RESULTADOS EN EL ??REA DE BOULDER, CO.</p>
                    <button type="button" class="btn btn-dark">START HERE</button>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 text-center middle">
                    <h2>ONLINE TRAINING</h2>
                    <p>PROGRAMAS EN L??NEA DE FUERZA Y ACONDICIONAMIENTO ALTAMENTE EFECTIVOS PARA HOMBRES DE 50 O MAS.</p>
                    <button type="button" class="btn btn-dark">START HERE</button>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 text-center">
                    <h2>CORPORATE FITNESS</h2>
                    <p>CONSULTAR, DESARROLLAR Y SUPERVISAR PROGRAMAS DE EJERCICIO EN GRUPO PARA EMPRESAS Y SUS EMPLEADOS.</p>
                    <button type="button" class="btn btn-dark">START HERE</button>
                </div>
            </section> 
            <!--Second section-->
            <section class="container-fluid row mt-5 second">
                <div id="info" class = "col-lg-8 col-sm-12 text-justify">
                    <h2>ENTRENAMIENTO PERSONAL EN BOULDER</h2>
                    <h3>DISE??AMOS PROGRAMAS DE FITNESS PERSONALIZADOS</h3>
                    <h4>PARA INDIVIDUOS Y EQUIPOS CORPORATIVOS QUE QUIEREN RESULTADOS SERIOS.</h4>
                    <p>Serious Fitness ha estado proporcionando entrenamiento personal 1 a 1 en Boulder, CO desde 2003 y tambi??n ofrece una plataforma de entrenamiento personal en l??nea para individuos en todo el mundo. 
                        Este programa de entrenamiento ??nico est?? dise??ado para hombres mayores de 50 a??os e incorpora modalidades de fuerza y ??????acondicionamiento altamente efectivas para mejorar todos los aspectos de su salud.
                    </p>
                    <br>
                    <p>Nuestra misi??n es ayudar a las personas a disfrutar de la vida al m??ximo mediante la supervisi??n y creaci??n de programas de acondicionamiento f??sico dise??ados por expertos. 
                        Ya sea para mejorar el desarrollo muscular magro y la p??rdida de grasa, aplastarlo en las pistas de esqu?? y senderos para bicicletas de monta??a, correr 10k m??s r??pido o simplemente lucir mejor desnudo, valoramos la necesidad de una persona de mejorar su calidad de vida.
                    </p>
                </div>
                <div id = "trainer" class = "col-lg-4 col-sm-12">
                    <img src="{{asset('img/trainer.png')}}" alt="Trainer" title ="Trainer">
                </div>
            </section>
            <!--Third section-->
            <section id = "about" class ="container-fluid row mt-5 third justify-items-center">
                <div class ="col-sm-12 text-justify about">
                    <div class="text col-lg-5 col-sm-8 text-justify">
                        <h2>ABOUT</h2>
                        <p>ENTIENDO QUE LA MAYOR??A DE MIS CLIENTES SON ALTOS ARCHIVADORES Y EJECUTIVOS DE EMPRESAS SECCESOS CON HORARIOS EXIGENTES Y CONF??AN EN MI ORIENTACI??N AL SEGUIR UN PLAN DE FITNESS BIEN DISE??ADO.
                        </p>
                    </div>
                </div>
                <div class="row text-justify meet">
                    <div class="content row container-fluid">
                        <div class="description col-lg-8 text-justify">
                            <h2>CONOCE A TU ENTRENADOR</h2>
                            <p>
                                Desde los 15 a??os soy una "rata de gimnasio" certificada. Me enamor?? de la fuerza a una edad temprana porque me ayud?? a superar un complejo de imagen corporal. 
                                Adem??s, dio sus frutos a lo grande mientras jugaba f??tbol y b??isbol. Seguir un programa de ejercicios me ense???? disciplina y coherencia. Ambos h??bitos me ayudaron a ganar algo de dinero como emprendedor a finales de los 20.
                            </p>
                            <br>
                            <p>A los 52 a??os puedo decir honestamente que no perd?? demasiados d??as en el gimnasio ni particip?? en mis otras formas de ejercicio favorito como el ciclismo, la carrera y el esqu?? de fondo.</p>
                            <br>
                            <h3>La disciplina con un programa de ejercicios es clave y puedo ayudarlo con eso. Lo garantizo.</h3>
                        </div>
                        <div class="trainer col-3 text-justify justify-items-center">
                            <img src="{{asset('img/rock.jpg')}}" alt="Trainer" title="The Rock">
                            <p id = "name">The rock</p>
                            <p id = "des">FOUNDER AND HEAD COUCH</p>
                        </div>
                    </div>
                </div>
            </section>
            <!--fourth Section-->
            <!--fourth Section-->
            <section id = "services" class = "container-fluid row mt-5 fourth justify-items-center">
                <div class ="info_Packages col-12 text-justify">
                    <h2>PAQUETES DE ENTRENAMIENTO PERSONAL</h2>
                    <p>Entendemos que su vida profesional depende de una productividad y un rendimiento excepcionales. Probablemente espere el mismo tipo de resultados en su estado f??sico. Podemos garantizar que nuestros programas lo har??n m??s delgado, m??s musculoso y lo ayudar??n a controlar el dolor de articulaciones si puede comprometerse a un trabajo constante durante 8 semanas.
                    </p>
                </div>
                <div class="img_packages row text-justify">
                <img class="col-4" src="{{asset('img/vigor.jpg')}}" alt="">
                <img class="col-4" src="{{asset('img/vitality.jpg')}}" alt="">
                <img class="col-4" src="{{asset('img/vip.jpg')}}" alt="">
                </div>
                <div class="packages row text-center mt-5 justify-items-center">
                    <div id ="tables" class="row container-fluid">
                        <table class ="col-4 vigor">
                            <tr>
                                <th>VIGOR</th>
                            </tr>
                            <tr>
                                <td><span>$300</span><p>Por mes</p></td>
                            </tr>
                            <tr>
                                <td><p>Entrenamiento personal en l??nea para hombres mayores de 50 a??os con el objetivo de fortalecerse, aumentar la masa muscular magra, disminuir la grasa corporal y ser m??viles. </p>
                                </td>
                            </tr>
                            <tr>
                                <td><p>-</p></td>
                            </tr>
                            <tr>
                                <td><p>Evaluaci??n de video inicial</p></td>
                            </tr>
                            <tr>
                                <td><p>Dise??o de programa personalizado</p></td>
                            </tr>
                            <tr>
                                <td><p>Soporte semanal por correo electr??nico</p></td>
                            </tr>
                            <tr>
                                <td><p>Soporte por correo electr??nico quincenal</p></td>
                            </tr>
                            <tr>
                                <td><p>Acceso a aplicaciones para tel??fonos inteligentes</p></td>
                            </tr>
                            <tr>
                                <td><p>Biblioteca de ejercicios</p></td>
                            </tr>
                            <tr>
                                <td><p>-</p></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-dark">START HERE</button></td>
                            </tr>
                        </table>
                        <!--2nd table-->
                        <table class ="col-4 vitality">
                            <tr>
                                <th>VITALITY</th>
                            </tr>
                            <tr>
                                <td><span>$425</span><p>Por mes</p></td>
                            </tr>
                            <tr>
                                <td><p>Entrenamiento personal en l??nea para hombres mayores de 50 a??os que desean ser m??s fuertes, m??s ??giles y m??s m??viles con mayor responsabilidad.</p>
                                </td>
                            </tr>
                            <tr>
                                <td><p>Pantalla de movimiento guiado</p></td>
                            </tr>
                            <tr>
                                <td><p>Evaluaci??n de video inicial y mensual </p></td>
                            </tr>
                            <tr>
                                <td><p>Dise??o de programa personalizado</p></td>
                            </tr>
                            <tr>
                                <td><p>Soporte semanal por correo electr??nico</p></td>
                            </tr>
                            <tr>
                                <td><p>Llamada telef??nica semanal</p></td>
                            </tr>
                            <tr>
                                <td><p>Acceso a aplicaciones para tel??fonos inteligentes</p></td>
                            </tr>
                            <tr>
                                <td><p>Biblioteca de ejercicios</p></td>
                            </tr>
                            <tr>
                                <td><p>Consejos diarios</p></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-dark">START HERE</button></td>
                            </tr>
                        </table>
                        <!--3th table-->
                        <table class ="col-4 vip">
                            <tr>
                                <th>VIP</th>
                            </tr>
                            <tr>
                                <td><span>$95</span><p>Por sesion</p></td>
                            </tr>
                            <tr>
                                <td><p>Entrenamiento personal en l??nea para hombres mayores de 50 a??os que desean ser m??s fuertes, m??s ??giles y m??s m??viles con mayor responsabilidad.</p>
                                </td>
                            </tr>
                            <tr>
                                <td><p>Sesiones de entrenamiento en el gimnasio</p></td>
                            </tr>
                            <tr>
                                <td><p>Coaching experto en fuerza y ??????acondicionamiento </p></td>
                            </tr>
                            <tr>
                                <td><p>Programas de ejercicio personalizados</p></td>
                            </tr>
                            <tr>
                                <td><p>Soporte semanal por correo electr??nico</p></td>
                            </tr>
                            <tr>
                                <td><p>Soporte telef??nico semanal</p></td>
                            </tr>
                            <tr>
                                <td><p>Acceso a aplicaciones para tel??fonos inteligentes</p></td>
                            </tr>
                            <tr>
                                <td><p>Biblioteca de ejercicios</p></td>
                            </tr>
                            <tr>
                                <td><p>Consejos diarios</p></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-dark">START HERE</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
            <!--Section contact-->
            <section id ="contact" class ="container-fluid row mt-5 contact justify-items-center">
                
                <div class ="col-4">
                    <form action="{{url('Principal/send')}}" method="POST">
                        {{ csrf_field() }}
                        <legend>CONTACT US</legend>
                        <p><span>*</span> INDICATES REQUIRED FIELD</p>
                        <label for="name">Name <span>*</span></label>
                        <input id="name" name="name" type="text" class="form-control col-12 mb-4" placeholder="Ingrese su nombre..." maxlength="20" required>
                        <label for="email">Email <span>*</span></label>
                        <input type="email" id="email" name="email" class="form-control col-12 mb-4" placeholder="Ingrese su correo... " required>
                        <label for="comment">Comment <span>*</span></label>
                        <textarea style="resize: none;" name="comment" class=" col-12 mb-4" rows="10" cols="50" required></textarea>
                        <input type="submit" name="submit" class="form-control btn btn-primary" value = "Submit">
                    </form>
                    
                </div>
                <div class ="col-8">
                    <div class ="row">
                        <div class="col-12">
                            <h2>ADDRESS</h2>
                            <p>Av. 1??? de Mayo s/n, El Ranchito, 36559 Irapuato, Gto.</p>
                        </div>
                        <div class ="col-6">
                            <h2>TELEPHONE</h2>
                            <p>4298765467</p>
                        </div>
                        <div class="col-6">
                            <h2>EMAIL</h2>
                            <p>fitnessClub1234@outlook.com</p>
                        </div>
                        <div id="map" class ="col-12 mt-3">
                            <h2>Mapa</h2>
                        </div>
                    </div>
                </div>
            </section>
     
        
        <footer class="container-fluid row justify-items-center">
            <div class="social-container bg-light col-12">
                <ul>
                    <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.pinterest.es/" target="_blank" class="pinteres"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="https://www.linkedin.com/" target="_blank" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class=" col-12 bg-light text-center pb-3">
                <address>Guanajuato, Mexico</address>    
                <small>&copy; All rights are reserved. </small>
            </div>
        </footer>
        <script type ="text/javascript" src="js/map.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
    </body>
</html>


