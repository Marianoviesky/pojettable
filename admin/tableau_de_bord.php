<?php 
$connect = mysqli_connect("localhost","root","","projecttable");
if (!$connect) {
    echo mysqli_connect_error();
}

$select = mysqli_query($connect,"SELECT COUNT(*) As total FROM users");
$select1 = mysqli_query($connect,"SELECT COUNT(*) As total FROM book");
$select2 = mysqli_query($connect,"SELECT DISTINCT COUNT(category) As total FROM book");
$select3 = mysqli_query($connect,"SELECT DISTINCT COUNT(*) As total FROM espace_client");

$row=mysqli_fetch_assoc($select);
$row1=mysqli_fetch_assoc($select1);
$row2=mysqli_fetch_assoc($select2);
$row3=mysqli_fetch_assoc($select3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
    <div class="element">
        <a class="box" href="utilisateur.php"><i class='bx bxs-group'></i><h2>Total Utilisateurs</h2> <span class='bx bx-bar-chart'><?php echo $row['total']; ?></span></a>
        <a class="box" href="livre.php"><i class='bx bxs-book-alt'></i><h2>Total Livres</h2> <span class='bx bx-bar-chart'><?php echo $row1['total']; ?></span></a>
        <a class="box" href="category.php"><i class='bx bxs-category'></i><h2>Total Catégories</h2> <span class='bx bx-bar-chart'><?php echo $row2['total']; ?></span></a>
        <a class="box" href="emprunt.php"><i class='bx bxs-objects-horizontal-left'></i><h2>Total Emprunts</h2> <span class='bx bx-bar-chart'><?php echo $row3['total']; ?></span></a>

    </div>
</body>
</html>