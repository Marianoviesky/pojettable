<?php
$a = 2;
$ess = "'".''.$a.''."'";

echo $ess;


$d = date("d");
echo "\n".$d;
$d +=1;
echo "\n".$d;
$p = date("m");
echo "\n".$p;
$c = date("M");
echo "\n".$c."\n";
$rt = $d.$p;
echo $rt."\n";
$rt=intval($rt);
var_dump($rt);

header("location")
?>