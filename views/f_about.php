<?php

foreach ($_SESSION as $session_name => $session_value){
$session_name.' - '.json_encode($session_value);
;}
?>

<script>var userInput = <?php echo json_encode($session_value); ?>;</script>
<script src ="<?php echo asset_url();?>/js/phpapi.js"></script>

<h1 class="page-title">About PlantHero</h1>

<div class="title">
<a href="https://deco7180teams-pfc05t01.uqcloud.net/plant_hero/" class ="home-page-button">
        <img class="find_logo" src="<?php echo asset_url();?>/img/web/logo.png" alt="plant_hero_logo">
    </a>
</div>

<div id="about-container">
    <p>Welcome to the PlantHero universe!</p>
    <hr>
    <p>We are delighted to have you on board!</p>
    <hr>
    <p>PlantHero was founded in 2020 by a group of students
        from the University of Queensland. The mission and intention of 
        this web application is to promote awarenes of Waterwise plants
        and what plants are suitable for which environments. We do this to make sure, that 
        you the buyer, don't have to waste your money on plants that 
        would never have thrived in your environment. Stop wasting 
        money - find the right plan for you!
    </p>
</div>

<form action="" method="POST">
<div class="back-next-container">
        <div class="back-container">
            <button class="back-button" onclick="history.go(-1);">
                <img class="btm-buttons" src="<?php echo asset_url();?>/img/web/gobackpot.png">
            </button>
            <p>Back</p>
        </div>
</div>
</form>
