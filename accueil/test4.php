<?php 

//date retour
$b=22;
$bb=7;
//aujourd'hui date
$c=21;
$cc=05;
//aujourd'hui
$aj=$b-$c;
$bj=$bb-$cc;
if ($b<$c) {
    $aj=$c-$b;
    if ($bj===1) {
        $sr=30-$aj;
        echo"il vous reste $sr jours";
    }elseif ($bj===2) {
        $sr=60-$aj;
        echo"il vous reste $sr jours";
    }
}else {
    if ($bj===1) {
        $sr=30+$aj;
        echo"il vous reste $sr jours";
    }
    elseif ($bj===2) {
        $sr=60-$aj;
        echo"il vous reste $sr jours";
    }else {
        echo "il vous reste $aj jour";
    }
}

?>