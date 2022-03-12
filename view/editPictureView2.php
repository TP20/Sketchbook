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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel ="stylesheet" href ="../css/vidPage.css">
<link rel ="stylesheet" href ="../css/nav.css">
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
    <div class="overlayModal" style="display:none; position: absolute; width:100%; height:1000rem; background:black; opacity:0.7; z-index:1;">

</div>

    <div id="custom-navbar-section" style="position:fixed; display:flex; z-index:2">
     
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
<div style="display:flex; justify-content:center; z-index:1">
<div style="display:flex; flex-direction:column; align-items:center">
    <div id="pixlrFrame" style="flex-direction:column;" frameborder="0">
     <!--    <p id ="selectImage_text"> Please select an image to edit </p>
         <p id ="uploadImage_text"> Please upload an image </p>
         <img class="editImage" style="margin-top:0;"/>
-->
    <!--     <div class="image-container2" style="height: 390px; width: 65rem; border:none">
-->
<div class="image-container2">

    <!--<img id="foto-image" src="../<?php echo json_encode($_GET['image']);?>?v=<?php echo time();?>" style="max-width:100%; height: 100%;"/>
-->
   <img id="foto-image" src="../<?php echo json_encode($_GET['image'])+"?time="+ time();?>" style="max-width:100%; height: 100%;"/>

        </div>
  <!--      <div class="image-container" style="height: 390px; width: 65rem; display:flex; align-items:center; justify-content:center;">
-->  <div class="image-container">

            <canvas id="mycanvas" ></canvas>

        </div>
      
    </div>
    
    <div class= "editContainer">
            <div class="sketchButton_container">
                <div class="publishButton" style="margin-top: 2rem; margin-right:2rem;">
                    <a href="#">Publish</a>

                </div>
                <div class="viewButton" style="margin-top: 2rem;">
                    <a href="#">View Images</a>
                </div>

            </div>
            <label>Brightness</label>
            <input type="range" onchange="makeBrighterByPercent(this.value)" min="1" max="100" value="0" class="slider" id="myRange">
            <label>Contrast</label>
            <input type="range" onchange="adjustContrastByPercent(this.value)" min="1" max="100" value="0" class="slider" id="myRange">
            <label>Saturation</label>
            <input type="range" onchange="adjustSaturationByPercent(this.value)" min="1" max="360" value="0" class="slider" id="myRange">
            <label>Blur</label>
            <input type="range" onchange="adjustBlur(this.value)" min="1" max="10" value="0" class="slider" id="myRange">
            <label>Invert</label>
            <input type="range" onchange="adjustInvert(this.value)" min="1" max="100" value="0" class="slider" id="myRange">
            <label>Gray Scale</label>
            <input type="range" onchange="grayScale(this.value)" min="1" max="100" value="0" class="slider" id="myRange">
            
        </div>
</div>

  <!--  <div class="col-sm-5 imageSection" style=" margin-top:71px; height:390px;"> -->

        <div class="imageSection">
        <!--<div class="col-sm-12" > -->
            <div class="col-sm-12 imageModal">
            <h5 class="closeModal" style="position:absolute;right: 2rem;top: 0.5rem;font-weight: bold;">X</h5>
                <h2 style="text-align:center; color:white">Please select and Image</h2>
            <?php
                require_once($_SERVER["DOCUMENT_ROOT"]."/VidTube_organize_local/controller/pictureController.php");
                //  Pictures::displayRecentlyAdded_editPage($_GET['username']);
                Pictures::displayUserUploaded($_GET['username']);
            ?>
        </div>
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

<script type="text/javascript">

document.querySelector(".closeModal").addEventListener("click", function(){
    document.querySelector('.imageSection').style.display="none";
    document.querySelector('.overlayModal').style.display="none";
});

document.querySelector(".viewButton").addEventListener("click", function(){
    document.querySelector('.imageSection').style.display="block";
    document.querySelector('.overlayModal').style.display="block";
}); 
//img.crossOrigin = ""; 
//img.onload = draw;
    
