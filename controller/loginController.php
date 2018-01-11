<?php
    class Login {
        
        public static function isUserValid($username, $password) {
            include_once $_SERVER["DOCUMENT_ROOT"]."/VidTube_organize/model/dbconnect.php";
            include_once $_SERVER["DOCUMENT_ROOT"]."/VidTube_organize/model/queries.php";
            
            $results= Queries::verifyCredentials($username, $password);                    
            $num_result = $results -> num_rows;
            $VALID_CREDENTIALS = $num_result > 0;
            $URL_HOMEPAGEVIEW = "http://localhost:8080/Vidtube_organize/view/homePageView.php?username=".$_POST['username'];

            if ($VALID_CREDENTIALS) {                
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