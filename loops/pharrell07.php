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
function begroeting($naam) {
  
  $uur= date('H');
  if($uur <12){
    echo "Goedemorgen" . $naam;
  } elseif($uur <17){
    echo "Goedenmiddag" . $naam;
  }else{
    echo "Goedenavond" . $naam;
  }
  
}

echo begroeting("Vasco");
echo "<br>";
echo begroeting("Jesse");
echo "<br>";
echo begroeting("Nadir");
echo "<br>";
?>
</body>
</html>