<?php

    include("connect.php");
    include("view_admins.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];

    move_uploaded_file($tmp_name, "../images/$image");

    $insert = mysqli_query($connect, "UPDATE admins SET ('$username', '$password', '$image') WHERE id='$var_id'");

    if ($insert) {
        echo "
            <script>
                alert('Update successfull!!');
                window.location = '../html/edit_admin.html'
            </script>
        ";
    }
    else {
        echo "
            <script>
                alert('Error occured!!');
                window.location = '../html/edit_admin.html'
            </script>
        ";
    }

?>