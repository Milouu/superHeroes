<?php
  $this->title = "Dashboard";
?>

<h1><?= $league_name[0]->league_name ?></h1>

<a href="index.php?action=recruit&league_id=<?= $_GET['league_id'] ?>">Recrutement</a>

<div>
  <?php for($i = 0; $i < count($league_users); $i++): ?>
  <span><?= array_values($user_names)[$i][0]->user_name ?></span>
  <span><?= array_values($league_users)[$i]->user_id ?></span>
  <br>
  <?php endfor; ?>
</div>

<div class="container">
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