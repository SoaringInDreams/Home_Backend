<?php

$colors = ['red','green','blue','orange','gray','yellow','pink'];



if($_SERVER['REQUEST_METHOD'] == 'POST') {
    setcookie('background_color', $_POST['color_select'], time() + 300);
    header("Location: background_colors.php");
}
$background_color = isset($_COOKIE['background_color']) ? $_COOKIE['background_color'] : "none";
if (isset($_COOKIE['background_color'])) {
    header("Refresh: 300");
}

require_once('index_bc.php');