<?php 

    //superglobals
    // eg..$_GET['name']  $_POST['name']

    echo $_SERVER['SERVER_NAME'] . '<br/>'; //localhost etc
    echo $_SERVER['REQUEST_METHOD'] . '<br/>'; //get,post etc
    echo $_SERVER['SCRIPT_FILENAME'] . '<br/>'; //path to the file
    echo $_SERVER['PHP_SELF'] . '<br/>'; //FILE NAME

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
    
</body>
</html>