<?php
  $this->title = "Dashboard";
?>

<h1><?= $league_name->league_name ?></h1>

<a href="index.php?action=recruit&league_id=<?= $_GET['league_id'] ?>" style="display:<?= $current_league_day->current_league_day ? 'none' : 'inline-block' ?>">
  Recrutement
</a>

<a href="index.php?action=dashboard&option=tryLaunchLeague&league_id=<?= $_GET['league_id'] ?>" style="display:<?= $current_league_day->current_league_day ? 'none' : 'inline-block' ?>">
  Launch League
</a>

<p style="color:red;"><?= isset($errorMessages['tryLaunchLeague']) ? $errorMessages['tryLaunchLeague'] : '' ?></p>
<p style="color:green;"><?= isset($successMessages['leagueCreation']) ? $successMessages['leagueCreation'] : '' ?></p>

<div class="container">

  <h2>League members</h2>

  <div class="recruitList">
    <div class="labels">
      <p>Name</p>
      <div class="data">
        <p>ID</p>
      </div>
    </div>
    <?php for($i = 0; $i < count($league_users); $i++): ?>
    <div class="heroLine">
      <p class="name"><?= array_values($user_names)[$i][0]->user_name ?></p>
      <div class="data">
        <p><?= array_values($league_users)[$i]->user_id ?></p>
      </div>
    </div>
    <?php endfor; ?>
  </div>
</div>

<br>

<div class="container">

  <h2>Your heroes</h2>

  <div class="recruitList">
    <div class="labels">
      <p>Name</p>
      <div class="data">
        <p>Intelligence</p>
        <p>Strength</p>
        <p>Speed</p>
        <p>Durability</p>
        <p>Power</p>
        <p>Combat</p>
      </div>
    </div>
    <?php foreach ($user_heroes as $user_hero): ?>
    <div class="heroLine">
      <p class="name"><?=$user_hero->hero_name ?></p>
      <div class="data">
        <p><?=$user_hero->intelligence ?></p>
        <p><?=$user_hero->strength ?></p>
        <p><?=$user_hero->speed ?></p>
        <p><?=$user_hero->durability ?></p>
        <p><?=$user_hero->power ?></p>
        <p><?=$user_hero->combat ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

<br>

<div class="container">

  <h1>Next Match</h1>

  <br>

  <h2>Opponent Heroes</h2>

  <div class="recruitList">
    <div class="labels">
      <p>Name</p>
      <div class="data">
        <p>Intelligence</p>
        <p>Strength</p>
        <p>Speed</p>
        <p>Durability</p>
        <p>Power</p>
        <p>Combat</p>
      </div>
    </div>
    <?php foreach($opponent_heroes as $opponent_hero): ?>
    <div class="heroLine">
      <p class="name"><?=$opponent_hero->hero_name ?></p>
      <div class="data">
        <p><?=$opponent_hero->intelligence ?></p>
        <p><?=$opponent_hero->strength ?></p>
        <p><?=$opponent_hero->speed ?></p>
        <p><?=$opponent_hero->durability ?></p>
        <p><?=$opponent_hero->power ?></p>
        <p><?=$opponent_hero->combat ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <br>

  <h2>Select your order</h2>

  <div class="recruitList">
    <div class="labels">
      <p>Name</p>
      <div class="data">
        <p>Intelligence</p>
        <p>Strength</p>
        <p>Speed</p>
        <p>Durability</p>
        <p>Power</p>
        <p>Combat</p>
        <p>1st Hero</p>
        <p>2nd Hero</p>
        <p>3rd Hero</p>
        <p>4th Hero</p>
        <p>5th Hero</p>
      </div>
    </div>
    <form action="index.php?action=dashboard&option=trySetOrder&league_id=<?= $_SESSION['league_id'] ?>" method="POST" class="recruitList">
    <?php 
    $i=0; 
    foreach ($user_heroes as $user_hero): 
    ?>
    <div class="heroLine">
      <p class="name"><?=$user_hero->hero_name ?></p>
      <div class="data">
        <p><?=$user_hero->intelligence ?></p>
        <p><?=$user_hero->strength ?></p>
        <p><?=$user_hero->speed ?></p>
        <p><?=$user_hero->durability ?></p>
        <p><?=$user_hero->power ?></p>
        <p><?=$user_hero->combat ?></p>
        <p><input type="radio" name="order1" value="<?= ++$i ?>">N°1</p>
        <p><input type="radio" name="order2" value="<?= $i ?>">N°2</p>
        <p><input type="radio" name="order3" value="<?= $i ?>">N°3</p>
        <p><input type="radio" name="order4" value="<?= $i ?>">N°4</p>
        <p><input type="radio" name="order5" value="<?= $i ?>">N°5</p>
      </div>
    </div>
    <?php endforeach; ?>
    <input type="submit" value="Set order" class="formButton">
    </form>
  </div>

</div>

