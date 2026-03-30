<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Function in PHP</title>
</head>
<body>
    <form action="5-mathFunction.php" method="post">
        <label>X:</label>
        <input type="number" name="number">
        <label>Y:</label>
        <input type="number" name="numberY">
        <label>Z:</label>
        <input type="number" name="numberZ">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

<?php
    $x=$_POST["number"];
    $total=null;
    //abs - absolute value function
    //negative int or float value ko positive mai display kr ta hai
    $total=abs($x);

    //round function 
    $total2=null;
    $total2=round($x);
    echo $total ."<br>";
    echo $total2 ."<br>";


    $Y=$_POST["numberY"];
    $Z=$_POST["numberZ"];
    $totalA=null;

    $totalA=max($x ,$Y ,$Z);
    echo $totalA;    
?>