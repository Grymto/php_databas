<?php

function getConnection(){
    $host = "localhost";
    $port = 3306;
    $database = "mittprojekt";
    $username = 'root';
    $password = '';

    $connection = new mysqli($host,$username,$password,$database,$port );


    if($connection ->connect_error != null){
        die('anslutningen misslyckades:' . $connection ->connect_error);
    }
    else {
        echo 'anslutning lyckades' ;
        return $connection;
        
    }




};