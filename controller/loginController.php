<?php
if(!isset($_SESSION)) 
{
session_start();
}
    class Login {
        
        public static function isUserValid($username, $password) {
      //        include_once "./../model/dbconnect.php";
    //echo $_SERVER["DOCUMENT_ROOT"]."/VidTube_organize/model/dbconnect.php";
              include_once $_SERVER["DOCUMENT_ROOT"]."/VidTube_organize_local/model/dbconnect.php";
              include_once $_SERVER["DOCUMENT_ROOT"]."/VidTube_organize_local/model/queries.php";
            
            $results= Queries::verifyCredentials($username, $password);                    
            $num_result = $results -> num_rows;
            $VALID_CREDENTIALS = $num_result > 0;
         //   $URL_HOMEPAGEVIEW = "http://thujan-sketchbook.000webhostapp.com/view/homePageView.php?username=".$_POST['username'];
          # $URL_HOMEPAGEVIEW = "https://sketchbook2.000webhostapp.com/view/homePageView.php?username=".$_POST['username'];
           $URL_HOMEPAGEVIEW = "https://localhost/VidTube_organize_local/view/homePageView.php?username=".$_POST['username'];

            if ($VALID_CREDENTIALS) { 
                $_SESSION['logged_in'] = 'tutorialspoint';  
                header("Location: ".$URL_HOMEPAGEVIEW);
            }        
            else {
                $errorMsg = " <script type=\"text/javascript\">";
                $errorMsg.= "document.getElementById('invalidInput').style.display = \"block\";";
                $errorMsg.= "$(\".username_input\").addClass(\"has-error\");";
                $errorMsg.= "$(\".password_input\").addClass(\"has-error\");";
                $errorMsg.=  "</script>";
                
                return $errorMsg;
            }
        }
    }
?>