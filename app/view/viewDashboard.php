<?php
  $this->title = "Dashboard";
?>


<p class="hello"><?= $league_name->league_name ?></p>

<a href="index.php?action=recruit&league_id=<?= $_GET['league_id'] ?>" style="display:<?= $current_league_day->current_league_day ? 'none' : 'inline-block' ?>">
  Recrutement
</a>

<a href="index.php?action=dashboard&option=tryLaunchLeague&league_id=<?= $_GET['league_id'] ?>" style="display:<?= $current_league_day->current_league_day ? 'none' : 'inline-block' ?>">
  Launch League
</a>

<p style="color:red;"><?= isset($errorMessages['tryLaunchLeague']) ? $errorMessages['tryLaunchLeague'] : '' ?></p>
<p style="color:green;"><?= isset($successMessages['leagueCreation']) ? $successMessages['leagueCreation'] : '' ?></p>

<div class="container bigContainer">
<div class="row">
  <div class="title col-lg-12">DASHBOARD</div>
</div>
<div class="row">
  <div class="heroesTitle titles col-lg-12">
    <h4>Your superheroes team</h4>
  </div>
</div>


<div class="row mt-5">
<?php foreach ($user_heroes as $user_hero): ?>
  <div class="cards col-4 offset-lg-1 mt-4">
    <div class="cardName"><?=$user_hero->hero_name ?></div>
    <div class="statsGreatContainer">
      <div><img class="dashboardImages" src="<?= str_replace('http://', 'https://',$user_hero->image) ?>" alt="#"></div>
      <div class="statsContainer">
        <div class="stats">
          Intelligence
          <div><?=$user_hero->intelligence ?></div>
        </div>
        <div class="stats">
          Strength
          <div><?=$user_hero->strength ?></div>
        </div>
        <div class="stats">
          Speed
          <div><?=$user_hero->speed ?></div>
        </div>
        <div class="stats">
          Durability
          <div><?=$user_hero->durability ?></div>
        </div>
        <div class="stats">
          Power
          <div><?=$user_hero->power ?></div>
        </div>
        <div class="stats">
          Combat
          <div><?=$user_hero->combat ?></div>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>

<div class="row">
  <div class="col-lg-12 mt-5 mb-3 yourChampionship">Your Championship</div>
</div>
<div class="row">
  <div class="col-lg-3 offset-lg-1">Next Match :</div>
</div>
<div class="row mb-5">
  <div class="col-lg-9 offset-lg-1 mt-3">Order your superheroes in team. They will face the opponent hero who is placed at the same place</div>
</div>


<h2 class="ml-5">Your team</h2>

<div class="row ml-5">
  <?php 
  $i=0;
  foreach($user_heroes as $user_hero): ?>
  <div class="col-lg-6">
  <form action="index.php?action=dashboard&option=trySetOrder&league_id=<?= $_SESSION['league_id'] ?>" method="POST" class="recruitList">
        <img class="myTeamImages" src="<?= str_replace('http://', 'https://',$user_hero->image) ?>" alt="#">
        <p class="name"><?=$user_hero->hero_name ?></p>
      <div class="d-inline-flex flex-row">
          <p class="p-2"><input type="radio" name="order1" value="<?= ++$i ?>">N°1</p>
          <p class="p-2"><input type="radio" name="order2" value="<?= $i ?>">N°2</p>
          <p class="p-2"><input type="radio" name="order3" value="<?= $i ?>">N°3</p>
          <p class="p-2"><input type="radio" name="order4" value="<?= $i ?>">N°4</p>
          <p class="p-2"><input type="radio" name="order5" value="<?= $i ?>">N°5</p>
      <input type="submit" value="Set order" class="formButton">
    </div>
  </form>
  </div>
  <?php endforeach; ?>
</div>

<div class="row justify-content-center">
  <div class="col-lg-12">VS</div>
  <img src="./assets/images/user.svg" alt="">
</div>

<div class="row">
<div class="col-lg-7"></div>
<?php foreach($opponent_heroes as $opponent_hero): ?>
  <div class="col-lg-1"><img class="opponentTeamImages" src="<?= str_replace('http://', 'https://',$opponent_hero->image) ?>" alt=""></div>
<?php endforeach; ?>






<!-- Pas encore utilisé -->
  <div class="Your opponent team"> 
    <h4>Your matches</h4>
  </div>


    <?php foreach($opponent_heroes as $opponent_hero): ?>
    <div class="heroLine">
      <p class="name"><?=$opponent_hero->hero_name ?></p>
      <div class="data">
        <p><?=$opponent_hero->intelligence ?></p>
        <p><?=$opponent_hero->strength ?></p>
        <p><?=$opponent_hero->speed ?></p>
      x  <p><?=$opponent_hero->durability ?></p>
        <p><?=$opponent_hero->power ?></p>
        <p><?=$opponent_hero->combat ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

