<?php 
    //FILE SYSTEM PART TWO

    $file = 'quotes.txt';
  
        //opening a file for reading
    $handle = fopen($file, 'r');

        //read file
    //echo fread($handle, filesize($file)); reading everything within the file
    //echo fread($handle,112); reading first 112 bytes

        //read a single line
    // echo fgets($handle);
    // echo fgets($handle);


        //read a single charachter
    // echo fgetc($handle);
    // echo fgetc($handle);


        //wring to a file
    //$handle = fopen($file, 'r+'); //read and writeable 
    // $handle = fopen($file, 'a+');
    // fwrite($handle,"\n Everything popular is wrong");

    fclose($handle);

    //deleting a file permanently
    $f = 'a.txt';
    unlink($f);


?>