<!doctype html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel ="stylesheet" href ="../css/vidPage.css">
    <link rel ="stylesheet" href ="../css/editPage.css">
</head>

<body>

     <nav class="navbar navbar-inverse navbar-fixed-top">
         <span style ="text-align:center; color:white;" onclick = "navbar.display('.videoSection')" class= "glyphicon glyphicon-align-justify navbar-brand custom-nav-toggle"> </span>
         <p style="margin-top:2px; color:white" class="navbar-brand"> SketchBook </p>        <!--          </a>-->
     </nav>

     <div class="col-sm-2" id="custom-navbar-section" style="position:fixed; display:block;">
        <div  id="custom-navbar">
           <div class="col-sm-12">
                <div class="col-sm-12 custom-navbar-tabs" onclick="location.href ='homePageView.php?username=<?php echo $_GET['username'] ?>'">
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

<!---- PIXLR API -->
    <div class="col-sm-5" id="pixlrFrame" frameborder="0" style="border:black solid;">
         <p id ="selectImage_text"> Please select an image to edit </p>
         <p id ="uploadImage_text"> Please upload an image </p>
    </div>

    <div class="col-sm-5 imageSection" style=" margin-top:71px; height:390px;">
        <div class="col-sm-12">
            <h1 id ="uploadText" style="text-align:center;"> Uploaded Images </h1>
            <!-- <?php
                require_once($_SERVER["DOCUMENT_ROOT"]."/controller/editPictureController.php");
                echo EditPictureController::checkUploadedVideo($_GET['username']);
             ?> -->
        </div>
        <div class="col-sm-12">
            <?php
                require_once($_SERVER["DOCUMENT_ROOT"]."/controller/pictureController.php");
                //  Pictures::displayRecentlyAdded_editPage($_GET['username']);
                Pictures::displayUserUploaded($_GET['username']);
            ?>
        </div>
    </div>
    <?php
        require_once($_SERVER["DOCUMENT_ROOT"]."/controller/editPictureController.php");
        echo EditPictureController::checkUploadedVideo($_GET['username']);
     ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type ="text/javascript" src="../js/vidPage.js"></script>
<script type ="text/javascript" src="../js/navbar.js"></script>
<script type="text/javascript" src ="../js/pixlr.js"></script>
<script type="text/javascript" src ="../js/editPicture.js"></script>
<script type ="text/javascript">
     pixlr.overlay.show({image:<?php echo json_encode($_GET['image']); ?>, title:<?php echo json_encode($_GET['title']); ?>, redirect:'false', locktitle:'true', target: "https://sketchbook2.000webhostapp.com/controller/uploadImage.php", locktype:'true', wmode:'transparent', locktarget:'true', method:'get', service:'editor'});
</script>

</body>

</html>
