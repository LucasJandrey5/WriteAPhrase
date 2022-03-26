<?php 
       $hostname = 'localhost';
       $dbname = "writeaphrase";
       $username = 'user';
       $password = '';
   
       $con = mysqli_connect($hostname, $username, $password, $dbname) or die("No connection");
   
        if (mysqli_connect_errno()) {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
         exit();
       }
