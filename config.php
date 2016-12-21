<?php

include("ripcord-master/ripcord.php");
$local=true;

if ($local){
    $username 	= "admin";
    $password 	= "1";
    $url 		= "http://127.0.0.1:8010";
    $db  		= "doqar";
} else {
    $username 	= "admin";
    $url 		= "http://doqar.vitraining.com:9090";
    $db  		= "doqar";
    $password 	= "1";
}

