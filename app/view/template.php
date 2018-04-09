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
    <link rel="stylesheet" href="styles/css/main.css" />
    <!--endbuild-->
  </head>
  <body>
    <header>
      <h1>Amazing Super Heroes App</h1>
    </header>
    <div class="contenu">
      <?= $contenu ?>
    </div>
  </body>
</html>