<?php
include_once '../php/connect.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Vote page</title>
        <link rel="stylesheet" href="../css/voting.css" >
        
    </head>
    <body>  
        
        <div class="navbar">
            <a href="../php/login/php">Home</a>
            <div class="subnav">
              <button class="subnavbtn">Voting <i class="dropdown"></i></button>
              <div class="subnav-content">
                <a href="../php/voting.php">Place Your Vote</a>
                <a href="../php/leaderboard.php" >Leaderboard</a>
              </div>
            </div> 
          <a href="#contact">Contact</a>
          <a href="#about">About</a>
        </div>
<br>
        <div class = "row my-5">
          <div class ="col-md-7">
           
            <div class ="col-md-5">
              <img src = "../images/logo1.png" alt="image1">
            </div>
            <br>
            <div class ="col-md-4">
              <strong>Name:  </strong>


<?php 

include_once '../php/connect.php';
if (isset($_POST['Submit'])) {

  $name = $_POST['vote'];

  $selection = "SELECT status from singers WHERE name='$name'";
  $result = mysqli_query($connect,$selection);
  $status = mysqli_fetch_assoc($result);

  if($status['status'] == 0)
{
  if ($name == 'kamal') {

    if(!$connect->connect_error){$connect->query("UPDATE singers SET votes=votes+1 , status=status+1 WHERE name='$name'");}
    
    }
    else if ($name == 'Vimal') {
    
      if(!$connect->connect_error){$connect->query("UPDATE singers SET votes=votes+1 , status=status+1 WHERE name='$name'");}
    
    }
    else if ($name == 'Pawan') {
    
      if(!$connect->connect_error){$connect->query("UPDATE singers SET votes=votes+1 , status=status+1 WHERE name='$name'");}
    
    }
    else if ($name == 'Cathushka') {
    
      if(!$connect->connect_error){$connect->query("UPDATE singers SET votes=votes+1 , status=status+1 WHERE name='$name'");}
    
    }
  }
else if($status['status'] == 1)
{
  echo "You Have Already Voted For This Singer";
}


}
?>

<form action="../php/voting.php" method="POST" >
<tr>
                <td><input type="radio" name="vote" value="kamal">Kamal
                </td>
                <td><input type="radio" name="vote" value="Vimal">Vimal
                </td>
                <td><input type="radio" name="vote" value="Pawan">Pawan
                </td>
                <td><input type="radio" name="vote" value="Cathushka">Cathushka
                </td>
</tr>
<tr>
                <td><input type="submit" name="Submit" value="submit" >
                </td>
</tr>

</form>

            </div>
          </div>
        </div>
        <hr>
        <br>
     
    
        
    </body>
    
</html>