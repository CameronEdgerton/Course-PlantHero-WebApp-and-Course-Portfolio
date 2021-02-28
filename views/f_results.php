

<?php

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
    <h1 id="size-line" class="page-question">Here are the perfect waterwise plants for you!</h1>
</div>
<script>var userInput = <?php echo json_encode($session_value); ?>;</script>
<script src ="<?php echo asset_url();?>/js/phpapi.js"></script>
    


<div id="results-container" class="inside-outside">
    <div id="results display">
        <table id="results_table">
            <tbody id="results">
            </tbody>
        </table>
        <div id="pagination"></div>
    </div>
</div>

<div id='separator'></div>