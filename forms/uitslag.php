<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>uitkomst</h1>

    <?php
    if(isset($_GET['getal']) && isset($_GET['getal2'])){
     $getal=$_GET['getal'];
     $getal2=$_GET['getal2'];
     echo $_GET['getal'] . 'x' . $_GET['getal2'] . '=' . $getal*$getal2;
    }

    else{
        echo '';
    }
    ?>
</body>
</html>