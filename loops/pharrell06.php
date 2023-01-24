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
$PHPCijfers=[4,5,4,5,6,6,5,8,7,6,4,8];

function onvoldoendes($array){
$returnArray= [];
for($x=0; $x < count($array);$x++){
    if($array[$x] < 5.5){
        $returnArray[]= $array[$x];

    }
}
return($returnArray);
}



echo "<pre>";
print_r( onvoldoendes([6,6,7]) );
echo '<hr>';
print_r( onvoldoendes([6,3,6,7]) );
echo '<hr>';
print_r( onvoldoendes($PHPCijfers) );
?>  
</body>
</html>
