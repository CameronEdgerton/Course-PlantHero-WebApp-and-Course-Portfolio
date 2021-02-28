<?php

foreach ($_SESSION as $session_name => $session_value){
$session_name.' - '.json_encode($session_value);
;}
?>

<script>var userInput = <?php echo json_encode($session_value); ?>;</script>
<script src ="<?php echo asset_url();?>/js/phpapi.js"></script>

<h1 class="page-title">PlantHero</h1>

<div class="title">
<a href="https://deco7180teams-pfc05t01.uqcloud.net/plant_hero/" class ="home-page-button">
        <img class="find_logo" src="<?php echo asset_url();?>/img/web/logo.png" alt="plant_hero_logo">
        <span class="logo-span">Home</span>
    </a>
    <h1 id="sunlight-line" class="page-question">Select how much sunlight your plant will receive</h1>
</div>


<form action="" method="POST">
<div id="light-container" class="inside-outside">
    <div class="weather-column" id="lot-column">
    <button class="weather-buttons" name="sunlight_type" value="Shade">
    
    <img src="<?php echo asset_url();?>/img/web/cloudy.png">
    </button>
   
    <h2>Low</h2>
    </div>
    <div class="weather-column" id="sometime-column">
    <button class="weather-buttons" name="sunlight_type" value="Semi-shade">
    <img src="<?php echo asset_url();?>/img/web/overcast.png">
    </button>
        <h2>Medium</h2>
    </div>
    <div class="weather-column" id="never-column">
    <button class="weather-buttons" name="sunlight_type" value="Sun">
    <img src="<?php echo asset_url();?>/img/web/sunny.png">
    </button>
        <h2>High</h2>
    </div>
   
</div>

</form>
<div class="back-next-container">
<div class="back-container">
<a href="https://deco7180teams-pfc05t01.uqcloud.net/plant_hero/find_my_plant/soil_type" class="back-button">
<img class="btm-buttons" src="<?php echo asset_url();?>/img/web/BackButton.png" alt="Backward button">
<span class="bk-sk-span">Click to go back</span>
    </a>
    <p>Back</p>
</div>
<div class="next-container">
<a href="https://deco7180teams-pfc05t01.uqcloud.net/plant_hero/find_my_plant/plant_size" class="next-button">
<img class="btm-buttons" src="<?php echo asset_url();?>/img/web/Group_33.png" alt="Forward button">
<span class="bk-sk-span">Click to skip</span>
    </a>
    <p>Skip</p>
</div>
</div>


<!--   Modifying dont change!
<form action="" method="POST">
<div class="back-next-container">
        <div class="back-container">
            <button class="back-button" onclick="history.go(-1);">
                <img class="btm-buttons" src="<?php echo asset_url();?>/img/web/gobackpot.png">
            </button>
            <p>Back</p>
        </div>
        <div class="next-container">
            <button class="next-button" name="skip">
                <img class="btm-buttons" src="<?php echo asset_url();?>/img/web/Group_33.png">
            </button>
            <p>Skip</p>
        </div>

</div>
</form>
-->



<!-- FROM soil.php

<div class="inside-outside">
    <div class="weather-column" id="lot-column">
        <button id="compost-button" type="button" onclick="currentUrl.appendCondition('Light Needs','Shade')">
            <img src="https://www.jing.fm/clipimg/detail/21-214548_cloudy-weather-clipart-cartoon-weather-cloudy.png">
        </button>
        <h2>Shade</h2>
    </div>
    <div class="weather-column" id="sometime-column"> 
        <button id="compost-button" type="button" onclick="currentUrl.appendCondition('Light Needs','Semi-shade')">
            <img src="https://bloximages.newyork1.vip.townnews.com/northwestgeorgianews.com/content/tncms/assets/v3/editorial/1/6e/16e78ebe-f2e6-11e3-aa24-0017a43b2370/5671cf4ba8a87.image.jpg?resize=279%2C286">
        </button>
        <h2>Semi-shade</h2>
    </div>
    <div class="weather-column" id="never-column"> 
        <button id="compost-button" type="button" onclick="currentUrl.appendCondition('Light Needs','Sun')">
            <img src="https://www.firstpalette.com/images/craft-mainpic-square/papersun-main2.jpg">
        </button>
        <h2>Sun</h2>
    </div>
</div>
-->