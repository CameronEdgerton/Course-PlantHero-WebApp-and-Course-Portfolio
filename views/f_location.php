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

<h1 class="page-title">PlantHero</h1>

<div class="title">
    <a href="https://deco7180teams-pfc05t01.uqcloud.net/plant_hero/" class ="home-page-button">
        <img class="find_logo" src="<?php echo asset_url();?>/img/web/logo.png" alt="plant_hero_logo">
        <span class="logo-span">Home</span>
    </a>
    <h1 id="location-line" class="page-question">Select the colour that best matches your location</h1>
</div>


<form id="map-main" class="inside-outside" action="" method="POST">
    <div id="climate-container">
            <img src="<?php echo asset_url();?>/img/web/final_map.png" usemap="#image-map">
            <!-- image retrieved from https://healthy-kids.com.au/vegetable-science-stage3/index.html -->
            <div id="map-button-container">
                <button id="red-map-button" class="map-button" name="climate_zones" value="Tropical"></button>
                <button id="org-map-button" class="map-button" name="climate_zones" value="Subtropical"></button>
                <button id="yellow-map-button" class="map-button" name="climate_zones" value="Desert"></button>
                <button id="blue-map-button" class="map-button" name="climate_zones" value="Temperate"></button>
                <button id="dblue-map-button" class="map-button" name="climate_zones" value="Temperate"></button>
            </div>
    </div>
</form>

</form>
<div class="back-next-container">
<div class="back-container">
<a href="https://deco7180teams-pfc05t01.uqcloud.net/plant_hero" class="back-button">
<img class="btm-buttons" src="<?php echo asset_url();?>/img/web/BackButton.png" alt="Backward button">
<span class="bk-sk-span">Click to go back</span>
    </a>
    <p>Back</p>
</div>
<div class="next-container">
<a href="https://deco7180teams-pfc05t01.uqcloud.net/plant_hero/find_my_plant/soil_type" class="next-button">
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
        <a href="http://www.google.com/" >
            <button class="next-button" name="skip">
                <img class="btm-buttons" src="<-?php echo asset_url();?>/img/web/Group_33.png">
                <span class="bk-sk-span">Click to go skip</span>
            </button>
            </a>
            <p>Skip</p>
        </div>

</div>
</form>


