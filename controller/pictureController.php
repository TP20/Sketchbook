<?php
    Class Pictures {

        public static function displayRecentlyAdded($username, $page) {
            require_once ($_SERVER['DOCUMENT_ROOT']."/VidTube_organize_local/model/queries.php");

            $results = Queries::recentlyUploaded();
            if (mysqli_num_rows($results) > 0) {

            while ($row = $results -> fetch_assoc()) {
                if ($page == 'homePageView.php') {
                 //   echo "<div class='col-sm-2 video'> <div class='col-sm-12' onclick = \"location.href = '/VidTube_organize/controller/clickedImage.php?username=".$_GET['username']."&image=".$row['image']."'\" style= 'background-image: url(../Images/".$row['image']."); height:100px;'> </div>
                 //         <div class='col-sm-12'> <p> ".$row['image']."</p> </div> </div>";
              //   echo "<div class='col-sm-2 video' onclick = \"location.href = '/VidTube_organize/controller/clickedImage.php?username=".$_GET['username']."&image=".$row['image']."'\" style= 'margin-bottom:2px; background-image: url(../Images/".$row['image']."); height:100px;'> </div>
              //            ";

              //**Recently Commented out */
             #   echo " <div class='col-sm-2 video' onclick = \"location.href = '/VidTube_organize_local/controller/clickedImage.php?username=".$_GET['username']."&image=".$row['image']."&title=".$row['title']."'\">
             #    <img height='100px' width=100% src = '../Images/".$row['image']."'>
             #    <p style='font-size:11px'><b>".$row['title']."</b> <br><em> Uploaded By: </em>".Queries::searchImageAuthor($row['title'])."<br> <em>Views: </em> ".Queries::getViews($row['image'])." </p>
             #    </div>
             #         ";
//**/

                      echo " <div class='video' onclick = \"location.href = '/VidTube_organize_local/controller/clickedImage.php?username=".$_GET['username']."&image=".$row['image']."&title=".$row['title']."'\">
                      <div style='height:100px;display: flex; align-items:center'>
                      <img style='width:180px; max-height:100px; align-self:center;' src = '../Images/".$row['image']."'>
                      </div>
                 <p style='font-size:11px; margin:1rem 0'><b>".$row['title']."</b> <br><span> Uploaded By: </span>".Queries::searchImageAuthor($row['title'])."<br> <span>Views: </span> ".Queries::getViews($row['image'])." </p>
                 </div>
                      ";

                    
                }

                if ($page == 'clickedPictureView.php') {
                    echo "<div class='col-sm-6 video' onclick = \"location.href= '/VidTube_organize_local/controller/clickedImage.php?username=".$_GET['username']."&image=".$row['image']."'\" style='background-image: url(../Images/".$row['image'].");'>
                         </div>";
                }
            }

        }
        else {
            echo "";
        }
        }

        public static function displayRecentlyAdded_editPage($username) {
            require_once ($_SERVER['DOCUMENT_ROOT']."/VidTube_organize_local/model/queries.php");

            $results = Queries::recentlyViewed();

            while ($row = $results -> fetch_assoc()) {
//               echo "<div class='col-sm-2 video' onclick = \"location.href='editPictureView.php?username=".$username."&title=testingJson&image=http://sketchapp-thujan.rhcloud.com/Images/".$row['image']."'\" style= 'overflow: hidden; background-image: url(../Images/".$row['image']."); width:150px; height:100px;'> </div>
//                      ";
                echo "<div class='col-sm-2 video' style =' width:150px; height:100px;' onclick = \"location.href='/VidTube_organize_local/view/editPictureView.php?username=".$username."&title=".$row['image']."&image=/Images/".$row['image']."'\">
                        <img height='80px' width='100%' src = '../Images/".$row['image']."'>
                        <p style ='font-size:11px'><b>".$row['title']."</b></p>
                      </div>
                ";

              //  onclick = \"location.href='editPictureView.php?username=".$username."&title=testingJson&image=http://sketchapp-thujan.rhcloud.com/Images/".$row['image']."

//                echo "<div class='col-sm-12 videoList' style='margin-bottom: 15px;' onclick = \"location.href = '/VidTube_organize/controller/clickedImage.php?username=".$_GET['username']."&image=".$row['image']."'\">
//                        <img class='col-sm-6' src = '../Images/".$row['image']."' style= 'overflow: hidden;  width:180px; height:100px;'>
//                        <p class='col-sm-5' style='font-size:10px'><b>".$row['image']."</b><br>Uploaded by: ".$row['user']."</p> </div> ";
//
                // echo "<div class='col-sm-3 video'> <div class='col-sm-12' onclick = \"location.href='editPictureView.php?username=".$username."&title=testingJson&image=http://i2.cdn.turner.com/nba/nba/dam/assets/151226112024-dirk-nowitzki-memphis-grizzlies-v-dallas-mavericks.split-flex-module.jpeg'\" style= 'height: 100px; background-image: url(../Images/".$row['image'].");'> </div>
                //      <div class='col-sm-12'> <span> ".$row['image']." </span> </div> </div>";
                // echo " <div class='col-sm-2 video' style= 'margin-bottom:17px;'  onclick = \"location.href='editPictureView.php?username=".$username."&title=testingJson&image=http://i2.cdn.turner.com/nba/nba/dam/assets/151226112024-dirk-nowitzki-memphis-grizzlies-v-dallas-mavericks.split-flex-module.jpeg'\">
               //  <img height='100px' width=100% src = '../Images/".$row['image']."'>
               //  <p class='col-sm-12' style ='text-align:center'>".$row['image']." </p>
               //  </div>
               //       ";

            }

        }

        public static function displayRecentlyViewed_clickedPage() {
            require_once ($_SERVER['DOCUMENT_ROOT']."/VidTube_organize_local/model/queries.php");

            $results = Queries::recentlyViewed();
            
            if (mysqli_num_rows($results) > 0) {
            while ($row = $results -> fetch_assoc()) {
                echo "<div class='col-sm-12 videoList' style='margin-bottom: 15px;width:100%; height:100px; display:flex; align-items:center' onclick = \"location.href = '/VidTube_organize_local/controller/clickedImage.php?username=".$_GET['username']."&image=".$row['image']."&title=".$row['title']."'\">
                      <img class='col-sm-6' src = '../Images/".$row['image']."' style= 'overflow: hidden;  width:180px; max-height:100px; z-index: 1;'>
                      <p class='col-sm-5' style='font-size:10px'><b>".$row['title']."</b><br>Uploaded by: ".Queries::searchImageAuthor($row['title'])."<br>Views: ".Queries::getViews($row['image'])."</p> </div> ";
            }
        }

        else {
            echo "";
        }

        }

        public static function displayRecentlyViewed($username) {
            require_once ($_SERVER['DOCUMENT_ROOT']."/VidTube_organize_local/model/queries.php");

            $results = Queries::recentlyViewed();
            #echo "".mysqli_num_rows($results);
           if (mysqli_num_rows($results) > 0) {
            while ($row = $results -> fetch_assoc()) {
//                echo " <div class='col-sm-2 video' style= 'margin-bottom:17px;'  onclick = \"location.href='editPictureView.php?username=".$username."&title=testingJson&image=http://i2.cdn.turner.com/nba/nba/dam/assets/151226112024-dirk-nowitzki-memphis-grizzlies-v-dallas-mavericks.split-flex-module.jpeg'\">
//                 <img height='100px' width=100% src = '../Images/".$row['image']."'>
//                 <p class='col-sm-12' style ='text-align:center'>".$row['image']." </p>
//                 </div>
//                      ";
//
//            }


                  echo " <div class='video'  onclick = \"location.href= '/VidTube_organize_local/controller/clickedImage.php?username=".$_GET['username']."&image=".$row['image']."&title=".$row['title']."'\">
                 <div style='height:100px;display: flex; align-items:center'>
                                   <img style='width:180px; max-height:100px; align-self:center;' src = '../Images/".$row['image']."'>
                </div>
                
                 <p style='font-size:11px; margin:1rem 0'><b>".$row['title']." </b> <br> <span>Uploaded By: </span> ".Queries::searchImageAuthor($row['title'])."<br> <span>Views: </span> ".Queries::getViews($row['image'])." </p>
                 </div>
                      ";

            }
        }
        else  {
            echo"";
        }

//            echo " <div class='col-sm-2 video'  onclick = \"location.href='editPictureView.php?username=".$username."&title=testingJson&image=http://sketchapp-thujan.rhcloud.com/Images/".$row['image']."'\">
//                 <img height='100px'  src = '../Images/".$row['image']."'>
//                 <p style='font-size:11px'><b>".$row['title']." </b> <br> <em>Uploaded By: </em> ".$row['user']." </p>
//                 </div>
//                      ";
//
//            }

          }

          public static function displayUserUploaded($username) {
             require_once ($_SERVER['DOCUMENT_ROOT']."/VidTube_organize_local/model/queries.php");

             $results = Queries::uploadedByUser($username);

             while ($row = $results -> fetch_assoc()) {

                echo "<div class='col-sm-2 video' style =' width:150px; height:100px;' onclick = \"location.href='/VidTube_organize_local/view/editPictureView2.php?username=".$username."&title=".$row['title']."&image=Images/".$row['image']."'\">
                        <img height='80px' width='100%' src = '../Images/".$row['image']."'>
                        <p style ='font-size:11px'><b>".$row['title']."</b></p>
                      </div>
                ";

             }
          }

          public static function displayUserUploaded_Analytics($username) {
            require_once ($_SERVER['DOCUMENT_ROOT']."/VidTube_organize_local/model/queries.php");

            $results = Queries::uploadedByUser($username);

            while ($row = $results -> fetch_assoc()) {

               echo "<div class='col-sm-2 video' style =' width:150px; height:120px;' onclick = \"location.href='/VidTube_organize_local/view/analyticsView.php?username=".$username."&title=".$row['title']."&image2=".$row['image']."&image=Images/".$row['image']."'\">
                       <div style='height:100px;'><img height='80px' width='100%' src = '../Images/".$row['image']."'></div>
                       <p style ='font-size:11px; margin: 1rem 0'><b>".$row['title']."</b></p>
                     </div>
               ";

            }
         }


    }
?>
