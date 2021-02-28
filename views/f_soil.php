<?php

/* [WARNING!][WARNING!][WARNING!]

Do not delete code before the project is done. This is for parameters testing.
if(isset($_SESSION['user_input'])) {
    foreach($_SESSION['user_input'] as $row) {
        echo $row;
    }    
}
else {
    echo "session clear";
}
*/



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
    <h1 id="soil-line" class="page-question">Select the type of soil you'll be using</h1>
</div>


<form id="soil-container"class="inside-outside" action="" method="POST">
    <div id="left-soil-column"class="left-column">
        <div class="left-soil" id="loam">
            <button id="loam-button" class="btn btn-primary" name="soil_type" value="Loam">
            <!-- image retrieved from https://www.pexels.com/photo/dark-dirty-texture-dust-5209216/ -->
                <img src="<?php echo asset_url();?>/img/web/loam.jpg">
            </button>
            <h2>Loam</h2>
        </div>
        <div class="left-soil" id="clay">
            <!-- image retrieved from https://www.pexels.com/photo/climate-desert-dry-dust-5597653/ -->
            <button id="clay-button"class="btn btn-primary" name="soil_type" value="Clay">
                <img src="<?php echo asset_url();?>/img/web/clay.jpg">
            </button>
            <h2>Clay</h2>
        </div>
    </div>
    <div id="right-soil-column" class="right-column">
        <div class="right-soil" id="sand">
            <button id="sand-button" class="btn btn-primary" name="soil_type" value="Sand">
            <!-- image retrieved from https://www.pexels.com/photo/close-up-photo-of-white-sand-1478450/ -->
                <img src="<?php echo asset_url();?>/img/web/sand.jpg">
            </button>
            <h2>Sand</h2>
        </div>
        <div class="right-soil" id="compost">
            <button id="compost-button" class="btn btn-primary" name="soil_type" value="Compost">
            <!-- image retrieved from https://www.pexels.com/photo/brown-dried-leaves-on-ground-4846396/ -->
                <img src="<?php echo asset_url();?>/img/web/compost.jpg">
            </button>
            <h2>Compost</h2>
        </div>
    </div>
</form>

</form>
<div class="back-next-container">
<div class="back-container">
<a href="https://deco7180teams-pfc05t01.uqcloud.net/plant_hero/find_my_plant/index" class="back-button">
<img class="btm-buttons" src="<?php echo asset_url();?>/img/web/BackButton.png" alt="Backward button">
<span class="bk-sk-span">Click to go back</span>
    </a>
    <p>Back</p>
</div>
<div class="next-container">
<a href="https://deco7180teams-pfc05t01.uqcloud.net/plant_hero/find_my_plant/sunlight" class="next-button">
<img class="btm-buttons" src="<?php echo asset_url();?>/img/web/Group_33.png" alt="Forward button">
<span class="bk-sk-span">Click to skip</span>
    </a>
    <p>Skip</p>
</div>
</div>

<!--form action="" method="POST">
<div class="back-next-container">
        <div class="back-container">
            <button class="back-button" onclick="history.go(-1);">
                <img class="btm-buttons" src="<-?php echo asset_url();?>/img/web/BackButton.png">
                <span class="bk-sk-span">Click to go back</span>
            </button>
            <p>Back</p>
        </div>
        <div class="next-container">
            <button class="next-button" name="skip">
                <img class="btm-buttons" src="<-?php echo asset_url();?>/img/web/Group_33.png">
                <span class="bk-sk-span">Click to skip</span>
            </button>
            <p>Skip</p>
        </div>

</div>
</form>
