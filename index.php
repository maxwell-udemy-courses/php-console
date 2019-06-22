<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Console</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PHP Console</a>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Consola de PHP</h1>
            <p class="lead">Esto es una consola...</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-info text-white">
                    <h3>Clase: Condicional SWITCH</h3> <br>
                    <?php
                        $num = 8;

                        switch($num){
                            case 1:
                                echo "La calificación es muy baja";
                                break;
                            case 2:
                            case 4:
                                echo "La calificación sigue siendo baja!";
                                break;
                            case 6:
                                echo "La calificación es mediocre!";
                                break;
                            case 8:
                                echo "La calificación es buena!";
                                break;
                            case 10:
                                echo "La calificación es excelente!";
                                break;
                            default:
                                echo "La calificación no es válida";
                        }
                        
                        /*
                        if($num == 1){
                            echo "La calificación es muy baja";
                        } else if($num == 2 || $num == 4) {
                            echo "La calificación sigue siendo baja!";
                        } else if($num == 6) {
                            echo "La calificación es mediocre!";
                        } else if($num == 8) {
                            echo "La calificación es buena!";
                        } else if($num == 10) {
                            echo "La calificación es excelente!";
                        } else {
                            echo "La calificación no es válida";
                        }
                        */
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Clase: Condicional IF</h3> <br>
                    <?php
                        $name = "Max";
                        $year = 2991;

                        if($year > 1950 && $year < 2019){
                            echo "Estas viviendo en esta epoca! <br>";
                        }

                        if($name == "Max" && $year == 1990){
                            echo "Sos el indicado!";
                        } else if ($name == "Maxi" && $year < 2019) {
                            echo "Podrías ser el indicado...";
                        } else {
                            echo "No sos el indicado...";
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-info text-white">
                    <h3>Clase: Operadores</h3> <br>
                    <?php 
                        $num1 = 1;
                        $num2 = 3;
                        //$resultado = $num1 + $num2;

                        $num1++;
                        //$num2--;

                        echo "El resultado de la suma es: " . ($num1 + $num2) . "<br>";
                        echo "El resultado de la resta es: " . ($num1 - $num2) . "<br>";
                        echo "El resultado de la multiplicacion es: " . ($num1 * $num2) . "<br>";
                        echo "El resultado de la division es: " . ($num1 / $num2) . "<br>";
                        echo "El resultado del modulo es: " . ($num1 % $num2) . "<br>";
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Clase: Variables y tipos de datos</h3> <br>
                    <?php 
                        $name = "Max";
                        $isOld = true;
                        $year = 1990;
                        $km = 54.4; 

                        echo "Hola " . $name . ", naciste en el año " . $year . ", y estas a " . $km . " kilometros." . "<br>";
                        echo "La variable name es de tipo: " . gettype($name);
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>