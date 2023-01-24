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
    $zin = "Deze student is erg goed in programmeren in PHP";
function breekaf($lengte, $zin){
    
    $zin = wordwrap($zin, $lengte);

    $zin = explode("\n", $zin);

    $zin = $zin[0];   
  

   if($lengte <=11){
    $zin = substr($zin, 4);
    }
    

    return $zin;
}



echo breekAf(32, "Deze student is erg goed in programmeren in PHP");
echo '<hr>';	
echo breekAf(18, "Deze student is erg goed in programmeren in PHP");	
echo '<hr>';
echo breekAf(19, "Deze student is erg goed in programmeren in PHP");
echo '<hr>';	
echo breekAf(20, "Deze student is erg goed in programmeren in PHP");
echo '<hr>';	
echo breekAf(21, "Deze student is erg goed in programmeren in PHP");
echo '<hr>';	
echo breekAf(24, "Deze student is erg goed in programmeren in PHP");
echo '<hr>';	
echo breekAf(3, "Deze student is erg goed in programmeren in PHP");
echo '<hr>';
?>
</body>
</html>