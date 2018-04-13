<?php $this->title = "Recruit Superheroes"; ?>

<div class="container tableContainer mt-5">
  <div class="row">
    <div class="col-lg-12 tableTitle">Choose your superheroes</div>
  </div>
  <div class="row mt-4">
    <div class="col-lg-12">Create your team choosing 5 heroes that you'll pay with RP</div>
  </div>
  <div class="row">
    <div class="col-lg-4 offset-lg-4 mt-3 mb-5 budgetRemaining">Budget remaining 5000 RP</div>
  </div>
  <div class="row mt-4 justify-content-center">
    <form action="index.php?action=recruit&league_id=<?= $_GET['league_id'] ?>" method="POST" class="col-lg-6">
      <select id="sorting" name="sorting" class="mt-3 mb-3">
        <option value="strength">Strength</option>
        <option value="durability">Durability</option>
        <option value="power">Power</option>
        <option value="combat">Combat</option>
      <select>
      <input type="submit" value="Sort">
    </form>
  </div>
   <p class="recruitError"><?= isset($_POST['error']) ? $_POST['error'] : '' ?></p>
  <form class="recruitForm" action="index.php?action=tryRecruit&league_id=<?= $_GET['league_id'] ?>" method="POST">
    <table class="table-bordered table-hover col-lg-12 mt-5">
      <tr class="tableHeader">
        <th>Name</th>
        <th class="displayTable">Speed</th> 
        <th class="displayTable">Intelligence</th>
        <th class="displayTable">Strength</th>
        <th class="displayTable">Durability</th>
        <th class="displayTable">Power</th>
        <th class="displayTable">Combat</th>
        <th>Price</th>
        <th class="checkbox">Check</th>
      </tr>
      <?php foreach ($heroes as $hero): ?>
      <tr>
        <td><?= $hero->hero_name?></td>
        <td class="displayTable"><?= $hero->speed ?></td> 
        <td class="displayTable"><?= $hero->intelligence ?></td>
        <td class="displayTable"><?= $hero->strength ?></td>
        <td class="displayTable"><?= $hero->durability ?></td>
        <td class="displayTable"><?= $hero->power ?></td>
        <td class="displayTable"><?= $hero->combat ?></td>
        <td><?= $hero->average * 10 ?> RP</td>
        <td><input type="checkbox" name="selections[]" value="<?= $hero->hero_id ?>"></td>
      </tr>
      <?php endforeach; ?>
    </table>
    <div class="row justify-content-center floating">
      <input type="submit" value="Confirm players">
    </div>
  </form>
</div>
