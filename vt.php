<?php

@$baglanti = new mysqli('localhost', 'root', '12345678', 'dblog'); 
    if(mysqli_connect_error()) 
    {
        echo mysqli_connect_error();
        exit; 
    }

$baglanti->set_charset("utf8"); 

?>