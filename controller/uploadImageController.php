<?php

    include_once $_SERVER["DOCUMENT_ROOT"].'/model/queries.php';
    //$upload =1;
    //$allowedext= array("jpg", "png");
    $file_dir = "../Images";
    if (isset ($_FILES['filename'])){
        $errors = array();
        $ext_accepted = array("jpg", "png");

        $filename = $_FILES['filename']['name'];
        $filesize = $_FILES['filename']['size'];
        $filetype = $_FILES['filename']['type'];

        $tmpname = $_FILES['filename']['tmp_name'];

        $ext = strtolower(end(explode('.', $_FILES['filename']['name'])));
        //(strtolower(end(explode('.',$filename))));
       // echo $tmpname;

        if (in_array($ext, $ext_accepted) == false) {
            $errors = "Error. File is not an image";
           // echo "error";
        }

//        if ($filesize > 5000) {
//            $errors = "Error. File is to big";
//        }
//
        if (file_exists($file_dir."/".$filename)) {
            $errors = "Error. File already exists.";
        }

        if ((Queries::searchTitle($_POST['title']) -> num_rows) >0){
            $errors ="Error. Title already exists";
        }

        if (empty($errors)) {
            if (move_uploaded_file($tmpname, $file_dir."/".$filename)) {
                Queries::imageUpload($_POST['username'], $_POST['title'], $_FILES['filename']['name']);
                $URL_HOMEPAGEVIEW = "http://sketchbook2.000webhostapp.com/view/homePageView.php?username=".$_POST['username'];
                header("Location: ".$URL_HOMEPAGEVIEW);
            }
            else {
                echo "Nooo";
            }
        }
        else {
            // $URL_HOMEPAGEVIEW = "http://thujan-sketchbook.000webhostapp.com/view/uploadView2.php?username=".$_POST['username'];
            $URL_HOMEPAGEVIEW = "http://sketchbook2.000webhostapp.com/view/uploadViewError.php?username=".$_POST['username']."&invalidImage=".$_FILES['filename']['name'];
            header("Location: ".$URL_HOMEPAGEVIEW);
        }

    }


?>
