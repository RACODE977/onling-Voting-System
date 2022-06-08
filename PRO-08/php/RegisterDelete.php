<?php

include 'connect.php';
if(isset($_GET['deleteid']))
{
$ID=$_GET['deleteid'];
$sql="delete from `reg` where id=$ID";
$result=mysqli_query($connect,$sql);

if($result){
    //echo "Delete successfull";
    header('location:RegDisplay.php');
    

}else{
    die(mysqli_error($connect));
}

}
?>