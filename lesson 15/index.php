<?php

     include('ninjas.php');
     require('ninjas.php');

    // include'ninjas.php'; can be written without the parenthesis as well, its fine
    // require'ninjas.php';

    //include('ninjasss.php');
    //require('ninjasss.php');
    echo 'end of php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>
<body>
    <?php include('content.php') ?>
    <?php require('content.php') ?>
    <?php include('content.php') ?>
</body>
</html>