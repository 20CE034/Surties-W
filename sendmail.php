<?php

$email_address = $_POST["email"];
if ($_POST["message"]) {
    mail(
        "exlphy@gmail.com",
        "Here is the sample subject line",
        $_POST["message"] . "From: $email_address",
        $additional_headers = [],
        string $additional_params = ""
    );
    
}
?>