//window.onload = function()  {
 //var testing ="Test"+ <?php #echo $_GET['image'] ?>+"";

 var test1 = <?php echo json_encode($_GET['image']) ?>;
   // console.log(testing);
   // if(test1 !== "Images/initial") {
        console.log(test1);
        var test = <?php echo json_encode(explode('/',json_encode($_GET['image']))[1])?>.split('"')[0] ;
    
 //   document.querySelector("#foto-image").src='../Images/'+ <?php echo json_encode(explode('/',json_encode($_GET['image']))[1]) ?>.split('"')[0]+"?time="+<?php echo time() ?>+""; ?>;
 //--
 //document.querySelector("#foto-image").src='../Images/'+ test+'?time='+<?php echo time() ?>;
 document.querySelector("#foto-image").src='../Images/'+ test+'';

  //  var image1 = new Image();
    //image1.src = "mlhlogo.jpg";
    console.log("first line");

  //  if(test1 !== "Images/Initial") {
    var canvas = document.getElementById("mycanvas");
    var img1 = document.querySelector('.image-container2 #foto-image');
	canvas.setAttribute("crossorigin", "anonymous");
    var ctx = canvas.getContext("2d");
    var clientWidth2 = img1.clientWidth
        var clientHeight2 = img1.clientHeight;

        console.log("Width: "+clientWidth2);
        console.log("Height: "+clientHeight2);
 // }
   // img1.addEventListener('load', e => {
      // setTimeout(function() {
          window.addEventListener ("load", e=> {

   //         if(test1 !== "Images/initial") {
            var clientWidth2 = img1.clientWidth
        var clientHeight2 = img1.clientHeight;
        console.log("Width: "+clientWidth2);
        console.log("Height: "+clientHeight2);
        console.log("second line");
        console.log(img1.clientHeight);
        
      //  ctx.drawImage(img1,0,0);
        //ctx.scale(2,2);
       // ctx.imageSmoothingEnabled = false;
    //	canvas.setAttribute("crossorigin", "anonymous");

      //  ctx.filter="blur(4px)";
      
        var imageWidth = parseInt(img1.width);
        var imageHeight = parseInt(img1.height); 
        var canvasWidth = document.querySelector("#mycanvas").width;
        var canvasHeight = document.querySelector("#mycanvas").height;
       // ctx.drawImage(img1,10,10,300,300);
     
     
        canvas.height = imageHeight;
        canvas.width = imageWidth;
        var clientWidth2 = img1.clientWidth
        var clientHeight2 = img1.clientHeight;

      // ctx.drawImage(img1,0,0, img1.clientWidth, img1.clientHeight);
        ctx.drawImage(img1,0,0, clientWidth2, clientHeight2);
      
            console.log("test");
        document.querySelector(".image-container2").style.display= "none";
        document.querySelector(".image-container").style.border= "1px solid black";
            var test = <?php echo json_encode(explode('/',json_encode($_GET['image']))[1])?>.split('"')[0] ;
            
            
            console.log(test);
        console.log("test");

  //        } //**end condition */
        document.querySelector(".publishButton").addEventListener ("click", function() {
        
        //    let link = document.createElement('a');
         //   link.download = 'anAnswer2.png';
          //  link.href = canvas.toDataURL();
            var dataURL = canvas.toDataURL();
            //link.click();
            var imageName = <?php echo json_encode($_GET['image']); ?> 
            
            $.ajax({
            type: "POST",
            url: "script2.php",
            data: { 
                imgBase64: dataURL,
                img: imageName
            }
            }).done(function(o) {
            console.log('saved'); 
           
          document.querySelector("#foto-image").src='../Images/'+test+'?time='+<?php echo time()+20 ?>+'';
          history.go(0);
           location.reload(true);
        //   document.querySelector("#foto-image").src='../Images/'+test+'?time='+<?php echo time() ?>+'';

                console.log();
       
         //  window.location.href="http://localhost/VidTube_organize_local/controller/clickedImage.php?username="+<?php #echo json_encode($_GET['username']) ?>+"&image="+<?php #echo json_encode(explode('/',json_encode($_GET['image']))[1]) ?>.split('"')[0]+"&title="+<?php #echo json_encode($_GET['title']);?>+"";
        // window.location.href="http://localhost/VidTube_organize_local/controller/clickedImage.php?username="+<?php #echo json_encode($_GET['username']) ?>+"&image="+<?php #echo json_encode(explode('/',json_encode($_GET['image']))[1]) ?>.split('"')[0]+"&title="+<?php #echo json_encode($_GET['title']);?>+"";
  
         
         // If you want the file to be visible in the browser 
            // - please modify the callback in javascript. All you
            // need is to return the url to the file, you just saved 
            // and than put the image in your browser.
            });

            //link.click();
                });
            
//	});
       //     }, 1000);
//}	
            });
	
  let download = function(){
    //let link = document.createElement('a');
   // link.download = 'anAnswer2.png';
   // link.href = canvas.toDataURL();
     var dataURL = canvas.toDataURL();
   // link.click();

    $.ajax({
      type: "POST",
      url: "script.php",
      data: { 
         imgBase64: dataURL
      }
    }).done(function(o) {
      console.log('saved'); 
      // If you want the file to be visible in the browser 
      // - please modify the callback in javascript. All you
      // need is to return the url to the file, you just saved 
      // and than put the image in your browser.
    }).fail(function() {
    alert( "error" );
  });
  }

 /* let img = new Image();
  img.src = "https://cdn.shopify.com/s/files/1/0547/5359/1469/products/738435173241-0_8c9553bb-14b6-4712-86f5-e97fbf4735d0_600x.png?v=1645056597";
  img.setAttribute("crossorigin", "anonymous");
  img.addEventListener("click", function() {
    let canvas = document.getElementById("mycanvas");
    let ctx = canvas.getContext("2d");
    ctx.scale(2,2);
    ctx.imageSmoothingEnabled = false;
    ctx.drawImage(img, 0, 0);
    download();
  });
*/

