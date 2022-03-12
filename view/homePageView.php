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
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel ="stylesheet" href ="../css/vidPage.css">
    <link rel ="stylesheet" href ="../css/landingPage.css">
    <link rel ="stylesheet" href ="../css/nav.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,500;1,600&display=swap" rel="stylesheet">
</head>

<body>


    <!-- <nav class="navbar navbar-inverse" style="width:100%; margin:0; border-radius:0; width: 100%; margin: 0; border-radius: 0; position: fixed; top: 0px; z-index: 2;">
         <span style ="text-align:center; color:white;" onclick = "navbar.display('.videoSection')" class= "glyphicon glyphicon-align-justify navbar-brand custom-nav-toggle"> </span>
         <p style="margin-top:2px; color:white" class="navbar-brand"> SketchBook </p>        <!--          </a>-->

       <!--  old <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
                <input  id="searchInput" onkeyup="searchPic();" type="text" placeholder="Search" name="searchText" id ="search">
            </div>
        </form> -->
   <!--  </nav> -->
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
    <div  class="videoSection">
        <!-- new -->
    <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
                <input  id="searchInput" onkeyup="searchPic();" type="text" placeholder="Search" name="searchText" id ="search">
            </div>
        </form> <!-- -->
        <div  id="recentlyViewedSection">
            
            <div >
                <h1 class="videoSubheading" style="font-family: 'Rubik', sans-serif; font-weight:600; font-size:2rem"> Recently Viewed</h1>
            </div>
            <div id="recentlyViewedVideos">
                <?php
                    require_once($_SERVER["DOCUMENT_ROOT"]."/VidTube_organize_local/controller/pictureController.php");
                    Pictures::displayRecentlyViewed($_GET['username']);
                ?>
            </div>
        </div>
        <div id="recentlyAddedSection">
            <div>
                <h1 class="videoSubheading" style="font-family: 'Rubik', sans-serif; font-weight:600; font-size:2rem"> Recently Added </h1>
            </div>
            <div id="recentlyAddedVideos">
                <?php
                    require_once($_SERVER["DOCUMENT_ROOT"]."/VidTube_organize_local/controller/pictureController.php");
                    Pictures::displayRecentlyAdded($_GET['username'],'homePageView.php');
                ?>
            </div>
        </div>
        <div class="col-sm-12" id="resultsSection">
            <div class="col-sm-12">
                <h1 class="videoSubheading"> Results </h1>
            </div>
            <div class="col-sm-12" style="text-align:center" id="noresults">
               <p> NO RESULTS </p>
            </div>
            <div class ="col-sm-12" id="resultsVideos"> </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type ="text/javascript" src ="../js/searchDB.js"> </script>
<script type ="text/javascript" src="../js/vidPage.js"></script>
<script type ="text/javascript" src ="../js/navbar.js"> </script>

</body>

</html>
