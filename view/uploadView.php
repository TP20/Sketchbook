<!doctype html>
<html>

<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<link rel="stylesheet" href="../css/vidtube.css">
    <link rel="stylesheet" href="../css/vidPage.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!--<body style="background-color: rgb(232,234,235);  background-size: cover;">-->
<body style="background-image: url('../css/background.jpg');  background-size: cover;">

    <div id="wrapper">
        <div id="headMenu" style="float:right; padding: 3%">
            <nav class="navig" role="navigation">
                <li> About </li>
                <a href="registerView.html" ><li id="registration" > Register </li> </a>
                <li> Careers </li>
                <li> Services </li>
            </nav>
        </div>
        <div class="uploadDialog" style="float: none; margin:0px auto">
            <h1 style="text-align:center"> Upload Video </h1>
            <div>
                <form enctype ="multipart/form-data" class = "form-group" action ="../controller/uploadImageController.php" method ="post">
                    <div class="col-sm-12">
                        <p> Title* </p>
                    </div>
                    <div class="form-group username_input">
                        <input class="form-control" type="text" maxlength="10" name="title" autocomplete="off">
                    </div>
                    <div class="col-sm-12">
                        <p> Description </p>
                    </div>
                    <div class="form-group password_input">
                        <input class="form-control" type="text" maxlength="10" name="description">
                    </div>
                    <div class="col-sm-12">
                        <p>Video </p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type ="file" name="filename">
                    </div>
                    <input type ="hidden" name="username" value = "<?php echo $_GET['username']?>" >
                    <div class="form-group">
                        <input class="form-control" type ="submit" value = "Upload">
                    </div>
                </form>
            </div>
        </div>
    </div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</body>

</html>
