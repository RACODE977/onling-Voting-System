<html>
  <head>
    <title>Online Voting System - View Admins</title>
    <link rel="stylesheet" href="../css/stylesheet.css" />
  </head>
  <body>
    <style>
      #backBtn {
        padding: 10px;
        border-radius: 5px;
        background-color: navy;
        color: white;
        float: left;
      }
      #logoutBtn {
        padding: 10px;
        border-radius: 5px;
        background-color: navy;
        color: white;
        float: right;
      }
      #addCompetitorBtn {
        padding: 10px;
        border-radius: 5px;
        background-color: navy;
        color: white;
        float: right;
      }
      table td{
          width:8em;
          height:4em;
      }
      .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
      }
    </style>

    <div id="headerSection">
      <button id="backBtn" onclick="location.href='../html/admin_dashboard.html'">Back</button>
      <button id="logoutBtn" onclick="location.href='../php/login.php'">Logout</button>
      <h1>Online Voting System</h1>
    </div>

    <hr />

    <div id="bodySection">
      <br /><br />
      <button id="addCompetitorBtn"  onclick="location.href='../html/admin_register.html'">
        Add Admin
        </button>
    </div>
    
    <script>
      function editButton() {
        location.href='../html/edit_admin.html';
      }

      function deleteButton() {
        location.href='../php/delete_admin.php';
      }
    </script>

    <?php
        include("connect.php");
        
        $result = mysqli_query($connect, "SELECT * FROM admins");
        $var_id = mysqli_fetch_array($result)['id'];

        echo "<table border='1px solid black' align='center'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>";

        while($row = mysqli_fetch_array($result))
        {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td><img src='../images/" . $row['image'] . "' width='50' height='50' class='center'></td>";
            echo "<td>" . "<button type='submit' id='editBtn' onclick='editButton()'>Edit</button>" . "<button type='submit' id='deleteBtn' onclick='deleteButton()'>Delete</button>" . "</td>";
            echo "</tr>";
            echo "</tbody>";
        }
        echo "</table>";
    ?>
  </body>
</html>
