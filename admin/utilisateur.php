<?php 
$connect = mysqli_connect("localhost","root","","projecttable");
if (!$connect) {
    echo mysqli_connect_error();
}

$select = mysqli_query($connect,"SELECT * FROM users");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    table{
        width: 100%;
        text-align: center;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
        border-radius: 5px 5px 0 0;
    }
    th{
        text-align: center;
    }
    button{
        background: #009879;
        color: #fff;
        border: none;
        padding: 5px;
        border-radius: 5px;
        cursor: pointer;
    }
    .styled-table thead tr {
        border-collapse: collapse;
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
    border-radius: 7px 7px 0px 0px;
}
.styled-table tbody tr {
    cursor: pointer;
    transition: all .3s ease-in-out;
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
tr:hover{
    transform: scale(1.05);
    
}
td img{
    height: 45px;
    width: 45px;
    border-radius: 50%;
}
</style>
<body>
    <h2>Utilisateurs</h2>
    <table class="styled-table">
        <thead>
            <tr>
                <th>N</th>
                <th>Profil</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Identifiant</th>
                <th>Email</th>
                <th>Date eng.</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           
            
            <?php 
            $ess= 1;

           
            
           while ($row=mysqli_fetch_assoc($select)) {
            $a = $row['user_id'];
            $essa = "'".''.$a.''."'";
            echo' <tr class="active-row">
                <td>'.$ess.'</td>
                <td><img src="../user_img/'.$row['img'].'" alt=""></td>
                <td>'.$row['lname'].'</td>
                <td>'.$row['fname'].'</td>
                <td>'.$row['user_id'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['login_date'].'</td>
                <td><form action="../php/del_user.php" method="post"><button type="submit" value="'.$row['user_id'].'" name="bookdom">Supprimer</button></form></td>
            </tr>';
           $ess =$ess+1;

           }
           
           ?>
        </tbody>
    </table>
    <!-- <form action="../php/del_user.php" method="post"><button type="submit" onclick="myfunction('.$ess.')"></button></form> -->
    
</body>
 <script>

    
// function myfunction(input) {
//   let bookdom = input;
//   let form = document.querySelector("form");
//   console.log(bookdom);
//   console.log(form);
//     let xhr = new XMLHttpRequest();
//     xhr.open("POST", '../php/del_user.php', true);
//     xhr.onload = ()=>{
//         if(xhr.readyState === XMLHttpRequest.DONE){
//             if(xhr.status === 200){
//             let data = xhr.responseText;
//             console.log(data);

//         }
//     }
//     // xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     // xhr.send("bookdom=" + bookdom);
//     let form1 = new FormData(form);
//     xhr.send(form1);
//     }
// }
</script>
</html>