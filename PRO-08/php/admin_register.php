<?php

    include("connect.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $connectfpassword = $_POST['confPassword'];
    $type = $_POST['type'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];

    move_uploaded_file($tmp_name, "../images/$image");

    if ($password == $connectfpassword) {
        $insert = mysqli_query($connect, "INSERT INTO admins (username, password, image) VALUES ('$username', '$password', '$image')");
        $login = mysqli_query($connect, "INSERT INTO login (username, password, type) VALUES ('$username', '$password', '$type')");

        if ($insert && $login) {
            echo "
                <script>
                    alert('Registration successfull!! Login created!!');
                    window.location = '../html/admin_register.html'
                </script>
            ";
        }
        else {
            echo "
                <script>
                    alert('Error occured!!');
                    window.location = '../html/admin_register.html'
                </script>
            ";
        }
    }
    else {
        echo "
            <script>
                alert('Passwords do not match!!');
                window.location = '../html/admin_register.html'
            </script>
        ";
    }

?>