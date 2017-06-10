 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RANDOM_TABLE</title>
</head>
<body>
<?php
$colors = array(
    'red',
    'yellow',
    'blue',
    'gray',
    'maroon',
    'brown',
    'green'
);
$row = rand(1,10);
$col = rand(1,10);

echo '<table>';

for($i=1; $i <= $row; $i++){
    echo '<tr>';
    for($j=1;$j <= $col;$j++){
        $c = rand(0,6);
        echo "<td style=\"background-color:$colors[$c]\">" . rand(-100, 100) . "</td>";
        }
    echo '</tr>';

}
echo "</table>";

?>

</body>
</html>