<?php 
    /* local variable */

    // function myFunc()
    // {
    //     $price = 10;
    //     echo $price;
    // }
    // myFunc();
    //echo $price; //error


    // function myFuncTwo($age)
    // {
    //     echo $age;
    // }

    // myFuncTwo(25);


    /* global variables */
     $name = 'happy';
    // function sayHello()
    // {
    //     global $name;
    //     $name = 'otieno'; //overriding the global name
    //     echo "bye $name";
    // }
    // SayHello();



    function sayBye(&$name) //putting an amper sign & in order to override global variable is also another option
    {
        $name= 'otieno';
        echo "bye $name";
    }

    sayBye($name);
    echo "hello $name";


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