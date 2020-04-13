<?php
require './Classes/OpenWheatherApi.php';
$openWheater = new OpenWheatherApi();
$clima = $openWheater->getClima();
?>

<html>
    <head>
        <title>Informações Climaticas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">  
    </head>
    <style>
        body{
            background-color: #b8daff;

        }  

    </style>

    <body>


        <!-- Menus -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex justify-content-center">
                <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Clima de Brusque <span class="sr-only">(current)</span></a>
                        </li>                 
                    </ul>
                </div>
        </nav>
        <!-- Tabelinha do Clima -->
        <div class="d-flex justify-content-center">

            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-4">Tabela Climatica</h1>
                <p class="lead">Uma tabela com varias informações sobre o clima da sua cidade.</p>
                <div class="row">
                    <div class="col-md-12"> 
                        <h3 class="featurette-heading" >Tempo em <?php echo $clima->cidade ?> </h3>                     
                        <h4 class="weather-widget__temperature">
                            <img class="weather-widget__img" src="https://openweathermap.org/img/wn/04d@2x.png" alt="Weather Brusque , BR" width="50" height="50"><?php echo $clima->getTemperaturaCelsius() ?> ºC</h4> 
                    </div>
                </div>


                <div class="d-flex justify-content-center">
                <table border="5" bgcolor="lightskyblue">
                    <tr>
                        <th><?php echo "Codigo"; ?></th>
                        <td><?php echo $clima->codCidade; ?></td>
                    </tr>
                    <tr>
                        <th> <?php echo "Cidade"; ?></th>
                        <td><?php echo $clima->cidade; ?></td>
                    </tr>
                    <tr>
                        <th> <?php echo "Temperatura em ºC"; ?></th>
                        <td><?php echo $clima->getTemperaturaCelsius(); ?></td>
                    </tr>
                    <tr>  
                        <th> <?php echo "Temperatura em ºF"; ?></th>
                        <td><?php echo $clima->getTemperaturaFahrenheit(); ?></td>
                    </tr>
                    <tr>
                        <th> <?php echo "Temperatura em ºK"; ?></th>
                        <td><?php echo $clima->temperatura; ?></td>
                    </tr>
                    <tr>
                        <th> <?php echo "Nascer do sol"; ?></th>
                        <td><?php echo $clima->getNascerdoSol(); ?></td>
                    </tr>
                    <tr>
                        <th> <?php echo "Por do Sol"; ?></th>
                        <td><?php echo $clima->getPordoSol(); ?></td>
                    </tr>
                    <tr> 
                        <th><?php echo "Velocidade do Vento" ?>  </th>
                        <td><?php echo $clima->velocidadeVento; ?> m/s</td>
                    </tr>
                    <tr> 
                        <th><?php echo "Humidade" ?>  </th>
                        <td><?php echo $clima->humidade; ?> %</td>
                    </tr>
                    <tr> 
                        <th><?php echo "Pressão do Ar" ?>  </th>
                        <td><?php echo $clima->pressao; ?> hpa</td>
                    <tr>
                        <th><?php echo "Descrição" ?>  </th>
                        <td><?php echo $clima->descricao; ?> </td>
                    </tr>
                </table>
            </div>
        </div>
</div>

        <!-- Fim da tabela -->            

        <br><br><br><br><br><br><br><br><br><br><br><br>




        <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script></body>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <footer class="container">
        <p class="float-right"><a href="#">Voltar ao topo</a></p>
        <p>&copy; 2017-2019 Compania &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
    </footer>
</body>
</html>

