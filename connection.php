<?php
   
   $SERVER = "127.0.0.1:2207";
   $USERNAME = "root";
   $PASSWORD = "";
   $db_Name = "form";
    // echo "hello this is working";
   $con = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$db_Name);
   if(mysqli_connect_error()){
    die("Connection to this datbase".mysqli_connect_error());
   }
   ?>