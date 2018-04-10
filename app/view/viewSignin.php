<?php $this->title = "Sign in" ?>

<div class="formContainer">
  <form action="index.php?action=signin" method="POST">

    <h2 class="formTitle">Sign in</h2>

    <div class="inputContainer">
      <label for="name">Username</label>
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

    <div class="successMessages <?= !empty($successMessage) ? "successMessages--active" : false ?>"><?= $successMessage ?></div>

    <input type="submit" value="Create" class="formButton">

  </form>
</div> 