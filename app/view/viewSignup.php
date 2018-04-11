<?php $this->title = "Sign up" ?>

<div class="container formContainer mt-5 col-lg-6 col-md-6">
  <div class="formTitle">Sign up</div>
  <form class="container" action="index.php?action=signup" method="POST">

    <div class="inputContainer">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>" class=" <?= isset($errorMessages['name']) ? "error--active" : false ?>">
      <div class="errorMessages <?= !empty($errorMessages['name']) ? 'errorMessages--active' : '' ?>"><?= $errorMessages['name'] ?></div>
    </div>

    <br>

    <div class="inputContainer">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" value="<?= isset($_POST['password']) ? $_POST['password'] : ''  ?>" class="<?= isset($errorMessages['password']) ? "error--active" : false ?>">
      <div class="errorMessages <?= !empty($errorMessages['password']) ? 'errorMessages--active' : '' ?>"><?= $errorMessages['password'] ?></div>
    </div>

    <br>

    <div class="inputContainer">
      <label for="mail">Mail</label>
      <input type="mail" name="mail" id="mail" value="<?= isset($_POST['mail']) ? $_POST['mail'] : ''  ?>" class="<?= isset($errorMessages['mail']) ? "error--active" : false ?>">
      <div class="errorMessages <?= !empty($errorMessages['mail']) ? 'errorMessages--active' : '' ?>"><?= $errorMessages['mail'] ?></div>
    </div>

    <br>

    <div class="successMessages <?= !empty($successMessage) ? "successMessages--active" : false ?>"><?= $successMessage ?></div>

    <input type="submit" value="Create" class="formButton">

  </form>
</div> 