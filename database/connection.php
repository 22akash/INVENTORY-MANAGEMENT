<?php
    $servername = 'localhost';
    $usernamee = 'root';
    $password = '';

    try {
        $con=new PDO("mysql:host= $servername;dbname=ims",$username,$password);
        $con->setAttribute(PDO :: ATTR_ERRMODE,PDO :: ERRMODE_EXCEPTION);
        echo 'Connection Successfully';
    } catch(\Exception $ e) {
        
    }


    