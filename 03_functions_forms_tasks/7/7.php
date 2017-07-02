
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $formData = [];

    foreach ($_POST as $key => $value) {
        $formData[$key] = htmlspecialchars($value);
    }

    $formData['date'] = $_SERVER['REQUEST_TIME'];
    $userdata = json_encode($formData);

    file_put_contents("comments.txt", $userdata . "\n", FILE_APPEND);

}

