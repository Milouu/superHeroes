<?php $this->title = "Your leagues" ?>

<p><?= isset($_SESSION['user']) ? 'Hello ' . $_SESSION['user'] : '' ?></p>

<div class="container leagueContainer pb-4">
  <div class="row">
    <div class="col-lg-12 border-bottom border-dark pt-2 pb-2">Your League</div>
  </div>
  <div class="container justify-content-center">
    <div class="row">
    </div>
    <div class="row">
      <div class="col-lg-6 offset-lg-3 mt-5 mb-5">Invite your friends ! Send them the key for joining your league : K45P093</div>
    </div>
    <div class="row">
      <div class="col-lg-12">Partner 1 : Mes Burnos </br> Partner 2 : Ma burnette</br> Partner 3 : Ma burnasse</div>
    </div>
    <div class="row mt-4">
      <button class="leaguesButton col-lg-2 offset-lg-3"><a href="index.php?action=leagues&option=create">Create a league</a></button>
      <button class="leaguesButton col-lg-2 offset-lg-2"><a href="index.php?action=leagues&option=join">Join League</a></button>
    </div>
  </div>
</div>



<!-- Dynamic page elements -->

<div class="containerPopins">

<div class="formContainer popin <?= ($_GET['option'] == 'create') ? "popin--active" : false ?>">
  <form action="index.php?action=leagues&option=tryCreation" method="POST">

    <h2 class="formTitle">New League</h2>
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
  <?php for($i = 0; $i < count($leagues); $i++): ?>
  <a href="index.php?action=dashboard&league_id=<?= array_values($leagues)[$i]->league_id ?>"> 
    <?= array_values($league_names)[$i][0]->league_name ?>
  </a>
  <?php endfor; ?>
</div>

<div class="formContainer popin <?= ($_GET['option'] == 'create') ? "popin--active" : false ?>">
  <form action="index.php?action=leagues&option=tryCreation" method="POST">

    <h2 class="formTitle">New League <a class="closePopin" href="index.php?action=leagues" style="color:black;">X</a></h2>

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

</div>


<!-- Copy 


<div class="formContainer popin <?= ($_GET['option'] == 'create') ? "popin--active" : false ?>">
  <form action="index.php?action=leagues&option=tryCreation" method="POST">

    <h2 class="formTitle">New League</h2>
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
  <?php for($i = 0; $i < count($leagues); $i++): ?>
  <a href="index.php?action=dashboard&league_id=<?= array_values($leagues)[$i]->league_id ?>"> 
    <?= array_values($league_names)[$i][0]->league_name ?>
  </a>
  <?php endfor; ?>
</div>


<div class="formContainer popin <?= ($_GET['option'] == 'create') ? "popin--active" : false ?>">
  <form action="index.php?action=leagues&option=tryCreation" method="POST">

    <h2 class="formTitle">New Burno</h2>
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

-->