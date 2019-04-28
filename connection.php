<?php
//Database connection code will be gose here

 define('HOSTNAME','localhost');
 define('USER','root');
 define('PASSWORD','');
 define('DB_NAME','port');
$connection  = mysqli_connect(HOSTNAME,USER,PASSWORD,DB_NAME);


if (!$connection){
    mysqli_connect_errno($connection);
    die();
}