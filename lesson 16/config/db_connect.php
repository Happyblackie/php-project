<?php 

    #connecting to database using either MySQLi or PDO
    #for this case we will focus/use MySQLi---its more structured and fast easier

    //connect database
    #host      #username #passwod   #database to connect to 
    $conn = mysqli_connect('localhost', 'happy', 'test12345', 'ninja_pizza');

    //check connection validity
    if(!$conn)
    {
        echo 'Connection error: '. mysqli_connect_error();
    }
                        

?>