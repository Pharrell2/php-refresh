<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
function berekenNet($getal) {
    $uitkomst = number_format($getal,2);
    return $uitkomst;
  }
  
  echo '€' . berekenNet(12);
  echo "<br>";
  echo '€' . berekenNet(12.5);
  echo "<br>";
  echo '€' . berekenNet(12.6666);
  echo "<br>";
    ?>
</body>
</html>