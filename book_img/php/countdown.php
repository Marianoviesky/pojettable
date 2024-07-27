<?php 
session_start();
require 'config.php';

$ess=$_SESSION['user_id'];
$sql="SELECT * FROM espace_client WHERE user_id='$ess'";
$result=mysqli_query($connect,$sql);

$size=10;

while ($row=mysqli_fetch_assoc($result)) {
    # code...

$day=$row['day'];
$month=$row['month'];
$name=$row['title'];


//date retour
$b=intval($day);
$bb=intval($month);


//aujourd'hui date
$today=date("d");
$tome=date("m");
$c=intval($today);
$cc=intval($tome);


//aujourd'hui
$aj=$b-$c;
$bj=$bb-$cc;
if ($b<$c) {
    $aj=$c-$b;
    if ($bj===1) {
        $sr=30-$aj;
        echo '
<div class="lement" style="top:'.$size.'px;">
                            <i class="bx bxs-info-circle"></i>
                            <div class="centaine">
                                <p>'.$name.'</p>
                                <small>Il vous reste '.$sr.' jours pour rendre le livre</small>
                                </div>
                            <span class="spani"></span>
                        </div>
';

    }elseif ($bj===2) {
        $sr=60-$aj;
        echo '
<div class="lement" style="top:'.$size.'px;">
                            <i class="bx bxs-info-circle"></i>
                            <div class="centaine">
                                <p>'.$name.'</p>
                                <small>Il vous reste '.$sr.' jours pour rendre le livre</small>
                                </div>
                            <span class="spani"></span>
                        </div>
';

    }
}else {
    if ($bj===1) {
        $sr=30+$aj;
        echo '
<div class="lement" style="top:'.$size.'px;">
                            <i class="bx bxs-info-circle"></i>
                            <div class="centaine">
                                <p>'.$name.'</p>
                                <small>Il vous reste '.$sr.'jours pour rendre le livre</small>
                                </div>
                            <span class="spani"></span>
                        </div>
';

    }
    elseif ($bj===2) {
        $sr=60-$aj;
        echo '
<div class="lement" style="top:'.$size.'px;">
                            <i class="bx bxs-info-circle"></i>
                            <div class="centaine">
                                <p>'.$name.'</p>
                                <small>Il vous reste '.$sr.' jours pour rendre le livre</small>
                                </div>
                            <span class="spani"></span>
                        </div>
';

    }else {
        echo '
<div class="lement" style="top:'.$size.'px;">
                            <i class="bx bxs-info-circle"></i>
                            <div class="centaine">
                                <p>'.$name.'</p>
                                <small>Il vous reste '.$aj.' jours pour rendre le livre</small>
                                </div>
                            <span class="spani"></span>
                        </div>
';

    }
}
$size+=70;
}
?>