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

<div class="container-fluid col-lg-10">

  <div class="title">DASHBOARD</div>

    <!-- <div class="leagueTitle titles">
      <h4>League members</h4>
    </div>

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
    </div> -->

  <div class="heroesTitle titles">
    <h4>Your superheroes team</h4>
  </div>

<?php foreach ($user_heroes as $user_hero): ?>
<div class="cards col-lg-6 m-2">
  <div class="cardName"><?=$user_hero->hero_name ?></div>
  <img class="cardImage" src="assets/images/captain.svg" alt="#"/>
  <div class="data data_first">
    <div class="intelligence datas">
      <p>INTELLIGENCE</p>
      <p><?=$user_hero->intelligence ?></p>
    </div>
    <div class="strenght datas">
      <p>STRENGTH</p>
      <p><?=$user_hero->strength ?></p>
    </div>
    <div class="speed datas">
      <p>SPEED</p>
      <p><?=$user_hero->speed ?></p>
    </div>
  </div>
  <div class="data data_second">
    <div class="durability datas">
      <p>DURABILITY</p>
      <p><?=$user_hero->durability ?></p>
    </div>
    <div class="power datas">
      <p>POWER</p>
      <p><?=$user_hero->power ?></p>
    </div>
    <div class="combat datas">
      <p>COMBAT</p>
      <p><?=$user_hero->combat ?></p>
    </div>
  </div>
</div>
<?php endforeach; ?>

  <!-- <div class="recruitList">
    <div class="labels">
      <div class="name"><?=$user_hero->hero_name ?></p>
      <div class="data">
        <p>Intelligence</p>
        <p>Strength</p>
        <p>Speed</p>
        <p>Durability</p>
        <p>Power</p>
        <p>Combat</p>
      </div>
    </div>
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
  </div> -->

  <div class="Your opponent team"> 
    <h4>Your matches</h4>
  </div>

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
      x  <p><?=$opponent_hero->durability ?></p>
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

