<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 2</title>
</head>
<body>
<form action="index.php" method="post">
    <div class="form-group">
        <label for="number" class="">Input number</label><br>
        <input type="number" id="number" name="number" class=""><br>
    </div>
    <button type="submit" class=""> Send</button>
</form>
<p>------------------------</p>

<?php

    require_once 'getData.php';

    echo getData();

?>
</body>
</html>