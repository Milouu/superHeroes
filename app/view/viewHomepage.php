<?php $this->title = "Super Heroes" ?>

<p><?= isset($_SESSION['user']) ? 'Hello ' . $_SESSION['user'] : '' ?></p>
<div class="container">
    <div class="row homepageTitleContainer">
        <h1 class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-xs-8 offset-xs-2 homepageTitle">Hero Battlefield Tournament</h1>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 gameResume">Hero Battlefield Tournament is a card-fighting system featuring superheroes from all walks of life. Between strategy and chance, it's up to you to compose a team of superheroes able to defeat your opponent and bring you to victory! General rules : The championship happens in one week, with an action to be done every day. Your team is made up of 5 superheroes, each with different abilities. During the fighting, these heroes clash and bring you (or not) to victory!</div>
    </div>
    <div class="homepageButtonContainer">
        <div class="row justify-content-center">
            <button class="registerButton">I want to register !</button>
        </div>
        <div class="row justify-content-center mt-3">
            <button class="readTheRulesButton">I want to read the rules first</button>
        </div>
        <div class="row">
            <a href="#" class="mt-2 mb-3 col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-4 offset-sm-4 col-xs-4 offset-xs-4 signInLink">I already have an account !</a>
        </div>
    </div>
</div>   