</script>
<script type ="text/javascript">
var c=null;
var c = <?php echo json_encode($_GET['image']); ?>  
var brightness = 50;
var contrast = 50;
var saturation = 0;
var blurValue =0;
var invert =0;
var gray=0;

function makeBrighterByPercent(brightnessVal){
    brightness = brightnessVal;
    console.log("Brighterrr");
   //document.getElementById("mycanvas").style.filter = "brightness("+brightness+"%) contrast("+contrast+"%) hue-rotate("+saturation+"deg) blur("+blurValue+"px) invert("+invert+"%) grayscale("+gray+"%)";
    //ctx.filter = "brightness("+brightness+"%)"
    
     ctx.filter = "brightness("+brightness+"%) contrast("+contrast+"%) hue-rotate("+saturation+"deg) blur("+blurValue+"px) invert("+invert+"%) grayscale("+gray+"%)";
   ctx.drawImage(img1,0,0,clientWidth2, clientHeight2);

}

function adjustContrastByPercent(brightnessVal){
    contrast = brightnessVal;
   // document.getElementById("mycanvas").style.filter = "brightness("+brightness+"%) contrast("+contrast+"%) hue-rotate("+saturation+"deg) blur("+blurValue+"px) invert("+invert+"%) grayscale("+gray+"%)";
   ctx.filter = "brightness("+brightness+"%) contrast("+contrast+"%) hue-rotate("+saturation+"deg) blur("+blurValue+"px) invert("+invert+"%) grayscale("+gray+"%)";
   ctx.drawImage(img1,0,0,clientWidth2, clientHeight2);

}

function adjustSaturationByPercent(brightnessVal){
    saturation = brightnessVal;
  //  document.getElementById("mycanvas").style.filter = "brightness("+brightness+"%) contrast("+contrast+"%) hue-rotate("+saturation+"deg) blur("+blurValue+"px) invert("+invert+"%) grayscale("+gray+"%)";
  ctx.filter = "brightness("+brightness+"%) contrast("+contrast+"%) hue-rotate("+saturation+"deg) blur("+blurValue+"px) invert("+invert+"%) grayscale("+gray+"%)";
  ctx.drawImage(img1,0,0,clientWidth2, clientHeight2);

}


function adjustBlur(brightnessVal){
    blurValue = brightnessVal;
   // document.getElementById("mycanvas").filter = "brightness("+brightness+"%) contrast("+contrast+"%) hue-rotate("+saturation+"deg) blur("+blurValue+"px) invert("+invert+"%) grayscale("+gray+"%)";
 ctx.filter = "brightness("+brightness+"%) contrast("+contrast+"%) hue-rotate("+saturation+"deg) blur("+blurValue+"px) invert("+invert+"%) grayscale("+gray+"%)";
 ctx.drawImage(img1,0,0,clientWidth2, clientHeight2);

}

function adjustInvert(brightnessVal){
    invert = brightnessVal;
 //   document.getElementById("mycanvas").style.filter = "brightness("+brightness+"%) contrast("+contrast+"%) hue-rotate("+saturation+"deg) blur("+blurValue+"px) invert("+invert+"%) grayscale("+gray+"%)";
 ctx.filter = "brightness("+brightness+"%) contrast("+contrast+"%) hue-rotate("+saturation+"deg) blur("+blurValue+"px) invert("+invert+"%) grayscale("+gray+"%)";
 ctx.drawImage(img1,0,0,clientWidth2, clientHeight2);

}


function grayScale(brightnessVal){
    gray = brightnessVal;
   // document.getElementById("mycanvas").style.filter = "brightness("+brightness+"%) contrast("+contrast+"%) hue-rotate("+saturation+"deg) blur("+blurValue+"px) invert("+invert+"%) grayscale("+gray+"%)";
   ctx.filter = "brightness("+brightness+"%) contrast("+contrast+"%) hue-rotate("+saturation+"deg) blur("+blurValue+"px) invert("+invert+"%) grayscale("+gray+"%)";
   ctx.drawImage(img1,0,0,clientWidth2, clientHeight2);
}



if (c !== null) {
    console.log("image selected");

    var test = <?php echo json_encode(explode('/',json_encode($_GET['image']))[1])?>.split('"')[0] ;

    document.querySelector("#foto-image").src='../Images/'+test+'?time='+<?php echo time() ?>+'';

    var imagesL = document.querySelectorAll("img");
    for ( var i = 0; i<imagesL.length; i++) {
        imagesL[i].src= imagesL[i].src+"?time="+<?php echo time() ?>+'';
    }
  /*  document.querySelector("#selectImage_text").style.display= "none";
    document.querySelector("#pixlrFrame").style.border = "1px solid rgb(227 226 226)";
    document.querySelector(".editImage").src="../"+ <?php echo json_encode($_GET['image']); ?>; */
}
</script>

</body>

</html>
