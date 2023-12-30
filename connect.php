<?php
$databaseHost='localhost';
$username='root';
$password='';
$databasename='university';

     $conn=mysqli_connect($databaseHost,$username,$password,$databasename);

     if (!$conn) {
        die ("connection failed:").$mysql_connect_error();
     }
       else {
        echo "connection successful";
       }