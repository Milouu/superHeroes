<?php

$this->title = "Recruit Superheroes";

?>

<div class="container">
  <div class="row">
    <div class="col-lg-12 tableTitle">Recruit superheroes</div>
  </div>
  <div class="row">
    <button>Budget remaining 5000 RP</button>
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
      <p class="name"><?=$hero->name ?></p>
      <div class="data">
        <p><?=$hero->powerstats->intelligence ?></p>
        <p><?=$hero->powerstats->strength ?></p>
        <p><?=$hero->powerstats->speed ?></p>
        <p><?=$hero->powerstats->durability ?></p>
        <p><?=$hero->powerstats->power ?></p>
        <p><?=$hero->powerstats->combat ?></p>
        <p>1000 credits</p>
      </div>
    </div>
    <?php endforeach; ?>
    </div>
</div>