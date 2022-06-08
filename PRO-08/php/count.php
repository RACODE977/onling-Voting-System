
<?php

include_once '../php/connect.php';

$usrName=$_POST["username"];

$usrPwd=$_POST["password"];

$sql = "SELECT * FROM credentials WHERE username='".$usrName."' and password='".$usrPwd."'";

$result = $con->query($sql);

if ($result->num_rows > 0) {

echo '<script>

window.location="../html/Secretary-HR-AviationPirate_HgrtsnsSdendjc23J224.html";

</script>';

} else {

echo '<script>

alert(“Wrong user name or password”);

</script>';

}
// }

// <?php 

include_once '../php/connect.php';
$name  = $_POST[''];

$selection = "SELECT status FROM singers WHERE name ='$name'";

$result = mysqli_query($con,$selection);

echo "<table border='1'>";
while($row = mysqli_fetch_assoc($result))
{
    echo "<tr><td>".$row['Studentid']."</td>";
    echo "<td>".$row['Studentname']."</td>";
    echo "<td>".$row['Pssword']."</td></tr>";
   
}

echo "</table>";

?>