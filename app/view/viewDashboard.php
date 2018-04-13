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

<div class="container bigContainer mt-5">
<div class="row">
  <div class="title col-lg-12">DASHBOARD</div>
</div>
<div class="row">
  <?php if(!$current_league_day->current_league_day): ?>
  <div class="col-lg-12 mt-4 mb-4">
    <button class="redButton">
      <a href="index.php?action=dashboard&option=tryLaunchLeague&league_id=<?= $_GET['league_id'] ?>" style="display:<?= $current_league_day->current_league_day ? 'none' : 'inline-block' ?>">
        Launch League
      </a>
    </button>
    <p style="color:red;"><?= isset($errorMessages['tryLaunchLeague']) ? $errorMessages['tryLaunchLeague'] : '' ?></p>
    <p style="color:green;"><?= isset($successMessages['leagueCreation']) ? $successMessages['leagueCreation'] : '' ?></p>
  </div>
  <?php endif; ?>  
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

<!-- Don't show section on first league day -->
<?php if(intval($current_league_day->current_league_day) > 1): ?>
<div class="row tableContainer">
  <div class="banner titles col-lg-12">
    <h4>League Results</h4>
  </div>
  <div class="table col-md-6">
    <h4 class="subTitle">Current table</h4>
    <?php
      $positionKeys = array_keys($league_table);
      for($i = 0; $i < count($league_table); $i++):
    ?>
    <div class="position">
      <div class="left">
        <p class="rank">n°<?= $i ?></p>
        <p class="user"><?= array_keys($league_table)[$i] ?></p>
      </div>
      <p class="points"><?= $league_table[$positionKeys[$i]] ?> points</p>
    </div>
    <?php endfor; ?>
  </div>
  <div class="table lastMatch col-md-6">
    <h4 class="subTitle">Your last match</h4>
    <div class="lastMatchWrap">
      <p><?= $last_match['victory'] ? 'Victory' : 'Defeat' ?></p>
      <p class="matchScore <?= $last_match['victory'] ? 'victory' : 'defeat' ?>">
        <?= $last_match['score'] ?>
        </p>
      <p>vs <?= $last_match['opponent'] ?></p>
    </div>
  </div>
</div>
<?php endif; ?>

<!-- Don't show next day button on last league -->
<?php if(intval($current_league_day->current_league_day) < 8): ?>
<div class="row">
  <div class="col-lg-12 mt-5 mb-3 yourChampionship banner">
    <h4>Your Championship</h4>
  </div>
</div>
<div class="row">
  <div class="col-lg-3 offset-lg-1 nextMatch mt-5">Next Match :</div>
</div>
<div class="row mb-5">
  <div class="col-lg-9 offset-lg-1 mt-3 orderTeam">Order your superheroes in team. They will face the opponent hero who is placed at the same place</div>
</div>

<div class="ml-5">

<div class="row">
  <div class="col-lg-12 mt-4 mb-4">
    <h2 class="ml-5 mb-5">Set your team order</h2>
  </div>
</div>

<div class="row justify-content-center">
<form action="index.php?action=dashboard&option=trySetOrder&league_id=<?= $_SESSION['league_id'] ?>" method="POST" class="recruitList mb-5">
  <?php 
  $i=0;
  foreach($user_heroes as $user_hero): 
  ?>
  <div class="mb-5 row">
    <ul>
      <li><img class="myTeamImages" src="<?= str_replace('http://', 'https://',$user_hero->image) ?>" alt="#"></li>
      <li><p class="name heroNames"><?=$user_hero->hero_name ?></p></li>   
    </ul>
      <ul class="d-inline-flex flex-row ml-5">
          <li class="ml-4"><p><input type="radio" name="order1" value="<?= ++$i ?>" <?= ($user_hero->hero_id == $user_current_hand->hero1_order) ? 'checked' : '' ?>>N°1</p></li>
          <li class="ml-4"><p><input type="radio" name="order2" value="<?= $i ?>" <?= ($user_hero->hero_id == $user_current_hand->hero2_order) ? 'checked' : '' ?>>N°2</p></li>
          <li class="ml-4"><p><input type="radio" name="order3" value="<?= $i ?>" <?= ($user_hero->hero_id == $user_current_hand->hero3_order) ? 'checked' : '' ?>>N°3</p></li>
          <li class="ml-4"><p><input type="radio" name="order4" value="<?= $i ?>" <?= ($user_hero->hero_id == $user_current_hand->hero4_order) ? 'checked' : '' ?>>N°4</p></li>
          <li class="ml-4"><p><input type="radio" name="order5" value="<?= $i ?>" <?= ($user_hero->hero_id == $user_current_hand->hero5_order) ? 'checked' : '' ?>>N°5</p></li>
      </ul>
  </div>
  <?php endforeach; ?>
  <input type="submit" value="Set order" class="formButton mr-5 mb-5">
  <p style="color:red;"><?= isset($errorMessages['order']) ? $errorMessages['order'] : '' ?></p>
  <p style="color:green;"><?= isset($successMessages['order']) ? $successMessages['order'] : '' ?></p>
  </form>
</div>

</div>


<?php if($current_league_day->current_league_day): ?>

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
      <li class="opponentStats">Power  &nbsp;</li>
      <li class="opponentStats">Combat  &nbsp;</li>
    </ul>
    <ul>
      <li class="opponentStats opponentStatsValues"><?=$opponent_hero->intelligence ?></li>
      <li class="opponentStats opponentStatsValues"><?=$opponent_hero->strength ?></li>
      <li class="opponentStats opponentStatsValues"><?=$opponent_hero->speed ?></li>
      <li class="opponentStats opponentStatsValues"><?=$opponent_hero->durability ?></li>
      <li class="opponentStats opponentStatsValues"><?=$opponent_hero->power ?></li>
      <li class="opponentStats opponentStatsValues"><?=$opponent_hero->combat ?></li>
    </ul>
  </div>
  <?php endforeach; ?>
</div>
<?php endif; ?>
<div class="row">
  <div class="col-lg-12 pt-5 mb-4">
    <a href="index.php?action=dashboard&league_id=11&option=nextDay" class="nextDay registerButton pl-2 pr-2" title="Next day">Next league day</a>
  </div>
</div>
<?php endif; ?>