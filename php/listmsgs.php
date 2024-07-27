<?php 
session_start();
require 'config.php';
$sql="SELECT * FROM user_live ";

$sqli = mysqli_query($connect,$sql);
if (mysqli_num_rows($sqli) > 0) {
        while ($row = mysqli_fetch_assoc($sqli)) { 
            $a = $row['user_id'];
            $rs="SELECT * FROM users WHERE user_id='$a'";
            $rsa = mysqli_query($connect,$rs);
            $row=mysqli_fetch_assoc($rsa);
            $pr="SELECT * FROM message WHERE user_id='$a' ORDER BY id DESC LIMIT 1";
            $pra = mysqli_query($connect,$pr);
            $row1=mysqli_fetch_assoc($pra);
            $b = $row1['nbr'];
            $b=intval($b);
            if ($b===1) {
            $ess = "'".''.$a.''."'";
            echo '
            <li class="asti">
                               <div style="display:flex; flex-direction: column; height: 63px;"><img src="../user_img/'.$row['img'].'" alt="" style="height: 45px;width: 45px;border-radius: 50%;" onclick="astio('.$ess.')"><p style="color: #009879cc;">'.$row['lname'].'</p> </div>
                                <p style="color: #1e1e1e;margin-left:10px;">'.$row1['msg'].'</p>
                            </li>
            ';
            }else {
            $ess = "'".''.$a.''."'";
            echo '
            <li class="asti">
                                <div style="display:flex; flex-direction: column; height: 63px;"><img src="../user_img/'.$row['img'].'" alt="" style="height: 45px;width: 45px;border-radius: 50%;" onclick="astio('.$ess.')"><p style="color: #009879cc;">'.$row['lname'].'</p> </div>
                                <p style="margin-left:10px;"><strong style="color: #1e1e1e;">Vous</strong> : '.$row1['msg'].''.$row1['nbr'].'</p>
                            </li>
            ';
            }
            }
}
?>