<?php
    $error = "";
    $x = "";
    $y = "";
    $result = "";
    if(isset($_GET['operation'])){
        $x = $_GET['num1'];
        $y = $_GET['num2'];
        $op = $_GET['operation'];
        
        if(is_numeric($x) && is_numeric($y)){
            switch($op){
                case 'add' : $result = $x + $y;
                break;
                case 'sub' : $result = $x - $y;
                break;
                case 'mul' : $result = $x * $y;
                break;
                case 'div' : $result = $x / $y;
                break;
            }    
        }
        else{
            $error = "Enter numbers first";
        }
       
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1> <?= $error ?> </h1>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
    <!-- num 1 -->
    <div>
        <label for="num1">Number 1</label>
        <input type="number" name="num1" id="num1" value="<?= $x ?>">
    </div>
    <!-- num 2 -->
    <div>
        <label for="num2">Number 2</label>
        <input type="number" name="num2" id="num2" value="<?= $y ?>">
    </div>
    <!-- result -->
    <div>
        <label for="res">Result</label>
        <input type="number" id="num1" value="<?= $result ?>" disabled>
    </div>
    <!-- operation -->
    <div>
        <input type="submit" value="add" name="operation">
        <input type="submit" value="sub" name="operation">
        <input type="submit" value="mul" name="operation">
        <input type="submit" value="div" name="operation">
    </div>
</form>
</body>
</html>