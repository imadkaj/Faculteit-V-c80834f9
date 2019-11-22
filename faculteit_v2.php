<?php

$b = readline("Van welk getal wil je de faculteit weten?" . PHP_EOL);
$a = 1;
$i = 1 ;
while($i <= $b)
{
    
    $a = $a*$i;
    $i++;
   

}
echo "de faculteit van ". $b ." is"." ". $a;