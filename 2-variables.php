
<?php
//variables=a reusable conatiner that holds data like string,int,float,boolval
    $name="Prabhat Gusain"; //string
    $food="Burger"; //string
    $email="gmail@putin.com"; //string 
    $age=21; //integer
    $qnty=2;
    $perPrice=5.6;
    $gpa=3.5; //float
    $online=false; //boolean
    $forSale=true; //boolean 
    $total=null;

    echo "Hello {$name}<br>";
    echo "You like {$food}<br>";
    echo "Your email-id is :{$email}<br>";
    echo "you are {$age} years old<br>";
    echo "Your gpa is:{$gpa}<br>";
    echo "is person online:{$online}<br>";
    echo "is it for sale:{$forSale}<br>";
    

    echo "You ordered {$qnty} {$food}<br>";
    $total=$qnty*$perPrice;
    echo "your total bill is :\${$total}<br>";
?>