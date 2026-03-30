<!-- if statement=if some condition is true ,do something 
if false don't do it  -->

<?php
    $age=21;

    if($age>=18)
    {
        echo"You may enter this site";
    }
    elseif($age==0){
        echo"Grow up kid";   
    }
    else{
        echo"You must be 18+ to enter this site";
    }
?>