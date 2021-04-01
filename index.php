<?php
if(isset($_GET['operation'])){
    $x = $_GET['num1'];
    $y = $_GET['num2'];
    $oper = $_GET['operation'];

    switch ($oper) {
        case 'add':
            $result = $x + $y;
            break;
        case 'sub':
            $result = $x - $y;
            break;
        
        case 'div':
            $result = $x / $y;
            break;
            
        case 'mult':
            $result = $x * $y;
            break;
         
        case 'mod':
            $result = $x % $y;
            break;
            
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
<center>
    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="GET">
    <div></div>
        <label for="num1">First Number</label>
        <input type="number" name="num1" id="number1" value="<?= $x ?>"><br><br>
    </div>
    <div></div>
        <label for="num2">Second Number</label>
        <input type="number" name="num2" id="number2" value="<?= $y ?>"><br><br>
    </div>
    <div>
        <label for="result">Result</label>
        <input type="number" id="result"  value="<?= $result ?>" disabled><br><br>
    </div>
    <div>
        <input type="submit" name="operation" value="add">
        <input type="submit" name="operation" value="sub">
        <input type="submit" name="operation" value="div">
        <input type="submit" name="operation" value="mult">
        <input type="submit" name="operation" value="mod">
    </div>
    
    </form>
    </center>
</body>
</html>