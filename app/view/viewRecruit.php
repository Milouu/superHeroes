<?php

$this->title = "Recruit Superheroes";

?>

<div class="container">
  <div class="row">
    <div class="col-lg-12 recruitHeader mt-5">Recruit superheroes</div>
  </div>
  <div class="row">
    <button class="col-lg-4 offset-lg-4 mt-3 mb-5 budgetRemaining">Budget remaining 5000 RP</button>
  </div>
  <div class="row">
    <input type="search" value="search">
    <input type="search" value="search">
    <input type="radio" value="value">
    <input type="checkbox" value="1">
  </div>
</div>

<div class="container">
  
  <h2>Recruit superheroes</h2>

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
        <p>Base price</p>
      </div>
    </div>
    <?php foreach ($heroes as $hero): ?>
    <div class="heroLine">
      <p class="name"><?=$hero->hero_name ?></p>
      <div class="data">
        <p><?=$hero->intelligence ?></p>
        <p><?=$hero->strength ?></p>
        <p><?=$hero->speed ?></p>
        <p><?=$hero->durability ?></p>
        <p><?=$hero->power ?></p>
        <p><?=$hero->combat ?></p>
        <p class="price"><?= $hero->average ?> RP</p>
        <input type="checkbox" name="selection" value="<?= $hero->hero_id ?>">
      </div>
    </div>
    <?php endforeach; ?>
    </div>
</div>