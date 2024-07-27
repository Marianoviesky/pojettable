<?php 
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Catalogue</title>
    <link rel="shortcut icon" href="../php/bookdom.jpg" type="image/x-icon">


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/cata.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/main.css">
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
  </head>
  <style>
    .header-sticky{
      position: sticky;
      top: 3px;
    }
    .show1{
    color: #D2691E;
    background: #ccc;
  }
    
  </style>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <h1>Bookdom</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.php">Accueil</a></li>
                      <li><a href="catalogue.php" class="active">Parcourir</a></li>
                      <li><a href="contact.php">Nous contacter</a></li>
                      <li class="seconn"><a href="../page_login/signin.php">Se connecter</a></li>
                      <li><a href="../page_login/signin.php"><i class="fa fa-user"></i> Se connecter</a></li>
                  </ul>    
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

 


<form action="" method="post" class="form1">
<div class="search">
  <input type="text" class="search_btn col-6" name="search" placeholder="Rechercher par nom ou auteur"><i class="fa fa-search"></i>
</div>

</form>
<div class="errorText">
</div>


 
  <div class="filtrage">
        <button class="filtrer show1" onclick="All('Tous')">Tous</button>
        <button class="filtrer Ro" onclick="filtrer('Roman')">Roman</button>
        <button class="filtrer Th" onclick="filtrer('Thriller')">Thriller</button>
        <button class="filtrer Po" onclick="filtrer('Policier')">Policier</button>
        <button class="filtrer Hi" onclick="filtrer('Histoire')">Histoire</button>
        <button class="filtrer SF" onclick="filtrer('SF')">SF</button>
        <button class="filtrer Fa" onclick="filtrer('Fantasy')">Fantasy</button>
    </div>


  <!-- DISPOSITION DES LIVRES -->

<div class="container bookdom">


</div>

  <!-- FIN DE LA DISPOSITION -->

  <footer>
    <div class="contain">
      <div class="col-lg-12">
        <p>Copyright © 2024 BookDom Co., Ltd. Tous droits réservés. 
        
        Design: <a href="">Mariano & Shérif</a></p>
      </div>
    </div>
    
  </footer>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/initial.js"></script>
  <script src="assets/js/cata.js"></script>
  <script src="assets/js/script.js"></script>

  </body>
  <script>

    
  </script>
</html>