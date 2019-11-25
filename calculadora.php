<?php include('db_connect_local.php');?>

<!DOCTYPE html>
<html>

    <?php include('template/header.php') ?>

    <main class="container center grey-text">

        <!-- CALCULATOR FORM -->
        <h4 class="center indigo-text">Calculator</h4>
        <form action="calculadora.php" class="white">
            <input type="number" name="number1" placeholder="1st number">
            <input type="number" name="number2" placeholder="2nd number">
            <select name="operator" class="browser-default">
                <option>Select one of the following.</option>
                <option>Add</option>
                <option>Subtract</option>
                <option>Multiply</option>
                <option>Divide</option>
                <option>Odd/Even</option>
            </select>
            <br/>
            <button name="submit" value="submit" type="submit" class="btn indigo lighten-2 white-text">Calculate</button>
        </form>
        <br/>

        <!-- RESULT -->
        <div class="container">
        <h5 class="ligther grey-4 grey-text center">
            <?php 
            if(isset($_GET['submit'])){
                $number1 = $_GET['number1'];
                $number2 = $_GET['number2'];
                $operator = $_GET['operator'];
                $result = "";
                $result2 = "";
                switch ($operator) {
                    case "Select one of the following.":
                        echo "You have to select one operation.";
                        break;
                    case "Add":
                        $result = $number1 + $number2;
                        echo $number1 . " + " . $number2 . " = " . $result; 
                        break;
                    case "Subtract":
                        $result = $number1 - $number2;
                        echo $number1 . " - " . $number2 . " = " . $result; 
                        break;
                    case "Multiply":
                        $result = $number1 * $number2;
                        echo $numero1 . " x " . $number2 . " = " . $result; 
                        break;
                    case "Divide":
                        $result = $number1 / $number2;
                        echo $number1 . " / " . $number2 . " = " . $result; 
                        break;
                    case "Odd/Even":
                        if ($number1 % 2) {
                            $result = "odd";
                        } else {
                            $result = "even";
                        }
                        if ($number2 % 2) {
                            $result2 = "odd";
                        } else {
                            $result2 = "even";
                        }
                        echo "Number " . $number1 . " is " . $result . ", while number " . $number2 . " is " . $result2 . ".";
                        break;
                }
            } 
            ?> </h5>
            </div>
    </main>

    <?php include('template/footer.php') ?>

</body>
</html>