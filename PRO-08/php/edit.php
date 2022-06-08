

 <?php
//    $conn= new mysqli('localhost','root','','comdb');
include("connect.php");
   
   if(isset($_POST['submit'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $nic = $_POST['nic'];
        $email = $_POST['email'];
        $party = $_POST['party'];
        $ID= $_POST['ID'];

         $update ="UPDATE comtable SET firstName='$firstName', lastName='$lastName', nic='$nic', email='$email', party='$party' WHERE ID='$ID'";
         $up=$connect->query($update);
         if($update){
             header('location:view.php');

         }else{
             echo"somthing went wrong";
            
         }

   }
 
 
 
 ?>
                  

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>candidate page</title>
        <link rel="stylesheet" href="../css/candidate.css">
        <script defer src="candidate.js"></script>
    </head>
    <body>
        <container >
        <!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>candidate page</title>
        <link rel="stylesheet" href="../css/candidate.css">
        <script defer src="candidate.js"></script>
    </head>
   <body>
       <div  class="container">
           <div class="title">UPDATE</div>
           <form action="../php/view.php"  method="POST">
               <?php
                      if(isset($_GET['edit'])){
                        $ID=$_GET['edit'];
                      $sel = "SELECT* FROM comtable WHERE ID='$ID'";
                      $query =$connect->query($sel);
                     while ($row = $query->fetch_assoc()){
                  ?>
               <div class="candidate-detail">
                   <div class="input-box">
                       <span class="details">First name</span> 
                       <input type="text" placeholder="Enter your name" name="firstName" value="<?php echo $row['firstName'];?>" required``>
                    </div>
                    <div class="input-box">
                        <span class="details">Last name</span>
                        <input type="text" placeholder="Enter your name" name="lastName" value="<?php echo $row['lastName'];?>" required``>
                     </div>
                     <div class="input-box">
                        <span class="details">NIC</span>
                        <input type="text" placeholder="Enter your name" name="nic"  value="<?php echo $row['nic'];?>" required``>
                     </div>
                     <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your name" name="email"  value="<?php echo $row['email'];?>" required``>
                     </div>
                     <div class="input-box" >
                        <span class="details">Competition</span>
                        <input type="text" placeholder="Enter your name" name="party" value="<?php echo $row['party'];?>" required``>
                     </div>
               </div>
                <div class="button">
                    <input type="submit" value="UPDATE">
                </div>
              
                <?php
                    } 
                }
                ?>
            </form>
          </div>
          </div>
   </body>
   </html>