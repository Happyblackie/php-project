<?php 

    $ninjas = ['happy', 'shaun', 'ryu'];

    // for($i=0; $i<count($ninjas);$i++)
    // {
    //     echo $ninjas[$i] . '<br/>';
    // }

    // foreach($ninjas as $ninja)
    // {
    //     echo $ninja . '<br/>';
    // }


    $products = [
        ['name'=>'trouser', 'price'=>45],
        ['name'=>'chair', 'price'=>34],
        ['name'=>'house', 'price'=>23]
    ];


    // foreach ($products as $product) 
    // {
    //     # code...
    //     echo $product['name'] . '->' .$product['price'] . '<br/>';
    //     echo '<br/>';
    // }



    
    // $i = 0;
    // while($i<count($products))
    // {
    //     echo $products[$i]['name'] . '-' . $products[$i]['price'];
    //     echo '<br/>';
    //     $i++;
    // }


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
    <h1>Products</h1>
    <ul>
        <?php foreach($products as $product){ ?>
            <h3><?php echo $product['name'] ?></h3>
            <p><?php echo $product['price'] ?></p>
        <?php }?>
    </ul>
</body>
</html>