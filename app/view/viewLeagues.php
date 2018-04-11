<?php $this->title = "Your leagues" ?>

<p><?= isset($_SESSION['user']) ? 'Hello ' . $_SESSION['user'] : '' ?></p>

<a href="index.php?action=leagues&option=create">Create League</a>

<div class="formContainer popin">
  <form action="index.php?action=leagues&option=tryCreation" method="POST">

    <h2 class="formTitle">New league</h2>

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

<div>
  <?php foreach($leagues as $league): ?>
  <p><?= $league->league_name ?></p>
  <?php endforeach; ?>
</div>