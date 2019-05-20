<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Valentine - Day</title>
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
</head>
<body><br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p class="text center">Adivina la salida del siguente programa</p>
                        <img src="{{ asset('img/joke.png') }}" alt="">
                        <form id="form">
                            <div class="input-group">
                                <input type="text" class="form-control" id="resp" placeholder="Respuesta">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" id="send" type="button">Send!</button>
                                </span>
                            </div><!-- /input-group -->
                        </form>
                       <p>
                            <h6 class="text-center"><strong>Terminos y condiciones</strong></h6>
                            <ul>
                                <li class="text-danger">Tienes que ser discreta y mucha cautela</li>
                                <li>No me puedes hacer pregunta una vez que entres al sistema</li>
                                <li>Leer bien las pistas</li>
                                <li>Los DETALLES pueden estar en cualquier parte de la oficina</li>
                                <li>No puedes ver a traves de las camaras, de hacerlo pierdes todo!</li>
                                <li class="text-danger">Tienes para encontrar los DETALLES hasta las 4PM</li>
                                <li class="text-danger">SIN AYUDA, de lo contrario no sera tu detalle!</li>
                                <li class="text-danger">Prohibido googlear!!!!</li>
                                <li class="text-danger">
                                    Si no logras conseguir tus DETALLES, el dia siguiente me lo comere y compartire con
                                    todos en la oficina
                                </li>
                            </ul>
                       </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('js/joke.js') }}"></script>
</body>
</html>