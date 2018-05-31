<?php 
/* Record clicked image to db and redirect */

        require_once("../model/queries.php");
        Queries::clickedImage($_GET['username'], $_GET['image'], $_GET['title']);
//        $newURL = "http://thujan-sketchbook.000webhostapp.com/view/clickedPictureView.php?username=".$_GET['username']."&title=t&image=".$_GET['image']."&imagen=".$_GET['image'];
        $newURL = "https://sketchbook2.000webhostapp.com/view/clickedPictureView.php?username=".$_GET['username']."&title=".$_GET['title']."&image=".$_GET['image'];
        header('Location: '.$newURL);

?>