<?php

  Class EditPictureController {
    public static function checkUploadedVideo($user) {
      include_once $_SERVER["DOCUMENT_ROOT"]."/VidTube_Organize/model/queries.php";
      $results = Queries::uploadedByUser($user);
      $RESULTS_RETURNED = $results -> num_rows != 0;

      if ($RESULTS_RETURNED) {
      //  $displayText = "<script type= \"text/javascript\"> document.getElementById('uploadText').style.display = \"block\";";
        $displayText = "<script type= \"text/javascript\"> document.getElementById('selectImage_text').style.display = \"block\";";
        $displayText .= " document.getElementById('uploadImage_text').style.display = \"none\";";
        $displayText .= " document.getElementById('uploadText').style.display = \"block\"; </script>";
        return $displayText;
      }
      else {
      //  $displayText = "<script type= \"text/javascript\"> document.getElementById('uploadText').style.display = \"none\";";
        $displayText = "<script type= \"text/javascript\"> document.getElementById('selectImage_text').style.display = \"none\";";
        $displayText .= "document.getElementById('uploadImage_text').style.display = \"block\";";
        $displayText .= " document.getElementById('uploadText').style.display = \"none\"; </script>";
        return $displayText;
      }
    }
  }

 ?>
