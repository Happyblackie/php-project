<!-- variables and constants -->

<?php 

    $name = 'happy';
    $name =  'blackie'; //overriding a name

    $age = 25;

    define('NAME', 'Alicia'); //constants can never be overriden


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
    <h1>User Profile Page</h1>
    <div><?php  echo $name; ?></div>
    <div><?php  echo NAME; ?></div>
    <div><?php  echo $age; ?></div>
</body>
</html>