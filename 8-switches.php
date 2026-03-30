<!-- switch=replacement to using many elseif statements
more efficient ,less code to write -->

<?php
    $grade="A";

    switch($grade){
        case "A":
            echo"You did great";
            break;
        case "B":
            echo"You did good";
            break;
        case "C":
            echo"You did Okay";
            break;
        case "D":
            echo"You did poor";
            break;
        case "E":
            echo"You Failed :)";
            break;
        default:
            echo"{$grade}not valid";
    }
?>