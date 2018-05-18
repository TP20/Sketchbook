<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/model/queries.php";

$results = Queries::search($_GET['searchVid']); 
$RESULTS_RETURNED = $results -> num_rows != 0;

    if ($RESULTS_RETURNED) {
        while  ($row = $results -> fetch_assoc()) { 
//             echo " <div class='col-sm-2 video' style= 'margin-bottom:17px;'  onclick = \"clickedImage('".$row['image']."')\"> 
//                 <img height='100px' width=100% src = '../Images/".$row['image']."'>
//                 <p class='col-sm-12' style ='text-align:center'>".$row['title']." </p>
//                 </div> 
//                      ";
             echo " <div class='col-sm-2 video' onclick = \"location.href = '/controller/clickedImage.php?username=".$row['user']."&image=".$row['image']."&title=".$row['title']."'\"> 
                 <img height='100px' width=100% src = '../Images/".$row['image']."'>
                 <p style='font-size:11px'><b>".$row['title']."</b> <br><em> Uploaded By: </em>".$row['user']."<br> <em>Views: </em> ".Queries::getViews($row['image'])." </p>
                 </div> 
                      "; 
        }
    }
    else 
        echo "false";
?>

