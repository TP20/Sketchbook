<!doctype html>
<head>
<?php
  session_start();
    if(!isset($_SESSION['logged_in'])) {
        header("Location: ../index.php");
        #header("Refresh:0; url=../index.php");

    }
  ?>
  <?php
  function runMyFunction() {
     unset($_SESSION['logged_in']);  
     session_destroy(); 
     #header("Refresh:0; url=../index.php");
     header("Location: ../index.php");

  }

  if (isset($_GET['logout'])) {
    runMyFunction();
  }
?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel ="stylesheet" href ="../css/vidPage.css">
    <link rel ="stylesheet" href ="../css/editPage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,500;1,600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,500;1,600&display=swap" rel="stylesheet">

</head>

<body>

  <!--   <nav class="navbar navbar-inverse navbar-fixed-top">
         <span style ="text-align:center; color:white;" onclick = "navbar.display('.videoSection')" class= "glyphicon glyphicon-align-justify navbar-brand custom-nav-toggle"> </span>
         <p style="margin-top:2px; color:white" class="navbar-brand"> SketchBook </p>     
          
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
                <div class="col-sm-12 custom-navbar-tabs" onclick="location.href ='editPictureView.php?logout=true'">
                    <div class="col-sm-12 custom-navbar-text">
                         <span class=" glyphicon glyphicon-log-out"> Logout </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
<!--<div id="custom-navbar-section" style="position:fixed; display:flex;">
     
        <div  id="custom-navbar" style=" width:20rem">
 <div style="display:flex; justify-content:center;">
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
                <div class="col-sm-12 custom-navbar-tabs" onclick="location.href ='editPictureView.php?username=<?php echo $_GET['username'] ?>'">
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
             <div class="col-sm-12 custom-navbar-tabs" onclick="location.href ='editPictureView.php?username=<?php echo $_GET['username'] ?>'">
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
<!---- PIXLR API -->
    <div class="col-sm-5" id="pixlrFrame" frameborder="0" style="border:black solid;">
         <p id ="selectImage_text"> Please select an image to edit </p>
         <p id ="uploadImage_text"> Please upload an image </p>
    </div>

    <div class="col-sm-5 imageSection" style=" margin-top:71px; height:390px;">
        <div class="col-sm-12">
            <h1 id ="uploadText" style="text-align:center;"> Uploaded Images </h1>
            <!-- <?php
                require_once($_SERVER["DOCUMENT_ROOT"]."/VidTube_organize_local/controller/editPictureController.php");
                echo EditPictureController::checkUploadedVideo($_GET['username']);
             ?> -->
        </div>
        <div class="col-sm-12">
            <?php
                require_once($_SERVER["DOCUMENT_ROOT"]."/VidTube_organize_local/controller/pictureController.php");
                //  Pictures::displayRecentlyAdded_editPage($_GET['username']);
                Pictures::displayUserUploaded($_GET['username']);
            ?>
        </div>
    </div>
    <?php
        require_once($_SERVER["DOCUMENT_ROOT"]."/VidTube_organize_local/controller/editPictureController.php");
        echo EditPictureController::checkUploadedVideo($_GET['username']);
     ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type ="text/javascript" src="../js/vidPage.js"></script>
<script type ="text/javascript" src="../js/navbar.js"></script>
<script type="text/javascript" src ="../js/pixlr.js"></script>
<script type="text/javascript" src ="../js/editPicture.js"></script>
<script type ="text/javascript">
     pixlr.overlay.show({image:<?php echo json_encode($_GET['image']); ?>, title:<?php echo json_encode($_GET['title']); ?>, redirect:'false', locktitle:'true', target: "http://localhost/VidTube_organize_local/controller/uploadImage.php", locktype:'true', wmode:'transparent', locktarget:'true', method:'get', service:'editor'});
</script>

</body>

</html>
