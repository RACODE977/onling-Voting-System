<?php
include 'connect.php';
$ID=$_GET['updateid'];

$sql="select * from `reg` where id=$ID";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
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


if(isset($_POST['submit'])) {
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $Address=$_POST['Address'];
    $Email=$_POST['Email'];
    $Phone=$_POST['Phone'];
    $NICNumber=$_POST['NICNumber'];
    $DateOfBirth=$_POST['DateOfBirth'];
    $Gender=$_POST['Gender'];
    $JobTitle=$_POST['JobTitle'];
    $Password=$_POST['Password'];	
    
    $sql="update `reg` set id=$ID,FirstName='$FirstName',LastName='$LastName',Address='$Address',Email='$Email',Phone='$Phone',NICNumber='$NICNumber',DateOfBirth='$DateOfBirth',
    Gender='$Gender',JobTitle='$JobTitle',Password='$Password' where id=$ID";
    $result=mysqli_query($connect,$sql);
    if($result){
       //echo "update successfully";
       header('location:RegDisplay.php');
    }else{
        die(mysqli_error($connect)); 
    }
      
}

?><!doctype html>
<html lang="en">
<link rel="stylesheet" href="../css/reg.css">
</head>
<header>
 <div class="fixed-header">
    </div>
       
</header>
`

        <div class="content">
            <form method= "post">
  <div class="form-group">
    <label style="color:Black" >First Name</label>
    <input  style="color:Black" type="text" class="form-control"  placeholder="Enter First Name" name="FirstName" autocomplete="off" value=<?php  
    echo $FirstName;?>>
</div>
<div class="form-group">
    <label style="color:Black" >Last Name</label>
    <input style="color:Black" type="text" class="form-control"  placeholder="Enter last Name" name="LastName" autocomplete="off" value=<?php  
    echo $LastName;?>>
</div>
<div class="form-group">
    <label style="color:Black">Address</label>
    <input style="color:Black" type="text" class="form-control"  placeholder="Enter Address" name="Address" autocomplete="off" value=<?php  
    echo $Address;?>>
</div>
<div class="form-group">
    <label style="color:Black">Email</label>
    <input style="color:Black" type="Email" class="form-control"  placeholder="Enter Email" name="Email" autocomplete="off" value=<?php  
    echo $Email;?>>
</div>
<div class="form-group">
    <label style="color:Black">Phone</label>
    <input style="color:Black" type="Number" class="form-control"  placeholder="Enter phone number" name="Phone" autocomplete="off" value=<?php  
    echo $Phone;?>>
</div>
<div class="form-group">
    <label style="color:Black">NIC Number</label>
    <input style="color:Black" type="Number" class="form-control"  placeholder="Enter NIC number" name="NICNumber" autocomplete="off" value=<?php  
    echo $NICNumber;?>>
</div>
<div class="form-group">
    <label style="color:Black">Date Of Birth</label>
    <input style="color:Black" type="date" class="form-control"  placeholder="Enter Date Of Birth" name="DateOfBirth" autocomplete="off" value=<?php  
    echo $DateOfBirth;?>>
</div>
<div class="form-group">
    <label style="color:Black">Gender</label>
    <input style="color:Black" type="text" class="form-control"  placeholder="Enter Gender" name="Gender" autocomplete="off" value=<?php  
    echo $Gender;?>>
</div>
<div class="form-group">
    <label style="color:Black">Job Title</label>
    <input  style="color:Black" type="text" class="form-control"  placeholder="Enter Job Title" name="JobTitle"autocomplete="off" value=<?php  
    echo $JobTitle;?>>
</div>
<div class="form-group">
    <label style="color:Black">Password</label>
    <input style="color:Black" type="Password" class="form-control"  placeholder="Enter Password" name="Password" autocomplete="off" value=<?php  
    echo $Password;?>>
</div>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>    
</div>


<script src="js/home.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>