<?php
    include $_SERVER["DOCUMENT_ROOT"]."/VidTube_organize/model/queries.php";

    $results = Queries::searchTitle($_GET['title']);
    $num_results = $results ->num_rows;

    if ($num_results > 0) {
        echo "true";
    }
    else
        echo "false";
?>