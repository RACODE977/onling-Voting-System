<?php
include 'connect.php';
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
    
    $sql="insert into `reg` (FirstName,LastName,Address,Email,Phone,NICNumber,DateOfBirth,Gender,JobTitle,Password)
    values('$FirstName','$LastName','$Address',' $Email','$Phone','$NICNumber','$DateOfBirth','$Gender','$JobTitle','$Password')";
    $result=mysqli_query($connect,$sql);
    if($result){
       // echo "Data inserted successfully";
       header('location:UserDisply.php');
    }else{
        die(mysqli_error($connect)); 
    }
      
}

?>





<html>
    <head>
   
        <title></title>
        

<link rel="stylesheet" href="../css/reg.css">
</head>
<header>
 <div class="fixed-header">
       
</header>


<body>

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

</div>
</div>
  <div class="content">
  <button id="backBtn" onclick="location.href='../html/admin_dashboard.html'">
        Back
      </button>
      <button id="logoutBtn" onclick="location.href='../php/login.php'">
        Logout
      </button>
  <form method= "post">
  <div class="form-group">
    <label style="color:black" >First Name</label>
    <input style="color:black" type="text" class="form-control"  placeholder="Enter First Name" name="FirstName">
</div>
<div class="form-group">
    <label style="color:black" >Last Name</label>
    <input style="color:black" type="text" class="form-control"  placeholder="Enter last Name" name="LastName">
</div>
<div class="form-group">
    <label style="color:black">Address</label>
    <input style="color:black" type="text" class="form-control"  placeholder="Enter Address" name="Address">
</div>
<div class="form-group">
    <label style="color:black">Email</label>
    <input style="color:black" type="Email" class="form-control"  placeholder="Enter Email" name="Email">
</div>
<div class="form-group">
    <label style="color:black">Phone</label>
    <input  style="color:black" type="Number" class="form-control"  placeholder="Enter phone number" name="Phone">
</div>
<div class="form-group">
    <label style="color:black">NIC Number</label>
    <input style="color:black" type="Number" class="form-control"  placeholder="Enter NIC number" name="NICNumber">
</div>
<div class="form-group">
    <label style="color:black">Date Of Birth</label>
    <input style="color:black" type="date" class="form-control"  placeholder="Enter Date Of Birth" name="DateOfBirth">
</div>
<div class="form-group">
    <label style="color:black">Gender</label>
    <input style="color:black" type="text" class="form-control"  placeholder="Enter Gender" name="Gender">
</div>
<div class="form-group">
    <label style="color:black">Job Title</label>
    <input style="color:black" type="text" class="form-control"  placeholder="Enter Job Title" name="JobTitle">
</div>
<div class="form-group">
    <label style="color:black">Password</label>
    <input style="color:black" type="Password" class="form-control"  placeholder="Enter Password" name="Password">
</div>
<div class="form-group">
    <label style="color:black">Confirm Password</label>
    <input style="color:black" type="Password" class="form-control"  placeholder="Re enter Password" name="Password">
</div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>    
</div>
<script src="js/first1.js"></script>
<script src="js/reg1.js"></script>
</body>
</head>
    </html>