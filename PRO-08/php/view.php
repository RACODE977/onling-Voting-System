<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>candidate page</title>
        <link rel="stylesheet" href="../css/candidate.css">
        
    </head>
    <body>
      <style>
        #backBtn {
        padding: 10px;
        border-radius: 5px;
        background-color: SlateBlue;
        color: white;
        float: left;
        width: 100px;
      }
      #logoutBtn {
        padding: 10px;
        border-radius: 5px;
        background-color: SlateBlue;
        color: white;
        float: right;
        width: 100px;
      }
      #addCompetitorBtn {
        padding: 10px;
        border-radius: 5px;
        background-color: SlateBlue;
        color: white;
        float: right;
      }
      </style>
    
        <container >
        <button id="backBtn" onclick="location.href='../html/admin_dashboard.html'">Back</button>
      <button id="logoutBtn" onclick="location.href='../php/login.php'">Logout</button>
      <br><br>
    <div id="bodySection">
      <br /><br />
      <button id="addCompetitorBtn"  onclick="location.href='../html/candidate.html'">
        Add New Competitor
        </button>
        <br><br>
    </div>
         <div>
              <table border="5" class="table-output">
                  <thead>
                  <tr>
                     <th>ID</th>
                      <th>first Name</th>
                      <th>Last Name</th>
                      <th>NIC</th>
                      <th>Email</th>
                      <th>Political Party</th>
                      <th>Action</th>     
                  </tr>
                  </thead>
                  <tbody>
                  
                  <!--connection with database -->
                  <?php
                      // $conn= new mysqli('localhost','root','','comdb');
                      
                    include("connect.php");

                    if($connect)
                    {
                        // echo( "database connection ssuccessful!!!");

                    }else{

                        echo( "database connection error");
                    }

                    $sel = "SELECT* FROM comtable";
                      $query =$connect->query($sel);
                    while ($row = $query->fetch_assoc()){
                  ?>
                  
                  <tr>
                       <td><?php echo $row['ID'];?></td>
                       <td><?php echo $row['firstName'];?></td>
                       <td><?php echo $row['lastName'];?></td>
                       <td><?php echo $row['nic'];?></td>
                       <td><?php echo $row['email'];?></td>
                       <td><?php echo $row['party'];?></td>
                       <td>
                        <button class="btn"><a  href="../php/edit.php?edit=<?php echo $row['ID'];?>">Edit</a></button>
                        <button class="btn"><a  href="../php/delete.php?delete=<?php echo $row['ID'];?>">Delete</a></button>
                       </td>
                  </tr>
                  <?php
                    }
                  ?>
                  </tbody>
               </table>
          </div>
   </body>