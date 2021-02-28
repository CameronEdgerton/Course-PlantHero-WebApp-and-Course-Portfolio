<?php

foreach ($_SESSION as $session_name => $session_value){
$session_name.' - '.json_encode($session_value);
;}
?>


<h1 class="page-title">PlantHero</h1>
<!-- <div class="title">

</div>
 -->
<div id="search-form-container">
    <div id="search-title-box">
        <a href="https://deco7180teams-pfc05t01.uqcloud.net/plant_hero/" class ="home-page-button">
            <img id="search-logo"class="find_logo" src="<?php echo asset_url();?>/img/web/logo.png" alt="plant_hero_logo">
            <span class="logo-span">Home</span>
        </a>
    <h1 id="what-line" class="page-question">What is the name of the plant ?</h1>
    </div>

    
        <form id="search_form" action="" method="POST">
        <div id="search_bar_container">
            <div id="search_name_bar" class="button">
            
            <input autocomplete="off" type="text" placeholder="Type here" id="search_input" name="plant_name">

            </div>
        </div>

    <div id="search_button">
        <button id = "search_button_plant" name="submit">
        <img  src="<?php echo asset_url();?>/img/web/searchplant.png">
        </button>
        <h2>Search</h2>
    </div>
    </form>


</div>


</div>
</div>


