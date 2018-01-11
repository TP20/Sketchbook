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
<body>
   
    <nav class="navbar navbar-inverse navbar-fixed-top">
         <span style ="text-align:center; color:white;" onclick = "navbar.display('.videoSection')" class= "glyphicon glyphicon-align-justify navbar-brand custom-nav-toggle"> </span> 
         <p style="margin-top:2px; color:white" class="navbar-brand"> SketchBook </p>        <!--          </a>-->
    </nav>
    
    <div class="col-sm-2" id="custom-navbar-section" style="position:fixed; display:block;">
        <div  id="custom-navbar">
           <div class="col-sm-12">
                <div class="col-sm-12 custom-navbar-tabs" onclick="location.href ='homepageView.php?username=<?php echo $_GET['username'] ?>'">
                    <div class="col-sm-12 custom-navbar-text">
                       <span class="glyphicon glyphicon-home"> Home </span>
                    </div>
                </div>
            </div>
          <div class="col-sm-12">
                <div class="col-sm-12 custom-navbar-tabs" onclick="location.href ='editPictureView.php?username=<?php echo $_GET['username'] ?>'">
                    <div class="col-sm-12 custom-navbar-text">
                        <span class="glyphicon glyphicon-pencil"> Edit </span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-12 custom-navbar-tabs" onclick="location.href ='uploadView2.php?username=<?php echo $_GET['username'] ?>'">
                    <div class="col-sm-12 custom-navbar-text">
                        <span class="glyphicon glyphicon-upload"> Upload </span>
<!--                        <p> Edit </p>-->
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-12 custom-navbar-tabs" onclick="location.href ='../index.php'">
                    <div class="col-sm-12 custom-navbar-text">
                         <span class=" glyphicon glyphicon-log-out"> Logout </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="test" style="float: none; margin:0px auto">
        <h1 style="text-align:center"> Upload Picture </h1>
        <div>
            <form enctype ="multipart/form-data" class = "form-group" action ="../controller/uploadImageController.php" method ="post">
                <div>
                    <p> Short Description* </p>
                </div>
                <div class="form-group">
                    <input id="titleField" onkeyup= "checkTitleName();" class="form-control" type="text" maxlength="15" name="title" autocomplete="off"> 
                    <p id="titleExist_error" style="display:none; text-align:center; color:red"> <b> **Description Exists** </b></p>
                </div>
                <div class="form-group">
                    <input id ="fileInput" type ="file" name="filename">
                </div>
                <input type ="hidden" name="username" value = "<?php echo $_GET['username']?>" >
                <div class="form-group">
                    <input class="form-control btn-warning" id="uploadButton" type ="submit" value = "Upload">
                </div>
            </form>              
        </div>
    </div>
<!--    </div>-->
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type ="text/javascript" src="../js/vidPage.js"></script>
<script type ="text/javascript" src="../js/navbar.js"></script>
    <script type ="text/javascript" src="../js/upload.js"></script>

    
</body>

</html>