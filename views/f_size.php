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


<?php /*
echo "The array for ED <br>";
foreach ($_SESSION['user_input'] as $session_name => $session_value){
echo $session_name.' - '.json_encode($session_value);
echo "<br>";}
*/?>
<h1 class="page-title">PlantHero</h1>
<div class="title">
    <a href="https://deco7180teams-pfc05t01.uqcloud.net/plant_hero/" class ="home-page-button">
        <img class="find_logo" src="<?php echo asset_url();?>/img/web/logo.png" alt="plant_hero_logo">
        <span class="logo-span">Home</span>
    </a>
    <h1 id="size-line" class="page-question">Select the plant height you are looking for</h1>
</div>


<form action="" method="POST">
        <div id="size-container" class="inside-outside">
            <div class="size-column" id="small-column">
                <button class="size-buttons" id="small-button" name="plant_size" value="0.5 to 1m">
                    <img id = "small-plant" src="<?php echo asset_url();?>/img/web/Group_33.png">
                </button>
                <h2>Small <br> 0.5m - 1m</h2>
            </div>
            <div class="size-column" id="medium-column"> 
                <button class="size-buttons" id="medium-button" name="plant_size" value="1 to 2m">
                    <img id = "medium-plant"src="<?php echo asset_url();?>/img/web/Group_35.png">
                </button>
                <h2>Medium <br> 1m - 2m</h2>
            </div>
            <div class="size-column" id="large-column"> 
                <button class="size-buttons" id="large-button" name="plant_size" value="2 to 5m">
                    <img id = "large-plant" src="<?php echo asset_url();?>/img/web/Group_36.png">
                </button>
                <h2>Large <br> 2m - 5m</h2>
            </div>
        </div>
        </form>

        </form>

<div class="back-next-container">
<div class="back-container">
<a href="https://deco7180teams-pfc05t01.uqcloud.net/plant_hero/find_my_plant/sunlight" class="back-button">
<img class="btm-buttons" src="<?php echo asset_url();?>/img/web/BackButton.png" alt="Backward button">
<span class="bk-sk-span">Click to go back</span>
    </a>
    <p>Back</p>
</div>
<div class="next-container">
<a href="https://deco7180teams-pfc05t01.uqcloud.net/plant_hero/find_my_plant/plant_colour" class="next-button">
<img class="btm-buttons" src="<?php echo asset_url();?>/img/web/Group_33.png" alt="Forward button">
<span class="bk-sk-span">Click to skip</span>
    </a>
    <p>Skip</p>
</div>
</div>


<!--div class="back-next-container">
        <div class="back-container">
            <button class="back-button" onclick= "window.location.replace(deco7180teams-pfc05t01.uqcloud.net/plant_hero/find_my_plant/sunlight)">
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

