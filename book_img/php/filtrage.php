<?php
session_start();
require 'config.php';
$search = mysqli_real_escape_string($connect,$_POST['search']);
$sql="SELECT * FROM book ORDER BY title ASC";
if (isset($search)) {
  $sql = "SELECT * FROM book WHERE 1 AND category LIKE '%$search%'";
}
$sqli = mysqli_query($connect,$sql);
if (mysqli_num_rows($sqli) > 0) {
    # code...
    while ($row = mysqli_fetch_assoc($sqli)) { 
        $a = $row['book_id'];
        $ess = "'".''.$a.''."'";
        $asp = $row['disp'];
         $asp=intval($asp);
    if ($asp===1) {
        echo '<div class="col-lg-4 col-md-6 align-self-center mb-30 mr-20px book-items col-md-6 adv" data-aos="fade-up" data-aos-duration="1300"><a href="detail.php?id_book='.$row['book_id'].'"><img src="../book_img/'.$row['img'].'" alt=""></a><div class="status-doc"><h6 style="color: green;background:#fff;">'.$row['status'].'</h6><h4><strong style="color: #000;">D.R</strong> '.$row['price'].' jrs</h4></div><h2>'.$row['title'].'</h2><p>'.$row['description'].'</p><button class="btn btn-danger" onclick="myfunction('.$ess.')">'.$row['statu'].'</button></div>'; 

    }elseif ($asp===2) {
        echo '<div class="col-lg-4 col-md-6 align-self-center mb-30 mr-20px book-items col-md-6 adv" data-aos="fade-up" data-aos-duration="1300"><a href="detail.php?id_book='.$row['book_id'].'"><img src="../book_img/'.$row['img'].'" alt=""></a><div class="status-doc"><h6 style="color: red;background:#fff;">'.$row['status'].'</h6><h4><strong style="color: #000;">D.R</strong> '.$row['price'].' jrs</h4></div><h2>'.$row['title'].'</h2><p>'.$row['description'].'</p><button class="btn btn-danger" onclick="myfunction('.$ess.')">'.$row['statu'].'</button></div>'; 

    }else {
        echo '<div class="col-lg-4 col-md-6 align-self-center mb-30 mr-20px book-items col-md-6 adv" data-aos="fade-up" data-aos-duration="1300"><a href="detail.php?id_book='.$row['book_id'].'"><img src="../book_img/'.$row['img'].'" alt=""></a><div class="status-doc"><h6 style="color: blue;background:#fff;">'.$row['status'].'</h6><h4><strong style="color: #000;">D.R</strong> '.$row['price'].' jrs</h4></div><h2>'.$row['title'].'</h2><p>'.$row['description'].'</p><button class="btn btn-danger" onclick="myfunction('.$ess.')">'.$row['statu'].'</button></div>'; 

    }
    }
}else {
    echo '<div style="height: 300px;"><h2 data-aos="fade-up" data-aos-duration="1000" style="text-align: center;padding-top: 20px;">Pas de résultat</h2></div>';
}


?>