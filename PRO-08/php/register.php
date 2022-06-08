<?php

include("connect.php");

  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $nic = $_POST['nic'];
  $email = $_POST['email'];
  $party = $_POST['party'];

    //databas connection
    // $conn= new mysqli('localhost','root','','comdb');
  if($connect->connect_error){
     die('Connection Faild:'.$conn->connect_error);

  }else{

        $query="insert into comtable(firstName,lastName,nic,email,party) values('$firstName',' $lastName',' $nic','  $email',' $party');";
        $run =mysqli_query($connect,$query);
        if($run){
          header('location:view.php');

    }else{
       echo"somthing went wrong";
       
    }
  } 
?>