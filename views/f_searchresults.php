
<h1 class="page-title">PlantHero</h1>
<div class="title">
    <a href="https://deco7180teams-pfc05t01.uqcloud.net/plant_hero/" class ="home-page-button">
        <img class="find_logo" src="<?php echo asset_url();?>/img/web/logo.png" alt="plant_hero_logo">
    </a>
    <h1 id="size-line" class="page-question">Here are the waterwise plants that match your search!</h1>
</div>
<script>var userInput = <?php echo json_encode($_SESSION['search']['Common Name']); ?>;</script>
<script src ="<?php echo asset_url();?>/js/searchfunction.js"></script>

<form action="" method="POST">
    <div class="inside-outside">

        <div id="results display">
            <table>
                <tbody id="results">
                </tbody>
            </table>
        </div>
    </div>
</form>

<div class="back-next-container">
    <div class="back-container">
        <a href="https://deco7180teams-pfc05t01.uqcloud.net/plant_hero/search?" class="back-button">
        <img class="btm-buttons" src="<?php echo asset_url();?>/img/web/BackButton.png" alt="Backward button">
        <span class="bk-sk-span">Click to go back</span>
        </a>
        <p>Back</p>
    </div>
    </div>
<div id='separator'></div>

