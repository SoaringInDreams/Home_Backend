<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Background color</title>
    <style>
        body {
            background-color: <?php echo $background_color;?>
        }
    </style>
</head>
<body>
<form action = "background_colors.php" method="POST">
    <select name = "color_select" id = "color_select" placeholder = "Select color">
        <option disabled selected> Choose color </option>
        <option value=" <?php echo $colors[0]; ?> "><?php echo $colors[0]; ?> color</option>
        <option value=" <?php echo $colors[1]; ?> "><?php echo $colors[1]; ?> color</option>
        <option value=" <?php echo $colors[2]; ?> "><?php echo $colors[2]; ?> color</option>
        <option value=" <?php echo $colors[3]; ?> "><?php echo $colors[3]; ?> color</option>
        <option value=" <?php echo $colors[4]; ?> "><?php echo $colors[4]; ?> color</option>
        <option value=" <?php echo $colors[5]; ?> "><?php echo $colors[5]; ?> color</option>
        <option value=" <?php echo $colors[6]; ?> "><?php echo $colors[6]; ?> color</option>
    </select>
    <input type = "submit">
</form>
</body>
</html>