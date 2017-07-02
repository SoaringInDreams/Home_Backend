<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COMPARE_TEXTS</title>
</head>
<body>
<style>

    .form {
        margin: 20px auto;
        width: 25%;
    }

    .form label {
        overflow: hidden;
        text-align: left;
        font-weight: bold;
        display: block;
        margin-bottom: 15px;
    }
    .form label input {
        float: left;
    }

    .gallery td {float: left; margin-right: 20px; border: 1px grey solid;}
    .gallery td img {display: block; width: 400px;}



</style>

<form class="form" action="6.php" method="POST" enctype="multipart/form-data">
    <label for="myimages">
        <input name="myimages" id="myimages" type = file >
    </label>
    <input type="submit">
</form>

<?php $a = scandir("gallery");
$b = [".",".."];
$c = array_diff($a, $b);
?>

<table class = "gallery">
<?php foreach ($c as $value):?>
    <tr>
        <td>
            <img src="gallery/<?=$value?>">
        </td>
    </tr>

<?php endforeach;?>
</table>


</body>
</html>