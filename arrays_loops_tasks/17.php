<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MONTHS</title>
</head>
<body>
<?php
$months = array(
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
);

$month = date('F');

foreach ($months as $i){
    if ($i == $month){
        echo "<b>$i</b> <br/>";
    }else {
        echo "$i <br/>";
    }
}
?>

</body>
</html>



