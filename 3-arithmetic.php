<?php
//Arithmetic Operators + - * / ** %
/* increment / decrement
    ++,--

    Operator Precedence
    ()
    **
    * / %
    + _
*/
    $x=10;
    $y=2;
    $z=null;
    
    //addition
    $z=$x+$y;
    echo "Sum Of {$x} and {$y}={$z}<br>";

    //sqaure
    $square=null;
    $square=$x**2;
    echo "Square of {$x} is {$square}<br>";

    //increment
    $counter=0;
    $counter++;
    echo "$counter<br>";
?>