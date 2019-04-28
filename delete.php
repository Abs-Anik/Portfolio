<?php
require_once 'connection.php';
$id = $_GET['id'];
$id = ((int) $id);
if ($connection == false){
    echo mysqli_connect_errno();
    exit();
}else{
    $sql = "DELETE FROM users WHERE id='$id'";
    $stmt = mysqli_query($connection,$sql);
    if ($stmt == false){
        echo mysqli_error($connection);
        exit();
    }else{
        header('Location:view.php');
    }
}


?>