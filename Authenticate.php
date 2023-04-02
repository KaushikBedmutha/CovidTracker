<?php
include('connection.php');
  
//    echo "You are succesfully Connected to Database";
$First_name = $_POST['First_name'];
$Last_name = $_POST['Last_name'];
$City = $_POST['City'];
$Email = $_POST['Email'];
$Phone_no = $_POST['Phone_no'];
$comments = $_POST['comments'];
    
$sql = "INSERT INTO `form`.`form` ( `First_name`, `Last_name`, `City`, `Email`, `Phone_no`, `comments`) VALUES ( '$First_name', '$Last_name', '$City', '$Email', '$Phone_no', '$comments');";

    if($con->query($sql) == true){
  echo "sucessfully Inserted";
    }
    else{
        echo "ERROR : $sql <br> $con->error";
    }
   
  ?>