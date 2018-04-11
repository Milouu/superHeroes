<?php $this->title = "Dashboard" ?>

<h1><?= $league_name[0]->league_name ?></h1>

<a href="index?action=recrutement">Recrutement</a>

<div>
  <?php 
  for($i = 0; $i < count($league_users); $i++)
  {
  ?>

  <span><?= array_values($user_names)[$i][0]->user_name ?></span>
  <span><?= array_values($league_users)[$i]->user_id ?></span>

  <br>

  <?php
  }
  ?>
</div>