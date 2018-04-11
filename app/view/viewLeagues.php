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

<form action="join" method="get" class="formContainer">
  <h2>Join a league</h2>
  <label>
    Enter a league code
    <input type="text" name="code" placeholder="My league 32" required>
  </label>
  <input type="submit" value="Join">
</form>

<div>
  <?php foreach($leagues as $league): ?>
  <p><?= $league->league_name ?></p>
  <?php endforeach; ?>
</div>