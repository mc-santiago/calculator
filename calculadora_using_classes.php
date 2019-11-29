<?php 

include('db_connect_local.php');

class Calculator {
    // Properties
    private $number1, $number2;

    // Constructor
    function __construct ($number1, $number2) {
        $this->num1 = $number1;
        $this->num2 = $number2;
    }

    //Methods
    public function add() {
        return $this->num1 + $this->num2;
    }

    public function subtract() {
        return $this->num1 - $this->num2;
    }

    public function multiply() {
        return $this->num1 * $this->num2;
    }

    public function divide() {
        return $this->num1 / $this->num2;
    }

    public function odd_even_num1() {
        if ($this->num1 % 2) {
            return "odd";
        } else {
            return "even";
        }
    }
    
    public function odd_even_num2() {
        if ($this->num2 % 2) {
            return "odd";
        } else {
            return "even";
        }
    }

} // end of class Calculator

?>

<!DOCTYPE html>
<html>

    <?php include('template/header.php') ?>

    <main class="container center grey-text">

        <!-- CALCULATOR FORM -->
        <h4 class="center indigo-text">Calculator</h4>
        <form action="calculadora_using_classes.php" class="white">
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
                
                $calculator = new Calculator($number1, $number2);

                switch ($operator) {
                    case "Select one of the following.":
                        echo "You have to select one operation.";
                        break;
                    case "Add":
                        echo $number1 . " + " . $number2 . " = " . $calculator->add();
                    break;
                    case "Subtract":
                        echo $number1 . " - " . $number2 . " = " . $calculator->subtract();
                    break;
                    case "Multiply":
                        echo $number1 . " * " . $number2 . " = " . $calculator->multiply();
                    break;
                    case "Divide":
                        echo $number1 . " / " . $number2 . " = " . $calculator->divide();
                    break;
                    case "Odd/Even":
                        echo "Number " . $number1 . " is " . $calculator->odd_even_num1() . ", while number " . $number2 . " is " . $calculator->odd_even_num2() . ".";
                    break;
                }
            }
            ?>
            </h5>
        </div>
    </main>

    <?php include('template/footer.php') ?>

</body>
</html>
