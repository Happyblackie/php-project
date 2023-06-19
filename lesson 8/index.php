<?php 
    //multidimentional array
    $blogs = [
        ['title'=>'old man', 'author'=>'steven curl', 'content'=>'lorem','likes'=>100],
        ['title'=>'blacklist', 'author'=>'redddington', 'content'=>'lorem','likes'=>80],
        ['title'=>'hanna', 'author'=>'happy blakie', 'content'=>'lorem','likes'=>70]
    ];

    //echo $blogs[1]['author'];
    //echo count(($blogs));

    $blogs[] = ['title'=>'breaking the mirror', 'author'=>'happy blakie', 'content'=>'lorem','likes'=>300];

    //print_r($blogs);

    $popped = array_pop($blogs);
    print_r($popped);
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