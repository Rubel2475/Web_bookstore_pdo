<?php

    $id = $_GET['id'];
    
    require 'database/connection.php';
    require 'database/functions.php';

    $pddb = connect();
    drop($pddb, $id);



    header('Location: index.php');
?>

Sucessfuly deleted!!!