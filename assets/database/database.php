<?php
//CONNECT TO MYSQL DATABASE USING MYSQLI
    
function connection(){
    $link = mysqli_connect("localhost", "root", "", "youcodegame");

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }


    return $link;
}

?>