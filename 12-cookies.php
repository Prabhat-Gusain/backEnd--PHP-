<?php

    //cookies=information about the user stored in a user's web browser targeted advertisements,browsing preferences and other non sensititve data

    //setcookie(name, value, expiry, path, domain, secure, httponly);
    
    setcookie("fav_food","pizza",time()+86400,"/");
    
    setcookie("fav_drink","coffee",time()+86400,"/");
    
    setcookie("fav_desert","cheesecake",time()+86400,"/");
    
    foreach($_COOKIE as $key=>$value)
    {
        echo"{$key}={$value} <br>";
    }

    if(isset($_COOKIE["fav_food"]))
    {
        echo"Buy some {$_COOKIE["fav_food"]}";
    }
    else{
        echo"I dont know your favourite food";
    }
?>