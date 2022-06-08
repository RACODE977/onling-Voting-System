<html>

<head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css2/font-awesome.min.css">
    <link rel="stylesheet" href="css2/bootstrap.min.css">

    <link rel="stylesheet" href="css2/demo.css" />
    <link rel="stylesheet" href="css2/templatemo-style.css">

    <script type="text/javascript" src="js2/modernizr.custom.86080.js"></script>
    <script language="JavaScript" src="js/user.js"></script>
</head>

<body>
    <div id="page">

        <div id="container">
            <?php
require('connection.php');
//Process
if (isset($_POST['submit']))
{

$myFirstName = addslashes( $_POST['firstname'] ); 
$myLastName = addslashes( $_POST['lastname'] ); 
$myEmail = $_POST['email'];
$myPassword = $_POST['password'];

$newpass = md5($myPassword); 

$sql = mysqli_query($con, "INSERT INTO tbMembers(first_name, last_name, email,password) 
VALUES ('$myFirstName','$myLastName', '$myEmail', '$newpass') ");

die( "You have registered for an account.<br><br>Go to <a href=\"index.php\">Login</a>" );
}

echo "<center>Register an account by filling in the needed information below</center>";
echo '<form action="registeracc.php" method="post" onsubmit="return registerValidate(this)">';
echo '<table align="center"><tr><td>';
echo "<tr><td>First Name:</td><td><input type='text' style='font-weight:bold;' name='firstname' maxlength='15' value=''></td></tr>";
echo "<tr><td>Last Name:</td><td><input type='text' style='font-weight:bold;' name='lastname' maxlength='15' value=''></td></tr>";
echo "<tr><td>Email Address:</td><td><input type='email' style='font-weight:bold;' name='email' maxlength='100' id='email'value=''></td><td><span id='result' style='color:red;'></span></td></tr>";
echo "<tr><td>Password:</td><td><input type='password' style='font-weight:bold;' name='password' maxlength='15' value=''></td></tr>";
echo "<tr><td>Confirm Password:</td><td><input type='password' style='font-weight:bold;' name='ConfirmPassword' maxlength='15' value=''></td></tr>";
echo "<tr><td>&nbsp;</td><td><input type='submit' name='submit' value='Register Account'/></td></tr>";
echo "<tr><td colspan = '2'><p>Already have an account? <a href='index.php'><b>Login Here</b></a></td></tr>";
echo "</tr></td></table>";
echo "</form>";
?>
        </div>
    <div class="footer-link">
                    <p>Copyright © 2022 R.H.M. Premakumara IT18203240 </p>
                </div>
</body>
<script src="js/jquery-1.2.6.min.js"></script>
<script>
    $(document).ready(function () {

        $('#email').blur(function (event) {

            event.preventDefault();
            var emailId = $('#email').val();
            $.ajax({
                url: 'checkuser.php',
                method: 'post',
                data: {
                    email: emailId
                },
                dataType: 'html',
                success: function (message) {
                    $('#result').html(message);
                }
            });



        });

    });
</script>

</html>