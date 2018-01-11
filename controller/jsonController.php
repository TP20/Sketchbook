<?php

 Class Json {

    public static function appendToJson_Comment ($comment, $username, $filename) {
    $date = date_create()->format('Y-m-d H:i:s');
    $filename = explode('.',$_GET['image'])[0];
        $postCommentArray = array (
            "comment" => $comment,
            "username" => $username,
            "date" => $date);

        $json = json_encode ($postCommentArray);
        // $test = explode('.', $filename);
        $commentsJson_file= '../comments/'.$filename.".json";

        if (filesize($commentsJson_file)>0) {
            $json = ",".$json;
        }

        file_put_contents($commentsJson_file, $json, FILE_APPEND);
    }
     
    public static function printComments() { 
        $filename = explode('.',$_GET['image'])[0];
       // if (file_exists("../comments/".$_GET['title'].".json")) {
        if (!file_exists("../comments/".$filename.".json")) {
           fopen("../comments/".$filename.".json", "w");
        }
        else {
            fopen("../comments/".$filename.".json", "r");
        }
        $str = file_get_contents("../comments/".$filename.".json");
        $str_modified = "[".$str."]";                            
        $json = json_decode($str_modified, true);

        foreach ($json as $key) {
            echo "<div style ='margin-top:2%'>";
            echo "<b>".$key['username']."</b> <em> ".$key['date']." </em> <br>";
            echo "<span style='margin-left:20px'>".$key['comment']."</span><br>";
            echo "<div style ='border:rgb(232,232,232); margin-top:2%'> </div>";
            echo "</div>";

        }     
    }
 }


if (isset($_GET['comment']) && isset($_GET['username']) && isset($_GET['title'])) {
    Json::appendToJson_Comment($_GET['comment'], $_GET['username'], $_GET['title']);
}

?>