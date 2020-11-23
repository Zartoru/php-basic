<?php

// http://localhost:8000/form.php?login=foo

echo '<pre>';
var_dump($_GET);
echo '</pre>';

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input id="login" name="login" type="text">
        <button type="submit">ok</button>
    </form>
</body>
</html>