<!doctype html>
<html>
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
<head>
<!-- Latest compiled and minified CSS -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel ="stylesheet" href ="../css/vidPage.css">
<link rel ="stylesheet" href ="../css/clickedpicture.css">
<link rel ="stylesheet" href ="../css/nav.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,500;1,600&display=swap" rel="stylesheet">

</head>

<body>

  <!--  <nav class="navbar navbar-inverse navbar-fixed-top">
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
-->

<!--<nav class="navbar navbar-inverse" style="width: 100%; margin: 0; border-radius: 0; position: fixed; top: 0px; z-index: 2;">
         <span style ="text-align:center; color:white;" onclick = "navbar.display('.clickedPicture_content')" class= "glyphicon glyphicon-align-justify navbar-brand custom-nav-toggle"> </span>
         <p style="margin-top:2px; color:white" class="navbar-brand"> SketchBook </p>      

        
     </nav>
     <div id="custom-navbar-section" style="position:fixed; display:block">
        <div  id="custom-navbar" style="position: fixed; top: 5.5rem; width: 20rem;">
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
                <div class="col-sm-12 custom-navbar-tabs" onclick="location.href ='clickedPictureView.php?logout=true'">
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
    
<!---- PIXLR API -->

    <div class="clickedPicture_content" style="margin-top: 9rem; transition: 0.5s ease-in;">
    <div id="clickedPicture_recentlyViewed_section">
        <div id="selectedPicture" style="background-image:url('../Images/<?php echo $_GET['image']."?time=".time() ?>');"frameborder="0">
        </div>

        <div id="recentlyViewed_container">
    <!--
            <div class="col-sm-12">
                    <h1 style ="text-align:center">Images</h1>
                </div>
    -->
    <div class="pictureList-section" style="width:100%;">
    <h4 class="picture-header">Pictures</h2>

</div>
            <div id="recentlyViewedSection" style="border:none; transition: 0.5s ease-in;">
    <!--        <div class="col-sm-12">-->
                <?php
                    require_once($_SERVER["DOCUMENT_ROOT"]."/VidTube_organize_local/controller/pictureController.php");
                    Pictures::displayRecentlyViewed_clickedPage();
                ?>
            </div>
        </div>
</div>
    <div style="height:390px; display:block">
        <div style="border:white solid; height:100%">
            <div class ="comment-section" style ="height: 100%; background-color:white;">
                <h4 style=" color:black"> Comments </h4>
                <form class="commentForm">
                   <div class="form-group">
                        <textarea type="text" name="comment" id="commentTextArea" class="form-control" style="resize:none" rows="3"> </textarea>
                        <input type="hidden" name="image" value=<?php echo "".$_GET['image']."" ?>>
                        <input type="hidden" name="username" value=<?php echo "".$_GET['username']."" ?>>
                        <input type="hidden" name="title" value=<?php echo "".$_GET['title']."" ?>>
                  <!--      <input type="hidden" name="title" value=<?php echo "test" ?>> -->
                  </div>
                  <button  class="commentButton" type="submit" onclick="addComment();" name ="submit" style="display:block; text-align:center" class="btn btn-default">Add comment</button>
                </form>
                <div id="existingComments" style ="overflow-y:auto; height:200px ;">
                    <?php
                        require_once($_SERVER["DOCUMENT_ROOT"]."/VidTube_organize_local/controller/jsonController.php");
                        Json::printComments();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="../controller/createJSON.js"></script>
<script type ="text/javascript" src="../js/vidPage.js"></script>
<script type ="text/javascript" src="../js/navbar.js"></script>
<script type="text/javascript" src ="../js/addComment.js"></script>
<script type="text/javascript" src ="../js/clickedPicture.js"></script>
</body>

</html>
