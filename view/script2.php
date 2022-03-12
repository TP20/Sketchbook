<?php

if(isset($_POST['imgBase64'])) {

    //http_response_code(int $response_code = 0)

    $encoded_data = $_POST['imgBase64'];
    $pos  = strpos($encoded_data, ';');
$type = explode(':', substr($encoded_data, 0, $pos))[1];
echo "Type = ". $type;

    if ($type = "image/png") {
        $img = str_replace('data:image/png;base64,', '', $encoded_data );
    }

    else if ($type = "image/jpg") {
        $img = str_replace('data:image/jpeg;base64,', '', $encoded_data );
    }

    $data         = base64_decode($img);
   // $file_name    = 'image_'.date('Y-m-d-H-i-s', time()); // You can change it to anything
   $file_name = $_POST['img'];
   //$file_name = 'image_'.date('Y-m-d-H-i-s', time());
    $file         = '../'.$file_name;
    $success      = file_put_contents($file, $data);
    // SAVE THE FILE 


    echo '{"error":false, "message":"Image has been saved successfully!","data":[{"fileName": "'.$fname.'"}]}';
}

?>