<!doctype html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel ="stylesheet" href ="../css/vidPage.css">
</head>

<body class="zoom-moz">

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

    <div class="col-sm-5" id="selectedPicture" style="border: rgb(239,239,239) solid; margin:0px auto; background-image:url('../Images/<?php echo $_GET['image'] ?>'); margin-left:232px; background-size:100% 100%; margin-top:71px; display:block;  width: 551px; height:390px;"frameborder="0">
    </div>

    <div class="col-sm-4" style="display:block; margin-top:71px; left:100px;">
<!--
        <div class="col-sm-12">
                <h1 style ="text-align:center">Images</h1>
            </div>
-->
        <div class="col-sm-12" style =" border:rgb(239,239,239) solid; overflow:auto; height:390px;">
<!--        <div class="col-sm-12">-->
            <?php
                require_once($_SERVER["DOCUMENT_ROOT"]."/controller/pictureController.php");
                Pictures::displayRecentlyViewed_clickedPage();
            ?>
        </div>
    </div>

    <div class="col-sm-5" style="height:390px; margin-left:202px; display:block">
        <div class="col-sm-12" style="border:white solid; height:100%">
            <div style ="margin:0px auto; height: 100%; background-color:white;">
                <h1 style=" color:black"> Comments </h1>
                <form class="commentForm" style="margin:2%">
                   <div class="form-group">
                        <textarea type="text" name="comment" id="commentTextArea" class="form-control" style="resize:none" rows="3"> </textarea>
                        <input type="hidden" name="image" value=<?php echo "".$_GET['image']."" ?>>
                        <input type="hidden" name="username" value=<?php echo "".$_GET['username']."" ?>>
                        <input type="hidden" name="title" value=<?php echo "".$_GET['title']."" ?>>
                  <!--      <input type="hidden" name="title" value=<?php echo "test" ?>> -->
                  </div>
                  <button type="submit" onclick="addComment();" name ="submit" style="display:block; text-align:center" class="btn btn-default">Add comment</button>
                </form>
                <div id="existingComments" style ="overflow-y:auto; height:200px ; margin:2%; margin:2%;">
                    <?php
                        require_once($_SERVER["DOCUMENT_ROOT"]."/controller/jsonController.php");
                        Json::printComments();
                    ?>
                </div>
            </div>
        </div>
    </div>

<!-- Latest compiled and minified JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="controller/createJSON.js"></script>
<script type ="text/javascript" src="../js/vidPage.js"></script>
<script type ="text/javascript" src="../js/navbar.js"></script>
<script type="text/javascript" src ="../js/addComment.js"></script>

</body>

</html>
