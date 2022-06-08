<?php

$connect=mysqli_connect('localhost','root','', 'online_voting_system') or die('Connection failed!');

if($connect) {
    echo "
        <script>
            window.location = '#'
        </script>";
}
else {
    echo "
        <script>
            alert('Not connected!');
            window.location = '#'
        </script>";
}

?>