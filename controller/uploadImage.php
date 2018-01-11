<?php
    $file_dir = "/Images";
    $img = $_GET['image'];
    //$dir= "../Images/testing.jpeg";
    $dir= "../Images/".$_GET['title'].".jpg";
    copy($img, $dir);
    echo "done";
?>