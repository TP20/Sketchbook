<!doctype html>
<html>

<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<link rel="stylesheet" href="../css/vidtube.css">
<link rel="stylesheet" href="../css/vidPage.css">
<link rel ="stylesheet" href ="../css/nav.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,500;1,600&display=swap" rel="stylesheet">

</head>

<!--<body style="background-color: rgb(232,234,235);  background-size: cover;">-->
<body>
   
<!--<nav class="navbar navbar-inverse" style="width:100%; margin:0; border-radius:0; width: 100%; margin: 0; border-radius: 0; position: fixed; top: 0px; z-index: 2;">
         <span style ="text-align:center; color:white;" onclick = "navbar.display('.videoSection')" class= "glyphicon glyphicon-align-justify navbar-brand custom-nav-toggle"> </span>
         <p style="margin-top:2px; color:white" class="navbar-brand"> SketchBook </p>       
          

         <form class="navbar-form" role="search">
            <div class="form-group">
                <input  id="searchInput" onkeyup="searchPic();" type="text" placeholder="Search" name="searchText" id ="search">
            </div>
        </form>
     </nav>
     <div id="custom-navbar-section" style="position:fixed; display:block; z-index:1">
        <div  id="custom-navbar" style="margin-left:0px; width:20rem">
           <div class="col-sm-12">
                <div class="col-sm-12 custom-navbar-tabs" onclick="location.href ='homePageView.php?username=<?php echo $_GET['username'] ?>'">
                    <div class="col-sm-12 custom-navbar-text">
                       <span class="glyphicon glyphicon-home"> Home </span>
                    </div>
                </div>
            </div>
      
            <div class="col-sm-12">
                <div class="col-sm-12 custom-navbar-tabs" onclick="location.href ='analyticsView.php?username=<?php echo $_GET['username'] ?>'">
                    <div class="col-sm-12 custom-navbar-text">
                        <span class="glyphicon glyphicon-signal"> Analytics </span>
                    </div>
                </div>
            </div>
             <div class="col-sm-12">
                <div class="col-sm-12 custom-navbar-tabs" onclick="location.href ='uploadView2.php?username=<?php echo $_GET['username'] ?>'">
                    <div class="col-sm-12 custom-navbar-text">
                        <span class="glyphicon glyphicon-upload"> Upload </span>
                    </div>
                </div>
            </div>
             <div class="col-sm-12">
                <div class="col-sm-12 custom-navbar-tabs" onclick="location.href ='homePageView.php?logout=true'">
                    <div class="col-sm-12 custom-navbar-text">
                         <span class=" glyphicon glyphicon-log-out"> Logout </span>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div id="custom-navbar-section" style="position:fixed; display:flex;">
     
        <div  id="custom-navbar" style=" width:20rem">
       <!-- <span style="text-align:center; color:white;" onclick="navbar.display('.videoSection')" class="glyphicon glyphicon-align-justify navbar-brand custom-nav-toggle"> </span>
--> <div style="display:flex; justify-content:center;">
        <p style="margin-top:2px; color: #e5be00" class="navbar-brand"> SketchBook </p>
</div>
     
        <div class="col-sm-12" style="display:flex; justify-content:center;"><div class="col-sm-12" style="background: white; width: 100%; margin: 0px auto;"></div>

            </div>
           <div class="col-sm-12">
                <div class="col-sm-12 custom-navbar-tabs" onclick="location.href ='homePageView.php?username=<?php echo $_GET['username'] ?>'">
                    <div class="col-sm-12 custom-navbar-text">
                       <span class="glyphicon glyphicon-home">  </span><span class="sidebar-text">Home </span>
                    </div>
                </div>
            </div>
         <div class="col-sm-12">
                <div class="col-sm-12 custom-navbar-tabs" onclick="location.href ='editPictureView2.php?username=<?php echo $_GET['username'] ?>&image=Images/initial'">
                    <div class="col-sm-12 custom-navbar-text">
                        <span class="glyphicon glyphicon-pencil">  </span><span class="sidebar-text">Edit </span>
                    </div>
                </div>
            </div> 
            <div class="col-sm-12">
                <div class="col-sm-12 custom-navbar-tabs" onclick="location.href ='analyticsView.php?username=<?php echo $_GET['username'] ?>'">
                    <div class="col-sm-12 custom-navbar-text">
                        <span class="glyphicon glyphicon-signal">  </span><span class="sidebar-text">Analytics </span>
                    </div>
                </div>
            </div>
             <div class="col-sm-12">
                <div class="col-sm-12 custom-navbar-tabs" onclick="location.href ='uploadView2.php?username=<?php echo $_GET['username'] ?>'">
                    <div class="col-sm-12 custom-navbar-text">
                        <span class="glyphicon glyphicon-upload">  </span><span class="sidebar-text">Upload </span>
                    </div>
                </div>
            </div>
             <div class="col-sm-12">
                <div class="col-sm-12 custom-navbar-tabs" onclick="location.href ='homePageView.php?logout=true'">
                    <div class="col-sm-12 custom-navbar-text">
                         <span class=" glyphicon glyphicon-log-out">  </span><span class="sidebar-text">Logout </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="minimize" style="width: 0.5rem; height:100%;background: repeating-radial-gradient(#e5be00, transparent 100px);">

    </div>
    </div>
    <div class="test" style="float: none;">
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
                    <input class="form-control upload-button" id="uploadButton" type ="submit" value = "Upload">
                </div>
            </form>              
        </div>
    </div>
<!--    </div>-->
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type ="text/javascript" src="../js/vidPage.js"></script>
<script type ="text/javascript" src="../js/navbar.js"></script>
    <script type ="text/javascript" src="../js/upload.js"></script>

    
</body>

</html>