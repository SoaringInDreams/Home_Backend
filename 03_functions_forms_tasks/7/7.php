
<?php

$comments = file_get_contents("comments.txt");
$comments = explode("\n", trim($comments));

require_once "7.html";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $formData = [];

    foreach ($_POST as $key => $value) {
        $formData[$key] = htmlspecialchars($value);
    }

    $formData['date'] = $_SERVER['REQUEST_TIME'];
    $userdata = json_encode($formData);

    file_put_contents("comments.txt", $userdata . "\n", FILE_APPEND);

}

