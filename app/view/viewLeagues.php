<?php $this->title = "Your leagues" ?>

<p><?= isset($_SESSION['user']) ? 'Hello ' . $_SESSION['user'] : '' ?></p>

<a href="index.php?action=leagues&option=create">Create League</a>

<div class="formContainer popin <?= ($_GET['option'] == 'create') ? "popin--active" : false ?>">
  <form action="index.php?action=leagues&option=tryCreation" method="POST">

    <h2 class="formTitle">New league</h2>
    <a href="index.php?action=leagues" style="color:black;">Close</a>

    <div class="inputContainer">
      <label for="name">League Name</label>
      <input type="text" name="name" id="name" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>" class=" <?= isset($errorMessages['name']) ? "error--active" : false ?>">
      <div class="errorMessages <?= !empty($errorMessages['name']) ? 'errorMessages--active' : '' ?>"><?= $errorMessages['name'] ?></div>
    </div>

    <br>

    <div class="successMessages <?= !empty($successMessage) ? "successMessages--active" : false ?>"><?= $successMessage ?></div>

    <input type="submit" value="Create" class="formButton">

  </form>
</div> 

<a href="index.php?action=leagues&option=join">Join League</a>

<div class="formContainer popin <?= ($_GET['option'] == 'join') ? "popin--active" : false ?>">
  <form action="index.php?action=leagues&option=tryJoin" method="POST">
    <h2 class="formTitle">Join league</h2>
    <a href="index.php?action=leagues" style="color:black;">Close</a>

    <div class="inputContainer">
      <label for="code">League code</label>
      <input type="text" name="code" id="code" value="<?= isset($_POST['code']) ? $_POST['code'] : '' ?>" class=" <?= isset($errorMessages['code']) ? "error--active" : false ?>">
      <div class="errorMessages <?= !empty($errorMessages['code']) ? 'errorMessages--active' : '' ?>"><?= $errorMessages['code'] ?></div>
    </div>
    <br>
    <div class="successMessages <?= !empty($successMessage) ? "successMessages--active" : false ?>"><?= $successMessage ?></div>

    <input type="submit" value="Create" class="formButton">
  </form>
</div>

<div>
  <?php 
  for($i = 0; $i < count($leagues); $i++)
  {
  ?>

  <a href="index.php?action=dashboard&league_id=<?= array_values($leagues)[$i]->league_id ?>"> 
    <?= array_values($league_names)[$i][0]->league_name ?>
  </a>

  <?php
  }
  ?>
</div>