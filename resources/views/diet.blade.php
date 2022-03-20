<!DOCTYPE html>
<html lang = "es">
    <head>
        <meta charset = "utf-8">
        <title>FitnessClub</title>
        <link rel = "icon" href = "img/icons8-prelum.png">
        <meta name = "description" content = "Aprenderas a ejercitarse con un entrenador personal a distancia a un bajo precio. ">
        <meta name = "author" content = "Juan Manuel Aguilar Garrido, Jose Julian Celio Arellano">
        <meta name = "keywords" content = "html, css, bootstrap, laravel, javascript, trainer, personal, fit, fitness, club, health">
        <link rel="stylesheet" type = "text/css" href="css/user.css">
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
                        <a class="nav-link" href="PrincipalUser">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="diet">Generate Diet</a>
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
        <main>
            <section class ="row mt-5 mb-5 container-fluid">
                <div class="col-8 imc">
                    <h2 id ="titleI">Para calcular su indice de masa corporal, ingrese su estatura y peso.</h2>
                    <div class="row">
                        <div class="col-6">
                            <p class="text-muted">Sistema ingles</p>
                            <h3>Estatura</h3>
                            <p class="text-muted">En pulgadas: </p>
                            <input id="in" type="number">
                            <h3>Peso</h3>
                            <p class="text-muted">En libras: </p>
                            <input id="lb" type="number">
                            <input type="submit" id ="ingles" class="btn btn-primary" value="Calcular">
                        </div>
                        <div class="col-6">
                            <p class="text-muted">Sistema metrico</p>
                            <h3>Estatura</h3>
                            <p class="text-muted">En centimetros: </p>
                            <input id="cm" type="number" >
                            <h3>Peso</h3>
                            <p class="text-muted">En kilos: </p>
                            <input id="kg" type="number">
                            <input type="button"  id="metrico" class="btn btn-primary" value="Calcular">
                        </div>
                        <div class="col-12 mt-5">
                            <p id="resTxt">Resultado</p>
                            <textarea name="Resultado" id="resultado" cols="10" rows="2" readonly></textarea>
                        </div>
                    </div>
                </div>
                <div class ="col-4">
                    <table>
                        <tr>
                            <th>Composicion corporal</th>
                            <th>Indice de masa corporal IMC</th>
                        </tr>
                        <tr>
                            <td>Peso inferior al normal</td>
                            <td>Menos de 18.5</td>
                        </tr>  
                        <tr>
                            <td>Normal</td>
                            <td>18.5 - 24.9</td>
                        </tr> 
                        <tr>
                            <td>Peso superior al normal</td>
                            <td>25.0 - 29.9</td>
                        </tr> 
                        <tr>
                            <td>Obesidad</td>
                            <td>Mas de 30.0</td>
                        </tr> 
                    </table>
                    <div class ="mt-5 text-muted" id="infoAd"><p>Una medida de la obesidad se determina mediante el índice de masa corporal (IMC), que se calcula dividiendo los kilogramos de peso por el cuadrado de la estatura en metros (IMC = peso [kg]/ estatura [m2]). </p></div>
                </div>
            </section>
            <section class="row mt-5">
                <div class="col-6">
                    <h2>Alimentos sugeridos</h2>
                    <div class="bxslider">
                        <div id="first"><img width="600"src="{{asset('img/fit03.jpg')}}" title="Healthy food"></div>
                        <div id="second"><img src="{{asset('img/comidaFit02.jpg')}}" title="Healthy food"></div>
                        <div><img src="{{asset('img/comidaFit01.jpg')}}" title="Healthy food"></div>
                    </div>
                    <div class="dieta"></div>
                </div>
                <div class="col-6 text-justify inf">
                    <h2>¿Por qué una buena dieta es necesaria?</h2>
                    <p class="mt-3">Una dieta es la mejor manera de perder peso y además de una forma natural. Además, puede mejorar tu salud y tu composición corporal si la combinas con una buena rutina de ejercicio. El mejor modo de llegar a los valores nutricionalmente saludables es participando en una rutina de entrenamiento planeada y comer una dieta nutritiva y sana.

                        Una dieta saludable ayuda a que tus órganos y tejidos funcionen de manera efectiva. Sin una buena dieta, tu cuerpo es más propenso a contraer enfermedades, infecciones, fatiga y bajo rendimiento.</p>

                    <blockquote class="text-muted">"Si te cansas, aprende a descansar no a renunciar. "</blockquote>
                </div>
            </section>
        </main>
        <footer class="container-fluid justify-items-center">
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
        <script type="text/javascript" src="js/diet.js"></script>
        <script type ="text/javascript" src="js/map.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
    </body>
</html>


