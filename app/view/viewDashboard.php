<?php
  $this->title = "Dashboard";
?>

<div class="row mb-5">
    <div>
        <img class="dashboardBackgroundImages1" src="./assets/images/cpt-america.svg">
    </div>
       
    <div class="col-3 offset-8">
        <img class="dashboardBackgroundImages2" src="./assets/images/ironman.svg">
    </div>
</div>

<a href="index.php?action=recruit&league_id=<?= $_GET['league_id'] ?>" style="display:<?= $current_league_day->current_league_day ? 'none' : 'inline-block' ?>">
  Recrutement
</a>

<a href="index.php?action=dashboard&option=tryLaunchLeague&league_id=<?= $_GET['league_id'] ?>" style="display:<?= $current_league_day->current_league_day ? 'none' : 'inline-block' ?>">
  Launch League
</a>

<p style="color:red;"><?= isset($errorMessages['tryLaunchLeague']) ? $errorMessages['tryLaunchLeague'] : '' ?></p>
<p style="color:green;"><?= isset($successMessages['leagueCreation']) ? $successMessages['leagueCreation'] : '' ?></p>

<div class="container bigContainer mt-5">
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
    <div class="cardName pt-1"><?=$user_hero->hero_name ?></div>
    <div class="statsGreatContainer">
      <div><img class="dashboardImages" src="<?= str_replace('http://', 'https://',$user_hero->image) ?>" alt="#"></div>
      <div class="statsContainer">
        <div class="stats">
          Intelligence
          <div class="statsNumber"><?=$user_hero->intelligence ?></div>
        </div>
        <div class="stats">
          Strength
          <div class="statsNumber"><?=$user_hero->strength ?></div>
        </div>
        <div class="stats">
          Speed
          <div class="statsNumber"><?=$user_hero->speed ?></div>
        </div>
        <div class="stats">
          Durability
          <div class="statsNumber"><?=$user_hero->durability ?></div>
        </div>
        <div class="stats">
          Power
          <div class="statsNumber"><?=$user_hero->power ?></div>
        </div>
        <div class="stats">
          Combat
          <div class="statsNumber"><?=$user_hero->combat ?></div>
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
  <div class="col-lg-3 offset-lg-1 nextMatch mt-5">Next Match :</div>
</div>
<div class="row mb-5">
  <div class="col-lg-9 offset-lg-1 mt-3 orderTeam">Order your superheroes in team. They will face the opponent hero who is placed at the same place</div>
</div>


<h2 class="ml-5 mb-5">Set your team order</h2>

<div class="row ml-5">
  <?php 
  $i=0;
  foreach($user_heroes as $user_hero): ?>
  <div class="col-lg-6 mb-5">
  <form action="index.php?action=dashboard&option=trySetOrder&league_id=<?= $_SESSION['league_id'] ?>" method="POST" class="recruitList">
        <img class="myTeamImages" src="<?= str_replace('http://', 'https://',$user_hero->image) ?>" alt="#">
        <p class="name heroNames"><?=$user_hero->hero_name ?></p>
      <div class="d-inline-flex flex-row">
          <p class="p-2"><input type="radio" name="order1" value="<?= ++$i ?>">N°1</p>
          <p class="p-2"><input type="radio" name="order2" value="<?= $i ?>">N°2</p>
          <p class="p-2"><input type="radio" name="order3" value="<?= $i ?>">N°3</p>
          <p class="p-2"><input type="radio" name="order4" value="<?= $i ?>">N°4</p>
          <p class="p-2"><input type="radio" name="order5" value="<?= $i ?>">N°5</p>
      <input type="submit" value="Set order" class="formButton ml-5">
    </div>
  </form>
  </div>
  <?php endforeach; ?>
</div>

<div class="row justify-content-center">
  <div class="col-lg-12 versus mb-3">VS</div>
  <img src="./assets/images/swords.jpg" alt="">
</div>

<div class="row offset-lg-2 mt-5">
<?php foreach($opponent_heroes as $opponent_hero): ?>
  <ul class="col-lg-2">
    <li><div class="heroNames"><?=$opponent_hero->hero_name ?></div></li>
    <li><img class="opponentTeamImages" src="<?= str_replace('http://', 'https://',$opponent_hero->image) ?>" alt=""></li>
  </ul>
  <div class="row col-lg-4 mt-4 mb-3">
    <ul>
      <li class="opponentStats">Intelligence  &nbsp;</li>
      <li class="opponentStats">Strength   &nbsp;</li>
      <li class="opponentStats">Speed  &nbsp;</li>
      <li class="opponentStats">Durability  &nbsp;</li>
      <li class="opponentStats">Power  &nbsp;></li>
      <li class="opponentStats">Combat  &nbsp;<?=$opponent_hero->combat ?></li>
    </ul>
    <ul>
      <li class="opponentStats"><?=$opponent_hero->intelligence ?></li>
      <li class="opponentStats"><?=$opponent_hero->strength ?></li>
      <li class="opponentStats"><?=$opponent_hero->speed ?></li>
      <li class="opponentStats"><?=$opponent_hero->durability ?></li>
      <li class="opponentStats"><?=$opponent_hero->power ?></li>
      <li class="opponentStats"><?=$opponent_hero->combat ?></li>
    </ul>
  </div>
<?php endforeach; ?>
<div class="col-lg-4 pt-5">
  <a href="index.php?action=dashboard&league_id=11&option=nextDay" class="nextDay registerButton pl-2 pr-2" title="Next day">Next league day</a>
</div>
</div>



