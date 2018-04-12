<?php $this->title = "Your leagues" ?>

<p class="hello"><?= isset($_SESSION['user']) ? 'Welcome back ' . $_SESSION['user'] : '' ?></p>

<div class="container leagueContainer pb-4">
  <div class="row">
    <div class="col-lg-12 border-dark pt-2 pb-2 banner">
      <h4>Your leagues</h4>
    </div>
  </div>
  <div class="container justify-content-center">
    <div class="row">
    </div>
    <div class="row leagues">
      <?php for($i = 0; $i < count($leagues); $i++): ?>
      <div class="col-lg-4 userLeague">
        <h4 class="leagueName"><?= $league_names[$i][0]->league_name ?></h4>
        <a href="index.php?action=dashboard&league_id=<?= $leagues[$i]->league_id ?>" class="play redButton">
          Play
        </a>
      </div>
      <?php endfor; ?>
    </div>
    <div class="row mt-4">
      <a class="redButton col-lg-2 offset-lg-3" href="index.php?action=leagues&option=create">Create a league</a>
      <a class="redButton col-lg-2 offset-lg-2" href="index.php?action=leagues&option=join">Join a league</a>
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