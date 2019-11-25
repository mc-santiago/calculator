<?php 

include('db_connect_local.php');

?>

<!DOCTYPE html>
<html>

<?php include('template/header.php') ?>

<main class="container center grey-text">
    <!-- FORMULARIO CALCULADORA -->
    <h4 class="center indigo-text">Calculadora</h4>
    <form action="calculadora.php" class="white">
        <input type="text" name="numero1" placeholder="1er número">
        <input type="text" name="numero2" placeholder="2do número">
        <select name="operador" class="browser-default">
            <option>Seleccionar tipo de calculo.</option>
            <option>Sumar</option>
            <option>Restar</option>
            <option>Multiplicar</option>
            <option>Dividir</option>
            <option>Par_Impar</option>
        </select>
        <br/>
        <button name="submit" value="submit" type="submit" class="btn indigo lighten-2 white-text">Calcular</button>
    </form>
    <br/>
    <!-- RESPUESTA -->
    <div class="container">
    <h5 class="ligther grey-4 grey-text center">
        <?php 
        if(isset($_GET['submit'])){
            $numero1 = $_GET['numero1'];
            $numero2 = $_GET['numero2'];
            $operador = $_GET['operador'];
            switch ($operador) {
                case "Seleccionar tipo de calculo.":
                    echo "No has seleccionado un metodo para hacer el calculo.";
                    break;
                case "Sumar":
                    $resultadoSumar = $numero1 + $numero2;
                    echo "El resultado de sumar " . $numero1 . " y " . $numero2 . " es " . $resultadoSumar . "."; 
                    break;
                case "Restar":
                    $resultadoRestar = $numero1 - $numero2;
                    echo "El resultado de restar " . $numero1 . " y " . $numero2 . " es " . $resultadoRestar . "."; 
                    break;
                case "Multiplicar":
                    $resultadoMultiplicar = $numero1 * $numero2;
                    echo "El resultado de multiplicar " . $numero1 . " por " . $numero2 . " es " . $resultadoMultiplicar . "."; 
                    break;
                case "Dividir":
                    $resultadoDividir = $numero1 / $numero2;
                    echo "El resultado de dividir " . $numero1 . " entre " . $numero2 . " es " . $resultadoDividir . "."; 
                    break;
                case "Par_Impar":
                    if ($numero1 % 2) {
                        $resultadoParNum1 = "impar";
                    } else {
                        $resultadoParNum1 = "par";
                    }
                    if ($numero2 % 2) {
                        $resultadoParNum2 = "impar";
                    } else {
                        $resultadoParNum2 = "par";
                    }
                    echo "El número " . $numero1 . " es " . $resultadoParNum1 . " y el número " . $numero2 . " es " . $resultadoParNum2 . ".";
                    break;
            }
        } 
        ?> </h5>
        </div>
    </main>

    <?php include('template/footer.php') ?>

</body>
</html>