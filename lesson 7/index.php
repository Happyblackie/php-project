<?php 
    //indexed arrays
    $peopleOne = ['happy','alicia','cecil'];
    //echo $peopleOne[1];

    $peopleTwo = array('luke','magadalene','mathew');
    //echo $peopleTwo[1];

    $ages = [20,30,40,50];
    //print_r($ages);

    $ages[1] = 25;
    //print_r($ages);

    $ages[] = 70; /* appending value at the end of array */
    //print_r($ages);
    
    array_push($ages, 100);/* appending value at the end of array */
    //print_r($ages);

    //echo count($ages);

    $peopleThree = array_merge($peopleOne, $peopleTwo);
    //print_r($peopleThree);



    //associative array ------->[key=>value] pairs
    $capitalCities1 = ['kenya'=>'nairobi','tanzania'=>'dodoma','rwanda'=>'kigali'];
    // echo $capitalCities1['rwanda'];
    // print_r($capitalCities1);

    $capitalCities2 = array('uganda'=>'kampala','zimbabwe'=>'harare');
    //print_r($capitalCities2);

    $capitalCities2['southafrica'] = 'pretoria'; //appending new key value pair
    //print_r($capitalCities2);

    $capitalCities1['tanzania'] = 'daersaalem'; //overridig existing
    //print_r($capitalCities1);

    //echo count($capitalCities1); /* length of array */

    $capitalCities3 = array_merge($capitalCities1, $capitalCities2);
    print_r($capitalCities3);
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