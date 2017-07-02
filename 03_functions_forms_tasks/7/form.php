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
    .form label input, .form label textarea {
        float: left;
    }

    textarea {
        width: 300px;
        height: 50px;
    }
    .comment {
        margin: 20px auto;
        border-bottom: 1px solid #000;
        margin-bottom: 15px;
        width: 50%;
    }

    .comment div {

        padding-bottom: 10px;
        margin-bottom: 10px;
        border-bottom: 1px dashed #000;
    }

    .comment div span {
        color: #888888
    }
</style>

<?php

$comments = file_get_contents("comments.txt");
$comments = explode("\n", trim($comments));


require_once "form.php";
?>

<?php if(count($comments) > 0):?>
    <?php foreach($comments as $item):
        $item = json_decode($item, true);?>
        <div class="comment">
            <div>
                <span>@ <?=date('H:i d-m-Y', $item['date'])?></span>
            </div>
            <p>
               <?=$item['text_1']?>
            </p>

        </div>
    <?php endforeach;?>
<?php endif;?>


<form class="form" action="7.php" method="POST">
    <label for="text_1">
        For comments
        <textarea name="text_1" id="text_1" required></textarea>
    </label>

    <input type="submit">
</form>


</body>
</html>