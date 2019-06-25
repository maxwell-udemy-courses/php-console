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
                <div class="col-6">
                    <div class="p-3 m-2 bg-info text-white">
                        <h4>Formularios GET</h4> <br>
                        <form class="form-inline" method="get" action="#">
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="saludo" class="sr-only">Saludo</label>
                                <input type="text" class="form-control" id="saludo" name="saludo" placeholder="Di algo...">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
                        </form>
                    </div>
                </div>

                <div class="col-6">
                    <div class="p-3 m-2 bg-success text-white">
                        <h4>Formularios GET</h4> <br>
                        <?php
                            if(isset($_GET['saludo'])){
                                echo $_GET['saludo'];
                            } else {
                                echo "Esperando saludo...";
                            }
                        ?>
                    </div>
                </div>
        </div>

        <div class="row">
                <div class="col-6">
                    <div class="p-3 m-2 bg-info text-white">
                        <h4>Calculadora Form</h4> <br>
                        <form class="form-inline" method="post" action="#">
                            <div class="form-group mx-sm-1 mb-2">
                                <input type="number" class="form-control" id="num1" name="num1">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                                <input type="number" class="form-control" id="num2" name="num2">
                            </div>

                            <button type="submit" class="btn btn-primary mb-2">Sumar</button>
                        </form>
                    </div>
                </div>

                <div class="col-6">
                    <div class="p-3 m-2 bg-success text-white">
                        <h4>Calculadora Result</h4> <br>
                        <?php
                            if(isset($_POST['num1']) && isset($_POST['num2'])){
                                $result = $_POST['num1'] + $_POST['num2'];
                                echo "El resultado es " . $result;
                            } else {
                                echo "Esperando calculo...";
                            }
                        ?>
                    </div>
                </div>
        </div>

        <div class="row">
                <div class="col-6">
                    <div class="p-3 m-2 bg-info text-white">
                        <h4>Formularios POST</h4> <br>
                        <form class="form-inline" method="post" action="#">
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="saludo" class="sr-only">Saludo</label>
                                <input type="text" class="form-control" id="saludo" name="saludo" placeholder="Di algo...">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
                        </form>
                    </div>
                </div>

                <div class="col-6">
                    <div class="p-3 m-2 bg-success text-white">
                        <h4>Formularios POST</h4> <br>
                        <?php
                            if(isset($_POST['saludo'])){
                                echo $_POST['saludo'];
                            } else {
                                echo "Esperando saludo...";
                            }
                        ?>
                    </div>
                </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-dark text-white">
                    <h4>Calculadora</h4> <br>
                    <?php
                        class Calculadora {
                            public static function sumar($num1, $num2){
                                return $num1 + $num2;
                            }

                            public static function restar($num1, $num2){
                                return $num1 - $num2;
                            }
                        }

                        echo "El resultado de la suma es " . Calculadora::sumar(1,1) . "<br>";
                        echo "El resultado de la resta es " . Calculadora::restar(5,1) . "<br>";

                        /*
                        $calc = new Calculadora();
                        echo "El resultado de la suma es " . $calc->sumar(1,1) . "<br>";
                        echo "El resultado de la resta es " . $calc->restar(5,1) . "<br>";
                        */
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-info text-white">
                    <h4>Herencia</h4> <br>
                    <?php
                        class Masscota {
                            public $nombre;
                            public $patas;

                            function __construct($nombre, $patas){
                                $this->nombre = $nombre;
                                $this->patas = $patas;
                            }

                            function eat(){
                                return "Estoy comiendo!";
                            }
                        }

                        class Perro extends Masscota {
                            function run(){
                                return "Estoy corriendo!";
                            }
                        }

                        class Gato extends Masscota {

                        }

                        $tommy = new Perro("Tommy", 4);
                        $rocky = new Gato("Rocky", 4);

                        echo $tommy->run() . "<br>";
                        echo $rocky->eat() . "<br>";
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-success text-white">
                    <h4>POO</h4> <br>
                    <?php
                        class Mascota {
                            public $nombre;
                            public $tipo;
                            public $patas;

                            function __construct($nombre, $tipo, $patas){
                                $this->nombre = $nombre;
                                $this->tipo = $tipo;
                                $this->patas = $patas;
                            }

                            public function getDesc(){
                                if($this->patas == 0){
                                    return "Tu mascota es un " . $this->tipo . " y se llama " . $this->nombre . " y no tiene patas.";
                                } else {
                                    return "Tu mascota es un " . $this->tipo . " y se llama " . $this->nombre . " y tiene " . $this->patas . " patas.";
                                }
                            }
                        }

                        $perro = new Mascota("Tommy", "perro", 4);
                        $gato = new Mascota("Sarah", "gato", 4);
                        $pez = new Mascota("Flipy", "pez", 0);

                        echo $perro->getDesc() . "<br>";
                        echo $gato->getDesc() . "<br>";
                        echo $pez->getDesc();
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-warning text-white">
                    <h4>Funciones</h4> <br>
                    <?php
                        function calc($sign, $num1, $num2){
                            switch($sign){
                                case "+":
                                    return $num1 + $num2;
                                    break;
                                case "-":
                                    return $num1 - $num2;
                                    break;
                                default:
                                    return 0;
                            }
                        }

                        $result = calc("-", 3, 7);

                        echo "El resultado es: " . $result;
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-primary text-white">
                    <h4>Break</h4> <br>
                    <?php
                        $names = array("Max", "Tom", "Sarah", "Rocky");

                        foreach($names as $name){
                            if($name == "Sarah"){
                                break;
                            }

                            echo $name . "<br>";
                        }
                    ?>
                </div>
            </div>

            <div class="col-6">
                <div class="p-3 m-2 bg-info text-white">
                    <h4>Continue</h4> <br>
                    <?php
                        $names = array("Max", "Tom", "Sarah", "Rocky");

                        foreach($names as $name){
                            if($name == "Sarah"){
                                continue;
                            }

                            echo $name . "<br>";
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="p-3 m-2 bg-primary text-white">
                    <h4>Arrays</h4> <br>
                    <?php
                        $nums = array(1,4,6,7);

                        for($i = 0; $i < count($nums); $i++){
                            echo $nums[$i] . "<br>";
                        }
                    ?>
                </div>
            </div>

            <div class="col-4">
                <div class="p-3 m-2 bg-success text-white">
                    <h4>Arrays</h4> <br>
                    <?php
                        $names = array("Max", "Tom", "Sarah", "Rocky");

                        for($i = 0; $i < count($names); $i++){
                            echo $names[$i] . "<br>";
                        }
                    ?>
                </div>
            </div>

            <div class="col-4">
                <div class="p-3 m-2 bg-info text-white">
                    <h4>Foreach</h4> <br>
                    <?php
                        $names = array("Max", "Tom", "Sarah", "Rocky");

                        foreach($names as $name){
                            echo $name . "<br>";
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-success text-white">
                    <h3>Bucle While</h3> <br>
                    <?php
                        $num = 0;

                        while($num <= 5){
                            echo "El numero es: " . $num . "<br>";
                            $num++;
                        }
                    ?>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 m-2 bg-warning text-white">
                    <h3>Bucle For</h3> <br>
                    <?php
                        for($i = 0; $i <= 5; $i++){
                            echo "El numero es: " . $i . "<br>";
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-info text-white">
                    <h3>Condicional SWITCH</h3> <br>
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
                    <h3>Condicional IF</h3> <br>
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
                    <h3>Operadores</h3> <br>
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
                    <h3>Variables y tipos de datos</h3> <br>
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