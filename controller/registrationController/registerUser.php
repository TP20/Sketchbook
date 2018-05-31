<?php
class Register {
    
    public static function registerUser() {
        include_once ($_SERVER["DOCUMENT_ROOT"].'/model/queries.php');
        
//        $FIELDS_ARE_SET  = isset($_POST['username']) && isset($_POST['password'])  && isset($_POST['location']) && 
//                           isset($_POST['pNumber'])  && isset($_POST['fName']) && isset($_POST['lName']);
//        $FIELDS_NOT_BLANK = ($_POST['username'] != "")  && ($_POST['password'] != "") && ($_POST['location'] != "") && 
//                            ($_POST['pNumber'] != "") && ($_POST['fName'] != "") && ($_POST['lName'] != "");
        
          $FIELDS_ARE_SET   = isset($_POST['username']) && isset($_POST['password'])  && isset($_POST['fName']) && isset($_POST['lName']);
          $FIELDS_NOT_BLANK = ($_POST['username'] != "")  && ($_POST['password'] != "") && ($_POST['fName'] != "") && ($_POST['lName'] != "");
        
        if ($FIELDS_ARE_SET && $FIELDS_NOT_BLANK) {
//            Queries::registerUser($_POST['fName'] , $_POST['lName'] , $_POST['location'] , $_POST['pNumber'] , $_POST['username'] , $_POST['password']);
            Queries::registerUser($_POST['fName'] , $_POST['lName'] , $_POST['username'] , $_POST['password']);
            header("Location: http://sketchbook2.000webhostapp.com/view/homePageView.php?username=".$_POST['username']."");
        }        
        else {
           header("Location: http://sketchbook2.000webhostapp.com/view/registrationView/registerView.html");
        }
    }
}

Register::registerUser();
?>

