<?php
include 'connect.php';
if(isset($_POST['submit'])) {
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $Address=$_POST['Address'];
   	
    
    $sql="insert into `contact` (Name,Email,Msg)
    values('$FirstName','$LastName','$Address')";
    $result=mysqli_query($connect,$sql);
    if($result){
        echo "Data inserted successfully";
       //header('location:UserDisply.php');
    }else{
        die(mysqli_error($connect)); 
    }
      
}

?>





<html>
<link rel="stylesheet" href="../css/reg.css">
<link rel="stylesheet" href="../css/Display2.css">
</head>
<header>

 <div class="fixed-header">
    </div>
       
</header>


</head>

    <body>

   <div class="contact">     

<p ><h1>Contact Us</h1></p>    
</div> 


<div class="Img_1">
<div class="Address">
    <img src="img/Addres.png">
    <p>Malabe 1234cijlfjgoolgeojrg[ergoekgopeg[elgejgoekpfjiwnfk
        Colombo
    </p><br><br><br><br><br>
</div>
<div class="email">
    <img src="img/Email.png">
    <p>Ashdsufhkjh@gmail.com
       
    </p><br><br><br><br><br>
</div>
<div class="Phone">
    <img src="img/phone.png">
    <p> 0112331213
        
    </p>
</div>


</div>



            <div class="content">
            <form method= "post">
  <div class="form-group">
    <label style="color:rgb(6, 5, 5)" >Name</label>
    <input type="text" class="form-control"  placeholder="Enter Name" name="FirstName">
</div>
<div class="form-group">
    <label style="color:rgb(0, 0, 0)" >Email</label>
    <input type="email" class="form-control"  placeholder="Enter Email" name="LastName">
</div>
<div class="form-group">
    <label style="color:rgb(0, 0, 0)">Subject</label>
    <textarea type="text" class="form-control"  placeholder="Enter Subject .." name="Address"></textarea>
</div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>    
</div>
<script src="js/home.js"></script>
</body>
</head>
<script src="js/first1.js"></script>
<script src="js/reg1.js"></script>
</html>


