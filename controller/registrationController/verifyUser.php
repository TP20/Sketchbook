<?php 

    require_once ($_SERVER["DOCUMENT_ROOT"]."/VidTube_organize/model/dbconnect.php");
    
    $user = $_GET['username'];

    $sql = "SELECT  * FROM registration WHERE username='".$user."'";
    $results = $conn -> query($sql);
    $resultCount = $results -> num_rows;

    if ($resultCount > 0) {
        echo "** User already exists **";
    }   

?>