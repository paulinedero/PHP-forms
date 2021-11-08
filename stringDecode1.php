<?php
$firstMessage = "0@sn9sirppa@#?ia'jgtvryko1";
$secondMessage = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$thirdMessage = "aopi?sgnirts@#?sedhtg+p9l!";

$message = [$firstMessage, $secondMessage, $thirdMessage];
foreach ($message as $message) {
    $keyNumber = strlen($message)/2;
    $substring = substr($message, 5, $keyNumber);
    $specialCharacters = array("@", "#", "?");
    $replacingCharacters = str_replace($specialCharacters, " ", $substring);
    $result = strrev($replacingCharacters) . ' ';
    echo $result;
}
?>