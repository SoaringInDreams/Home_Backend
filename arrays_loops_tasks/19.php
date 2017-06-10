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

$day = date('l');


foreach ($days as $i){
    if ($i == $day and $i == 'Saturday'){
        echo "<b><i>$i</i></b> <br/>";
    }elseif ($i == $day and $i == 'Sunday' ) {
        echo "<b><i>$i</i></b>  <br/>";
    }elseif ($i == 'Saturday' or $i == 'Sunday' ) {
        echo "<b>$i</b>  <br/>";
    }elseif ($i == $day){
        echo "<i>$i</i> <br/>";
    }else {
        echo "$i <br/>";
    }
}
?>

</body>
</html>