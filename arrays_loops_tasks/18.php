<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WEEK</title>
</head>
<body>
<?php
$days = array(
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday',
);



foreach ($days as $i){
    if ($i == 'Saturday'or $i == 'Sunday'){
        echo "<b>$i</b> <br/>";
    }else {
        echo "$i <br/>";
    }
}
?>

</body>
</html>