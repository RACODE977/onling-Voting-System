 <?php
//    $conn= new mysqli('localhost','root','','comdb');

include("connect.php");

   if(isset($_GET['delete'])){
         $delete=$_GET['delete'];
         #query for delete 
         $query ="DELETE FROM comtable WHERE ID='$delete'";
         $del=$connect->query($query);
         
         if($del){
               header("location: '../php/view.php'");

         }else{
            echo"somthing went wrong";
            
         }

   }
 
 
 
 ?>