<?php

$PASSWORD_FIELDS_ARE_SET = isset($_GET['password1']) && isset($_GET['password2']);
$PASSWORDS_MATCH = $_GET['password1']== $_GET['password2'];

if ($PASSWORD_FIELDS_ARE_SET) {
    if ($PASSWORDS_MATCH) {
        echo "same";
    }
    else {
        echo "nope";
    }
}
?>