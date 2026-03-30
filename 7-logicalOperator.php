<!-- logical operator=combine conditional statemenst 
&&=true if both condititons true
||=true if at least oone condition is true
!=true if false ,false if true  -->

<?php
    $temp=25;
    $cloudy=true;

    if($temp>=0 && $temp<=30){
        echo"the weather is good";
    }
    else{
        echo"The weather is bad";
    }

    if($cloudy)
        {
            echo"its cloudy";
        }
    else{
        echo"not cloudy";
    }
?>