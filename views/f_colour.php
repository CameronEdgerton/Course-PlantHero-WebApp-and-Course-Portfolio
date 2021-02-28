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
    <h1 id="colour-line" class="page-question">Select a preference for flower colour</h1>
</div>
<form action="" method="POST">
    <div id="colour-container">
        <button id="blk-but" class="colour-button" name="flower_colour" value="Black">>
        </button>
        <button id="wht-but" class="colour-button" name="flower_colour" value="White">
        </button>
        <button id="blu-but" class="colour-button" name="flower_colour" value="Blue">
        </button>
        <button id="pnk-but" class="colour-button" name="flower_colour" value="Pink">
        </button>
        <button id="ppl-but" class="colour-button" name="flower_colour" value="Purple">
        </button>
        <button id="red-but" class="colour-button" name="flower_colour" value="Red">
        </button>
        <button id="org-but" class="colour-button" name="flower_colour" value="Orange">
        </button>
        <button id="yllw-but" class="colour-button" name="flower_colour" value="Yellow">
        </button>
    </div>

    </form>
<div class="back-next-container">
<div class="back-container">
<a href="https://deco7180teams-pfc05t01.uqcloud.net/plant_hero/find_my_plant/plant_size" class="back-button">
<img class="btm-buttons" src="<?php echo asset_url();?>/img/web/BackButton.png" alt="Backward button">
<span class="bk-sk-span">Click to go back</span>
    </a>
    <p>Back</p>
</div>
<div class="next-container">
<a href="https://deco7180teams-pfc05t01.uqcloud.net/plant_hero/find_my_plant/results" class="next-button">
<img class="btm-buttons" src="<?php echo asset_url();?>/img/web/Group_33.png" alt="Forward button">
<span class="bk-sk-span">Click to skip</span>
    </a>
    <p>Skip</p>
</div>
</div>

    <!--div class="back-next-container">
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