<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#b91d47">
    <meta name="theme-color" content="#ffffff">

    <title><?= $title ?></title>

    <link href="https://fonts.googleapis.com/css?family=Arimo|Passion+One" rel="stylesheet">

    <!--build:css styles/styles.min.css-->
    <link rel="stylesheet" href="styles/css/reset.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   
    <link rel="stylesheet" href="styles/css/main.css" />
    <!--endbuild-->
  </head>
  <body>
      <nav class="navbar">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="<?= isset($_SESSION['user']) ? "index.php?action=leagues": "index.php" ?>">HERO BATTLEFIELD TOURNAMENT</a>
          </div>
          <div class="nav navbar-right">
            <a class="mr-4" href="index.php?action=rules">Rules</a>
            <a class="mr-4 deconnection <?= isset($_SESSION['user']) ? "deconnection--active": false ?>" href="index.php?action=leagues">Leagues</a>
            <a class="mr-4 login <?= isset($_SESSION['user']) ? "connection--active": false ?>" href="index.php?action=signin">Login <img src="assets/images/user.svg"></img></a>
            <a class="mr-4 deconnection <?= isset($_SESSION['user']) ? "deconnection--active": false ?>" href="index.php?action=deconnection">Disconnection <img src="assets/images/user.svg"></img> </a>
          </div>
        </div>
      </nav>
        <div class="contenu">
          <?= $contenu ?>
        </div>
      <footer class="footer">
        <p class="footerText">© HETIC P2021 - Group 15</p>
      </footer>
  </body>
</html>