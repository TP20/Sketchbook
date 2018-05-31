<?php



 Class Queries {

    public static function recentlyViewed(){
        include $_SERVER['DOCUMENT_ROOT']."/VidTube_organize/model/dbconnect.php";
        $sql = "select distinct image, user, title from images order by id desc limit 5 ;";
        $results = $conn -> query($sql);
        return $results;
    }

    public static function uploadedByUser ($user) {
        // include $_SERVER['DOCUMENT_ROOT']."/VidTube_organize/model/dbconnect.php";
        // $sql = "select * from images where user='".$user."' group by image;";
        // echo "USER-----------------------".$user;
        // $results = $conn -> query($sql);
        // return $results;
        include $_SERVER['DOCUMENT_ROOT']."/VidTube_organize/model/dbconnect.php";
        $sql = "SELECT * FROM `uploadedimages` WHERE user ='".$user."'";
        // $sql = "select * from images where user='".$user."' group by image;";
        $results = $conn -> query($sql);
        return $results;
    }

    public static function recentyViewedByUser ($user) {
        include $_SERVER['DOCUMENT_ROOT']."/VidTube_organize/model/dbconnect.php";
        $sql = "select * from images where username='".$user."'";
        $results = $conn -> query($sql);
        return $results;
    }

    public static function recentlyAdded() {
        include $_SERVER['DOCUMENT_ROOT']."/VidTube_organize/model/dbconnect.php";
        $sql = "select * from images";
        $results = $conn -> query($sql);
        return $results;
    }

    public static function verifyCredentials($username, $password) {
        include $_SERVER['DOCUMENT_ROOT']."/VidTube_organize/model/dbconnect.php";
        $sql = "SELECT * FROM registration where BINARY username='".$username."' and password = '".$password."'";
        $results = $conn -> query($sql);
        return $results;
       // $num_result = $results -> num_rows;
    }

    public static function imageUpload($username, $title, $image) {
        include $_SERVER['DOCUMENT_ROOT']."/VidTube_organize/model/dbconnect.php";
        $date = date_create()->format('Y-m-d H:i:s');
        echo $username;
        echo $image;
        echo $date;
        echo $title;
        $sql = "INSERT into uploadedimages VALUES (0,'".$username."','".$image."','".$date."','".$title."' )";
        $conn-> query($sql);
            echo" done";
    }

     public static function recentlyUploaded() {
         include $_SERVER['DOCUMENT_ROOT']."/VidTube_organize/model/dbconnect.php";
         $sql = "Select * from uploadedimages order by id desc limit 5";
         $results = $conn-> query($sql);
         return $results;
     }

     public static function getViews($image) {
         include $_SERVER['DOCUMENT_ROOT']."/VidTube_organize/model/dbconnect.php";
         $sql= "select count(distinct user) as clicks, image from images where image='".$image."' group by image";
         $results = $conn -> query($sql);
         $row = $results-> fetch_assoc();
         return $row['clicks'];
     }

     public static function search($vid) {
         include $_SERVER["DOCUMENT_ROOT"]."/VidTube_organize/model/dbconnect.php";
//            $sql = "Select * from images where image= 'Penguin.jpg'";
          $sql = "Select distinct image, title, user from uploadedimages where title Like '".$vid."%'";
         //          $sql = "Select * from images";

//         echo $sql;
         $results = $conn-> query($sql);
        // $rows= $results ->num_rows;
         // var_dump($results);
        // $results->close();
         return $results;
     }

     public static function searchImage($image) {
         include $_SERVER["DOCUMENT_ROOT"]."/VidTube_organize/model/dbconnect.php";

         $sql = "Select image from uploadedimages where image='".$image."'";
         $results = $conn-> query($sql);
         return $results;

     }
      public static function registerUser($fName, $lName, $username, $password) {

//     public static function registerUser($fName, $lName, $location, $pNumber, $username, $password) {
         include $_SERVER["DOCUMENT_ROOT"]."/VidTube_organize/model/dbconnect.php";

//         $sql = "Insert into registration values ('".$fName."','".$lName."','".$location."',".$pNumber.",'".$username."','".$password."')";
         $sql = "Insert into registration values ('".$fName."','".$lName."',' ',' ','".$username."','".$password."')";
         $conn-> query($sql);
     }

     public static function searchTitle ($title) {
         include $_SERVER["DOCUMENT_ROOT"]."/VidTube_organize/model/dbconnect.php";
         $sql = "SELECT * FROM uploadedimages WHERE title='".$title."'";
         $results = $conn -> query($sql);

         return $results;
     }

     public static function searchImageAuthor ($title) {
         include $_SERVER["DOCUMENT_ROOT"]."/VidTube_organize/model/dbconnect.php";
         $sql = "SELECT user FROM uploadedimages WHERE title='".$title."'";
         $results = $conn -> query($sql);
         $row = $results-> fetch_assoc();
         return $row['user'];
     }


     public static function clickedImage($username, $image, $title) {
        include $_SERVER["DOCUMENT_ROOT"]."/VidTube_organize/model/dbconnect.php";

        $date = date_create()->format('Y-m-d H:i:s');
        $sql = "insert into images values(0,'".$_GET['username']."','".$_GET['image']."','".$date."','".$title."')";
        $conn-> query($sql);
     }

//
//    public static function topRated(){
//
//    }
}

?>
