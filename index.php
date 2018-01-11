<!doctype html>
<html>

<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/vidtube.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body style="background-image: url('css/background.jpg'); -webkit-transform: scale(1.0); background-size: cover;">

    <!-- <div class="col-sm-12" id="wrapper"> -->
        <div class="col-sm-12">
          <div id="landingPage_nav">
            <nav style ="font-family: 'Roboto', sans-serif;" class="navig" role="navigation">
                <a href="../../index.php"> <li> Login </li> </a>
                <a href="view/registrationView/registerView.html"> <li id="registration" > Register </li> </a>
                <li> About </li>
                <li> Careers </li>
                <li> Services </li>
            </nav>
          </div>
        </div>
        <div class="col-sm-12">
            <div class="test">
            <img id="landingPage_logo" src="css/Sketchbook.png">
            <div>
                <form class = "form-group" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method ="post">
                    <div class="col-sm-12">
                        <p style ="font-family: 'Roboto', sans-serif;"> Username </p>
                    </div>
                    <div class="form-group username_input">
                        <input class="form-control" type="text" maxlength="10" name="username" autocomplete="off">
                    </div>
                    <div class="col-sm-12">
                        <p style ="font-family: 'Roboto', sans-serif;"> Password </p>
                    </div>
                    <div class="form-group password_input">
                        <input class="form-control" type="password" maxlength="10" name="password">
                    </div>
                    <label id="invalidInput"> ** Invalid Credentials ** </label>
                    <div class="form-group">
                        <input class="btn pull-right" id="submitButton" type="submit" value="Login">
                    </div>
                </form> <br>
                <a id="forgot_Password" style ="text-align:center"> Forgot password </a>
                <?php
                    require_once 'controller/loginController.php';

                    if (isset($_POST['username']) && isset($_POST['password'])) {
                        echo Login::isUserValid($_POST['username'], $_POST['password']);
                    }
                ?>
            </div>
          </div>
        </div>
        <div id="footer">
          <p style=" font-size: 12px; font-family: 'Roboto', sans-serif; color:white; display:block; text-align:center"> <span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span>  2016 Thujan Co, LLC
          <br> All Rights Reserved  </p>
        </div>
    <!-- </div> -->
    <!-- <div class="col-sm-12" id="footer">
        <p style="color:white; display:block; text-align:center"> Powered by: Thujan Co
        <br> All Right Reserved  <span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> </p>
    </div> -->


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</body>

</html>
