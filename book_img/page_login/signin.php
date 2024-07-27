<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="../php/bookdom.jpg" type="image/x-icon">
</head>
<style>
    body{
        flex-direction: column;
        gap: 10px;
    }
    h1{
        text-align: center;
        color: #fff;
        font-weight: bold;
        font-size: 45px;
    }
    i{
        font-size: 100px;
        color: #1e1e1e;
    }
</style>
<body>
    <h1>BOOKDOM</h1>
    <div class="container">
        <i class="bx bxs-user-circle"></i>
        <h2>Se connecter</h2>
        <div class="errorText">logan</div>
        <form action="" method="post">
            <input type="email" placeholder="Votre email" name="email">
            <input type="password" placeholder="Mot de passe" name="pswd">
            <button type="submit">Connexion</button>
            <p>Vous n'avez pas de compte ? <a href="signup.php">Créer-un</a></p>
        </form>
    </div>

    <script src="js/login.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>