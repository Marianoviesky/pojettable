<?php 
$in = $_GET['id_book'];
require '../php/config.php';

$sqli = mysqli_query($connect,"SELECT * FROM book WHERE book_id='$in'");
$row = mysqli_fetch_assoc($sqli);


?>




<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title><?php echo $row['title'];?></title>
    <link rel="shortcut icon" href="../php/bookdom.jpg" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/comment.css">
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
  </head>
  <style>
     .header-sticky{
      position: sticky;
      top: 3px;
      transition: all .3s ease-in-out;
      box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    }
         
.maintener {
  max-width: 85%;
  margin: auto;
  height: 80vh;
  margin-top: 5%;
  background: white;
  box-shadow: 5px 5px 10px 3px rgba(0, 0, 0, 0.3);
}

.right {
  
  display: flex;
      flex-direction: column;
      align-items: flex-start;
  width: 50%;
  padding: 30px;
}

.flex {
  display: flex;
  justify-content: space-between;
}

.flex1 {
  display: flex;
}

.main_image {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  gap: 15px;
  width: 100%;
  height: 100%;
}
.main_image img{
  width: 100%;
  height: 95%;
}

.option img {
  width: 75px;
  height: 75px;
  padding: 10px;
}

.right {
  padding: 25px;
}

.right h3 {
  color: #1e1e1e;
  font-size: 25px;
}

.right :is(h5,p,small) {
  font-size: 18px;
  color: #837D7C;
}

.right h4 {
  color: red;
}

.right p {
  font-size: 15px;
  padding-right: 20px;
  line-height: 25px;
}

.right h5 {
  font-size: 15px;
}


.btn-danger {
  width: 100%;
  padding: 10px;
  border: none;
  outline: none;
  color: #fff;
  margin-top: 20px;
  border-radius: 30px;
}

  @media only screen and (max-width:768px) {
    .maintener {
      display: flex;
      flex-direction: column;
      max-width: 90%;
      margin: auto;
      height: auto;
      align-items: center;
      justify-content: center;
    }

    .right {
      height: 100%;
      width: 90%;
    }

    .maintener {
      flex-direction: column;
    }
  }

@media only screen and (max-width:768px) {
  .maintener {
    max-width: 90%;
    height: auto;
    padding: 10px;

  }

  .left, .right {
    padding: 0;
  }

  .maintener img{
    width: 100%;
    height: 100%;
  }

  .option {
    display: flex;
    flex-wrap: wrap;
  }
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
                      <li><a href="catalogue.php">Parcourir</a></li>
                      <li><a href="detail.php?id_book=<?php echo $row['book_id'];?>" class="active">Details</a></li>
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





    <!-- ARTICLE  -->
  <section>
    <div class="maintener flex">
      <div class="left">
        <div class="main_image">
          <img src="../book_img/<?php echo $row['img'];?>" class="slide">
        </div>
        
      </div>
      <div class="right">
        <h3><?php echo $row['title'];?></h3>
        <i style="color:#1e1e1e;font-size:22px;">Auteur: <small style="font-size:22px;"><?php echo $row['autor'];?></small></i><br>
        <i class="fa fa-layer-group" style="color: red;font-size: 20px;"><small style="color: #F04D44;font-size:22px;"><?php echo $row['category'];?></small></i>
        <p><?php echo $row['description'];?></p>
        <small style="font-size:22px;color:green;"><?php echo $row['status'];?></small><br>
        

        <h4><small>Delai de retour </small><?php echo $row['price'];?> jrs</h4>
        

        <button class="btn btn-danger"><?php echo $row['statu']; ?></button>
      </div>
    </div>
  </section>
  <!-- FIN ARTICLE  -->



    <div class="container elli">
        <div class="comment_space">
            <div class="comment" data-aos="fade-up" data-aos-duration="1300">
                
               
                
                
                
            </div>
        </div>
        <div class="add_comment">
            <form action="" method="post" class="former">
                <div class="logan"></div>
                <input type="text" value="<?php echo $row['book_id'];?>" style="display: none;" name="id_book" class="eper">
                <input type="text" placeholder="Prénom" required name="nom">
                <input type="text" placeholder="Email (facultatif)">
                <textarea name="msg" placeholder="Votre commentaire..."></textarea>
                <button class="maaa">Envoyer</button>
            </form>
        </div>
    </div>

   
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
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/comment.js"></script>

  </body>
  <script>
    
    AOS.init();


    document.querySelector('.btn-danger').onclick=()=>{
      location.href='../page_login/signin.php';
    }

function robot(){
  let bookdom=document.querySelector('.eper').value;
  let xhr = new XMLHttpRequest();
      xhr.open("POST", '../php/robot_message.php', true);
      xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
          let data = xhr.response;
      }
      }
      }

      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.send("bookdom=" + bookdom);
}
    function essayconvert() {
              
      let bookdom=document.querySelector('.eper').value;
      let xhr = new XMLHttpRequest();
      xhr.open("POST", '../php/display_message.php', true);
      xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
          let data = xhr.response;
          messagecomponent.innerHTML=data;
      }
      }
      }

      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.send("bookdom=" + bookdom);
    }
          
      essayconvert();
  </script>
</html>