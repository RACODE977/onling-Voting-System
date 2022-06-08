<!DOCTYPE html>
<html>
    <head>
        <title>Leaderboard</title>
        <link rel="stylesheet" href="../css/leaderboard.css" >
        
    </head>
    <body>  
       
        <div class="navbar">
            <a href="../php/login/php">Home</a>
            <div class="subnav">
              <button class="subnavbtn">Voting <i class="dropdown"></i></button>
              <div class="subnav-content">
                <a href="voting.php">Place Your Vote</a>
                <a href="#.html" >Leaderboard</a>
              </div>
            </div> 
          <a href="#contact">Contact</a>
          <a href="#about">About</a>
        </div>
<br>



<?php 

include_once 'connect.php';

$selection = "SELECT * FROM singers";

$result = mysqli_query($connect,$selection);

echo "<table id='count'>";
while($row = mysqli_fetch_assoc($result))
{
    echo "<tr><td>".$row['name']."</td>";
    echo "<td>".$row['votes']."</td></tr>";
}

echo "</table>";

?> 


</body>
<footer>
    <p>Copyright &copy 2022<br>
    <a href="google.com">Idol.com</a></p>
  </footer>

</html>