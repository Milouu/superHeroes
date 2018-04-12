<?php $this->title = "Your leagues" ?>

<p><?= isset($_SESSION['user']) ? 'Hello ' . $_SESSION['user'] : '' ?></p>

<div class="container leagueContainer pb-4">
  <div class="row">
    <div class="col-lg-12 border-bottom border-dark pt-2 pb-2">YOUR LEAGUES</div>
  </div>
  <div class="container justify-content-center">
    <div class="row">
    </div>
    <div class="row leagues">
      <div class="col-lg-4">
        <h4>BatLeague</h4>
        <img src="assets/images/bat.svg" alt="logo batman" class="col-lg-3"/>
        <p>SuperBoubou<br/>SuperLulu<br/>SuperThing<br/></p>
      </div>
      <div class="col-lg-4">
        <h4>HeroesLeague</h4>
        <img src="assets/images/captain.svg" alt="logo captain america" class="col-lg-3"/>
        <p>SuperBoubou<br/>SuperLulu<br/>SuperThing<br/></p>
      </div>
      <div class="col-lg-4">
        <h4>SuperLeague</h4>
        <img src="assets/images/superman.svg" alt="logo superman" class="col-lg-3"/>
        <p>SuperBoubou<br/>SuperLulu<br/>SuperThing<br/></p>
      </div>
    </div>
    <div class="row mt-4">
      <button class="leaguesButton col-lg-2 offset-lg-3"><a href="index.php?action=leagues&option=create">Create a league</a></button>
      <button class="leaguesButton col-lg-2 offset-lg-2"><a href="index.php?action=leagues&option=join">Join a league</a></button>
    </div>
  </div>
</div>



<!-- Dynamic page elements popins -->

<div class="backgroundPopin popin <?= ($_GET['option'] == 'create') ? "popin--black" : false ?>">
  <div class="container popin <?= ($_GET['option'] == 'create') ? "popin--active" : false ?>">

      <form class="formWhite" action="index.php?action=leagues&option=tryCreation" method="POST">

      <div class="flexPopin">
        <h2 class="formTitle col-lg-12">NEW LEAGUE</h2>
        <a class="closePopin" href="index.php?action=leagues">X</a>
      </div>
      
  
      <div class="inputContainer">
        <input placeholder="Enter league name" type="text" name="name" id="name" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>" class=" <?= isset($errorMessages['name']) ? "error--active" : false ?>">
        <div class="errorMessages col-lg-6 <?= !empty($errorMessages['name']) ? 'errorMessages--active' : '' ?>"><?= $errorMessages['name'] ?></div>
      </div>
  
      <br>
  
      <div class="successMessages <?= !empty($successMessage) ? "successMessages--active" : false ?>"><?= $successMessage ?></div>
  
      <input type="submit" value="Create" class="formButton">
  
      </form>
  </div>
</div>

<div class="popin <?= ($_GET['option'] == 'join') ? "popin--black" : false ?>">
  <div class="container popin <?= ($_GET['option'] == 'join') ? "popin--active" : false ?>">
      <form action="index.php?action=leagues&option=tryJoin" class="formWhite" method="POST">

      <div class="flexPopin">
        <h2 class="formTitle col-lg-12">JOIN A LEAGUE</h2>
        <a class="closePopin" href="index.php?action=leagues">X</a>
      </div>
      
      <div class="inputContainer">
        <input placeholder="Enter league code" type="text" name="code" id="code" value="<?= isset($_POST['code']) ? $_POST['code'] : '' ?>" class=" <?= isset($errorMessages['code']) ? "error--active" : false ?>">
        <div class="errorMessages col-lg-6 <?= !empty($errorMessages['code']) ? 'errorMessages--active' : '' ?>"><?= $errorMessages['code'] ?></div>
      </div>
  
      <br>
  
      <div class="successMessages <?= !empty($successMessage) ? "successMessages--active" : false ?>"><?= $successMessage ?></div>
  
      <input type="submit" value="Join" class="formButton">
  
      </form>
  </div>
</div>

<div>
  <?php for($i = 0; $i < count($leagues); $i++): ?>
  <a href="index.php?action=dashboard&league_id=<?= array_values($leagues)[$i]->league_id ?>"> 
    <?= array_values($league_names)[$i][0]->league_name ?>
  </a>
  <?php endfor; ?>
</div>

<div>
    <img class="leagueHeroB" src="./assets/images/league.spng">
</div>



