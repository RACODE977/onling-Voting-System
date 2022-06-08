<?php

    include("connect.php");
    include("view_admins.php");

    $insert = mysqli_query($connect, "DELETE FROM admins WHERE id='$var_id'");

    if ($insert) {
        echo "
            <script>
                alert('Delete successfull!!');
                window.location = '../php/view_admins.php'
            </script>
        ";
    }
    else {
        echo "
            <script>
                alert('Error occured!!');
                window.location = '../php/view_admins.php'
            </script>
        ";
    }

?>
