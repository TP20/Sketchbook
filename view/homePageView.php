<!doctype html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel ="stylesheet" href ="../css/vidPage.css">
    <link rel ="stylesheet" href ="../css/landingPage.css">
</head>

<body>

     <nav class="navbar navbar-inverse navbar-fixed-top">
         <span style ="text-align:center; color:white;" onclick = "navbar.display('.videoSection')" class= "glyphicon glyphicon-align-justify navbar-brand custom-nav-toggle"> </span>
         <p style="margin-top:2px; color:white" class="navbar-brand"> SketchBook </p>        <!--          </a>-->

         <form class="navbar-form navbar-right" role="search">
            <div class="form-group col-sm-3">
                <input  id="searchInput" onkeyup="searchPic();" type="text" placeholder="Search" name="searchText" id ="search">
            </div>
        </form>
     </nav>
     <div class="col-sm-2" id="custom-navbar-section" style="position:fixed; display:block">
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
    <div  class="col-sm-10 col-xs-10 videoSection">
        <div class="col-sm-12" id="recentlyViewedSection">

            <div class="col-sm-12">
                <h1 class="videoSubheading"> Recently Viewed</h1>
            </div>
            <div class ="col-sm-12" id="recentlyViewedVideos">
                <?php
                    require_once($_SERVER["DOCUMENT_ROOT"]."/controller/pictureController.php");
                    Pictures::displayRecentlyViewed($_GET['username']);
                ?>
            </div>
        </div>
        <div class="col-sm-12" id="recentlyAddedSection">
            <div class="col-sm-12">
                <h1 class="videoSubheading"> Recently Added </h1>
            </div>
            <div class ="col-sm-12" id="recentlyAddedVideos">
                <?php
                    require_once($_SERVER["DOCUMENT_ROOT"]."/controller/pictureController.php");
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
