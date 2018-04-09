<?php $this->title = "Super Heroes" ?>

<p>Super Heroes Super Homepage</p>

<?php foreach($heroes as $hero): ?>
<p>Name : <?= $hero->name ?></p>
<p>Power : <?= $hero->powerstats->power ?></p>
<?php endforeach; ?>  