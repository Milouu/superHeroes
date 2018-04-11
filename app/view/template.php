<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/hetic_icones/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/hetic_icones/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/hetic_icones/favicon-16x16.png">
    <link rel="manifest" href="assets/images/hetic_icones/manifest.json">
    <link rel="mask-icon" href="assets/images/hetic_icones/safari-pinned-tab.svg" color="#20e905">
    <meta name="theme-color" content="#ffffff">

    <title><?= $title ?></title>

    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">

    <!--build:css styles/styles.min.css-->
    <link rel="stylesheet" href="styles/css/reset.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   
    <link rel="stylesheet" href="styles/css/main.css" />
    <!--endbuild-->
  </head>
  <body>
      <nav class="navbar navbar-inverse justify-content-center">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Hero Battlefield Tournament</a>
          </div>
          <ul class="nav navbar-inverse navbar-right">
            <li><a href="#"><span class="mr-4"></span>Rules</a></li>
            <li><a href="#"><span class="mr-4"></span>Dashboard</a></li>
            <li><a href="index.php?action=signin"><img src="assets/images/user.svg"></img> Login</a></li>
          </ul>
        </div>
      </nav>
        <div class="contenu">
          <?= $contenu ?>
        </div>
  </body>
</html>