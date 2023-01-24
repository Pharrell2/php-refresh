<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="refresh" content="1">
</head>
<body>
    <?php
    date_default_timezone_set('Europe/Amsterdam');
    echo '<h1>' . 'Klok' . '</h1>' . date('h:i:sa');
    ?>
</body>
</html>