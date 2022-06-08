<?php
include 'connect.php';

?>  


<!DOCTYPE html>
<html>
    <head>
   
        <title></title>
        

<link rel="stylesheet" href="../css/Display.css">
</head>
<header>
  <style>
    #backBtn {
      background-color: #4CAF50;
   color: white;
   padding: 14px 20px;
   margin: 8px 0;
   border: none;
   border-radius: 4px;
   cursor: pointer;
        float: left;
    }
    #logoutBtn {
      background-color: #4CAF50;
   color: white;
   padding: 14px 20px;
   margin: 8px 0;
   border: none;
   border-radius: 4px;
   cursor: pointer;
        float: right;
    }
  </style>
 <div class="fixed-header">
 <img src="img/logo.png" style="width:7%">
        <div class="container">
        <button id="backBtn" onclick="location.href='../html/admin_dashboard.html'">
        Back
      </button>
      <button id="logoutBtn" onclick="location.href='../php/login.php'">
        Logout
      </button>
        </div>
    </div>
       
</header>


<body>

<p> <h1> JUDGER </h2></p>



<div class="content">
<table class="table table-striped" style="color:black" >
  <thead>
    <tr>
    <th scope="col">No</th>
      <th scope="col">First Name</th>
      <th scope="col">Last LastName</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">NIC Number</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Gender</th>
      <th scope="col">JobTitle</th>
      <th scope="col">Password</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>
  </div>
   <?php

   $sql="Select * from reg";
   $result=mysqli_query($connect,$sql);
   if($result){
      while($row=mysqli_fetch_assoc($result)){
          $ID=$row['ID'];
          $FirstName=$row['FirstName'];
          $LastName=$row['LastName'];
          $Address=$row['Address'];
          $Email=$row['Email'];
          $Phone=$row['Phone'];
          $NICNumber=$row['NICNumber'];
          $DateOfBirth=$row['DateOfBirth'];
          $Gender=$row['Gender'];
          $JobTitle=$row['JobTitle'];
          $Password=$row['Password'];	

          echo '<tr>
          <th scope="row">'.$ID.'</th>
          <td>'.$FirstName.'</td>
          <td>'.$LastName.'</td>
          <td>'.$Address.'</td>
          <td>'.$Email.'</td>
          <td>'.$Phone.'</td>
          <td>'.$NICNumber.'</td>
          <td>'.$DateOfBirth.'</td>
          <td>'.$Gender.'</td>
          <td>'.$JobTitle.'</td>
          <td>'.$Password.'</td>
          <td>
<button class ="btn btn-primary"><a href = "RegisterUpdate.php? updateid='.$ID.'" style="color:Black">Update</a></button>
<button class ="btn btn-danger"><a href = "RegisterDelete.php? deleteid='.$ID.'" style="color:Black">Delete</a></button>


</td>
          </tr>';
      }
       


   }



?>


  </tbody>
</table>
</div>



   <script src="js/home.js"></script>
</body>
</html>
   