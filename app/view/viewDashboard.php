<?php
  $this->title = "Dashboard";
?>

<h1><?= $league_name[0]->league_name ?></h1>

<a href="index.php?action=recruit&league_id=<?= $_GET['league_id'] ?>">Recrutement</a>
<a href="index.php?action=dashboard&option=tryLaunchLeague&league_id=<?= $_GET['league_id'] ?>">Launch League</a>
<p style="color:red;"><?= isset($errorMessages['tryLaunchLeague']) ? $errorMessages['tryLaunchLeague'] : '' ?></p>

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

<div class="container">

  <h2>Next Match</h2>

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