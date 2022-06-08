<?php
   include("connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
      $myusername = mysqli_real_escape_string($connect,$_POST['username']);
      $mypassword = mysqli_real_escape_string($connect,$_POST['password']);

      $sql = "SELECT * FROM login WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($connect, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
        if ($myusername == "admin"){
            header("location: ../html/admin_dashboard.html");
        }
        else {
            header("location: ../php/voting.php");
        }
   }
?>

<html>
   <head>
   <title>Online Voting System</title>
    <link rel="stylesheet" href="../css/stylesheet.css" />
      
   </head>
   
   <div id="headerSection">
      <h1>Online Voting System</h1>
    </div>

    <hr />

    <div id="bodySection">
      <form method = "post">
        <h2>Login</h2>
        <input
          type="text"
          name="username"
          placeholder="Enter your username here"
        />
        <br /><br />
        <input
          type="password"
          name="password"
          placeholder="Enter your password here"
        />
        <br /><br />
        <button
          type="submit"
          name="btnLogin"
        >
          Login
        </button>
        <br /><br />
        New user? Register Here
        <br />
        <a href="../php/index.php">Voter</a><br />
      </form>
    </div>
    
    <script>
      function validation() {
        var id = document.username.value;
        var ps = document.password.value;
        if (id.length == "" && ps.length == "") {
          alert("User Name and Password fields are empty");
          return false;
        } else {
          if (id.length == "") {
            alert("Username is empty");
            return false;
          }
          if (ps.length == "") {
            alert("Password field is empty");
            return false;
          }
        }
      }
    </script>
   </body>
</html>