
<?php

if ($_SERVER ['REQUEST_METHOD'] == "POST"){

    $name = substr($_FILES["myimages"]["name"],0,1)."_".date('Y-m-d')."_".time();
    $result[]=$name;
    move_uploaded_file($_FILES['myimages']['tmp_name'], "gallery/".$name.".jpg");
}









