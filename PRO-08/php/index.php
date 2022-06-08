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
    <div class="container-fluid">
        <div>
            <h1>Voting Login</h1>
            <div class="news">
                <marquee behavior="right">New polls are up and running. But they will not be up forever! Just Login and
                    then go to Current Polls to vote for your favourate candidates. </marquee>
            </div>
        </div>
        <br>
        <br>
        <div class="container-fluid">
            <table width="300" align="center" cellpadding="0" cellspacing="3">
                <tr>
                    
                    <form name="form1" method="post" action="checklogin.php" onSubmit="return loginValidate(this)">
                        <td>
                            <table width="100%" cellpadding="3" cellspacing="1">
                                <tr>
                                    <td width="78">Username/Email  </td>
                                    <td width="50"> :  </td>
                                    <td width="594"><input name="myusername" type="text" id="myusername"></td>
                                </tr>
                                <tr>
                                <td width="78"></td>
                                    <td width="50"></td>
                                    
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><input name="mypassword" type="password" id="mypassword"></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td><input type="submit" name="Submit" value="Login"></td>
                                </tr>
                            </table>
                        </td>
                    </form>
                </tr>
            </table>
            <center>
                <br>Not yet registered? <a href="registeracc.php"><b>Register Here</b></a>
            </center>
        </div>

    </div>
    <div class="footer-link">
                    <p>Copyright © 2022 R.H.M. Premakumara IT18203240 </p>
                </div>
</body>
</html>