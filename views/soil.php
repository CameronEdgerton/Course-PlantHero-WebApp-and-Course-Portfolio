<h1 class="page-title">PlantHero</h1>

<div class="title">
    <img class="page-logo" src="http://i1381.photobucket.com/albums/ah215/
            mzartdesigns/google-logo_zpspkcztsjo.png" alt="plant_hero_logo">
</div>   

<h1 id="soil-line" class="page-question">What type of soil?</h1>
<h2>If planting indoors, press skip</h2>

<div class="inside-outside">
            <div class="left-column">
                <div class="left-soil" id="loam">
                    <button id="loam-button" type=button onclick="currentUrl.appendCondition('Soil Type','Loam')">
                        <img src="assets/img/web/loam.png">
                    </button>
                    <h2>Loam</h2>
                </div>
                <div class="left-soil" id="clay">
                    <button id="clay-button" type="button" onclick="currentUrl.appendCondition('Soil Type','Clay')">
                        <img src="assets/img/web/clay.png">
                    </button>
                    <h2>Clay</h2>
                </div>
            </div>
            <div class="right-column"> 
                <div class="right-soil" id="sand">
                    <button id="sand-button" type="button" onclick="currentUrl.appendCondition('Soil Type','Sand')">
                        <img src="assets/img/web/sand.png">
                    </button>
                    <h2>Sand</h2>
                </div>
                <div class="right-soil" id="compost">
                    <button id="compost-button" type="button" onclick="currentUrl.appendCondition('Soil Type','Compost')">
                        <img src="assets/img/web/compost.png">
                    </button>
                    <h2>Compost</h2>
                </div>
            </div>
        </div>

        <h1 id="sunlight-line" class="page-question">How much sunlight?</h1>

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

        <h1 id="size-line" class="page-question">What size?</h1>

        <div class="inside-outside">
            <div class="size-column" id="small-column">
                <button id="compost-button" type="button" onclick="currentUrl.appendCondition('Height Ranges','0.5 to 1m, 1 to 2m')">
                    <img src="https://img.pngio.com/hd-plant-cartoon-png-plant-growing-cartoon-transparent-png-image-plant-cartoon-png-1876_2050.png">
                </button>
                <h2>Small <br> 0.5m - 1m</h2>
            </div>
            <div class="size-column" id="medium-column"> 
                <button id="compost-button" type="button" onclick="currentUrl.appendCondition('Height Ranges','1 to 2m')">
                    <img src="https://img.pngio.com/hd-plant-cartoon-png-plant-growing-cartoon-transparent-png-image-plant-cartoon-png-1876_2050.png">
                </button>
                <h2>Medium <br> 1m - 2m</h2>
            </div>
            <div class="size-column" id="large-column"> 
                <button id="compost-button" type="button" onclick="currentUrl.appendCondition('Height Ranges','3 to 5m')">
                    <img src="https://img.pngio.com/hd-plant-cartoon-png-plant-growing-cartoon-transparent-png-image-plant-cartoon-png-1876_2050.png">
                </button>
                <h2>Large <br> 3m - 5m</h2>
            </div>
        </div>

        <h1 id="size-line" class="page-question">What type of plant?</h1>

        <div class="inside-outside">
            <div class="left-column">
                <div class="left-soil">
                    <button type="button" class="plant-button" onclick="currentUrl.appendCondition('Plant Type','Grass')">
                        <h1 class="type-head">Grass</h1>
                    </button>
                </div>
                <div class="left-soil">
                    <button type="button" onclick="currentUrl.appendCondition('Plant Type','Succulent')">
                        <h1 class="type-head">Succulent</h1>
                    </button>
                </div>
                <div class="left-soil">
                    <button type="button" onclick="currentUrl.appendCondition('Plant Type','Groundcover')">
                        <h1 class="type-head">Groundcover</h1>
                    </button>
                </div>
                <div class="left-soil">
                    <button type="button" onclick="currentUrl.appendCondition('Plant Type','Bromeliad')">
                        <h1 class="type-head">Bromeliad</h1>
                    </button>
                </div>
                <div class="left-soil">
                    <button type="button" onclick="currentUrl.appendCondition('Plant Type','Orchid')">
                        <h1 class="type-head">Orchid</h1>
                    </button>
                </div>
            </div>

            <div id="middle-column-1"> 
                <div class="left-soil">
                    <button type="button" class="plant-button" onclick="currentUrl.appendCondition('Plant Type','Perennial')">
                        <h1 class="type-head">Perennial</h1>
                    </button>
                </div>
                <div class="left-soil">
                    <button type="button" onclick="currentUrl.appendCondition('Plant Type','Palm & Cycads')">
                        <h1 class="type-head">Palm & Cycads</h1>
                    </button>
                </div>
                <div class="left-soil">
                    <button type="button" onclick="currentUrl.appendCondition('Plant Type','Climber')">
                        <h1 class="type-head">Climber</h1>
                    </button>
                </div>
                <div class="left-soil">
                    <button type="button" onclick="currentUrl.appendCondition('Plant Type','Medium Tree')">
                        <h1 class="type-head">Medium tree</h1>
                    </button>
                </div>
                <div class="left-soil">
                    <button type="button" onclick="currentUrl.appendCondition('Plant Type','Annual')">
                        <h1 class="type-head">Annual</h1>
                    </button>
                </div>
            </div>

            <div id="middle-column-2"> 
                <div class="left-soil">
                    <button type="button" class="plant-button" onclick="currentUrl.appendCondition('Plant Type','Bulb')">
                        <h1 class="type-head">Bulb</h1>
                    </button>
                </div>
                <div class="left-soil">
                    <button type="button" onclick="currentUrl.appendCondition('Plant Type','Shrub')">
                        <h1 class="type-head">Shrub</h1>
                    </button>
                </div>
                <div class="left-soil">
                    <button type="button" onclick="currentUrl.appendCondition('Plant Type','Vegetable')">
                        <h1 class="type-head">Vegetable</h1>
                    </button>
                </div>
                <div class="left-soil">
                    <button type="button" onclick="currentUrl.appendCondition('Plant Type','Large Tree')">
                        <h1 class="type-head">Large tree</h1>
                    </button>
                </div>
                <div class="left-soil">
                    <button type="button" onclick="currentUrl.appendCondition('Plant Type','Bamboo')">
                        <h1 class="type-head">Bamboo</h1>
                    </button>
                </div>
            </div>
            
            <div class="right-column"> 
                <div class="left-soil">
                    <button type="button" class="plant-button" onclick="currentUrl.appendCondition('Plant Type','Fruit')">
                        <h1 class="type-head">Fruit</h1>
                    </button>
                </div>
                <div class="left-soil">
                    <button type="button" onclick="currentUrl.appendCondition('Plant Type','Fern')">
                        <h1 class="type-head">Fern</h1>
                    </button>
                </div>
                <div class="left-soil">
                    <button type="button" onclick="currentUrl.appendCondition('Plant Type','Herb')">
                        <h1 class="type-head">Herbs</h1>
                    </button>
                </div>
                <div class="left-soil">
                    <button type="button" onclick="currentUrl.appendCondition('Plant Type','Small Tree')">
                        <h1 class="type-head">Small tree</h1>
                    </button>
                </div>
                <div class="left-soil">
                    <button type="button" onclick="currentUrl.appendCondition('Plant Type','Aquatic')">
                        <h1 class="type-head">Aquatic</h1>
                    </button>
                </div>
            </div>
        </div>

        <h1 id="size-line" class="page-question">What colour of plant?</h1>

        <div id="climate-container">
            <img src="assets/img/web/Rainbow-cartoon-on-transparent-background-PNG.png" usemap="#image-map">

            <map name="image-map">
                <!-- Fill in where u wish to target -->
                <area target="" href="" coords="89,383,110,309,167,248,249,202,324,184,384,188,433,198,488,219,516,243,548,271,572,295,589,329,603,367,602,389,568,356,549,321,516,281,474,251,430,228,357,212,254,232,192,272,139,333,129,353" shape="poly">
                <area target="" href="" coords="135,358,152,324,200,272,262,236,320,221,372,220,419,230,464,252,489,270,531,307,549,336,557,350,529,362,473,303,428,276,373,259,313,259,257,279,208,318,177,348,170,362" shape="poly">
                <area target="" href="" coords="175,367,203,326,235,301,267,282,305,268,340,261,358,264,384,267,405,273,431,282,450,295,473,310,497,333,512,350,521,364,509,390,499,392,475,362,443,330,404,308,337,298,287,309,265,322,235,345,216,364,203,384,188,390" shape="poly">
                <area target="" href="" coords="207,386,240,348,277,322,317,308,346,303,388,310,418,324,439,339,471,367,486,389,459,406,419,369,373,349,318,345,273,369,246,394,237,410,224,390" shape="poly">
            </map>
        </div>

        <div id="get results">
            <button type="button" onclick="currentUrl.callApi()">
                <h1 class="type-head">Get results!</h1>
            </button>
        </div>

        <div id="results display">
            <table>
                <thead>
                    <tr>
                        <th>Plant name</th>
                    </tr>
                </thead>
                <tbody id="results">
                </tbody>
            </table>
        </div>
    

<div class="back-button">
    <img  src="http://i1381.photobucket.com/albums/ah215/
            mzartdesigns/google-logo_zpspkcztsjo.png" alt="plant_hero_logo">
</div>









<!-- PREVIOUSLY WHAT WAS ON PAGE PRIOR TO ALVIN'S CHANGES
<h1 id="question-line" class="page-question">What type of soil?</h1>

<div id="inside-outside">
    <div id="left-column">
        <div class="left-soil" id="loam">
            <!--input type="image" 
            <button id="loam-button" src="<?php echo asset_url();?>/images/loam.png" type=button onclick="currentUrl.appendCondition('Soil Type','Loam')">
            <h2>Loam</h2>
        </div>
        <div class="left-soil" id="clay">
            <!--input type="image" src="<?php echo asset_url();?>/images/clay.png"
            <button id="loam-button" type=button onclick="currentUrl.appendCondition('Soil Type','Clay')">
            <h2>Clay</h2>
        </div>
    </div>
    <div id="right-column">
        <div class="right-soil" id="sand">
            <!input type="image" src="<?php echo asset_url();?>/images/sand.png">
            <h2>Sand</h2>
        </div>
        <div class="right-soil" id="compost">
            <!input type="image" src="<?php echo asset_url();?>/images/compost.png">
            <h2>Compost</h2>
        </div>
    </div>
</div>



<h1 id="question-line" class="page-question">How much sunlight?</h1>

<div id="inside-outside">
    <div class="weather-column" id="lot-column">
        <input type="image" src="https://www.jing.fm/clipimg/detail/21-214548_cloudy-weather-clipart-cartoon-weather-cloudy.png">
        <h2>Shade</h2>
    </div>
    <div class="weather-column" id="sometime-column">
        <input type="image" src="https://bloximages.newyork1.vip.townnews.com/northwestgeorgianews.com/content/tncms/assets/v3/editorial/1/6e/16e78ebe-f2e6-11e3-aa24-0017a43b2370/5671cf4ba8a87.image.jpg?resize=279%2C286">
        <h2>Semi-shade</h2>
    </div>
    <div class="weather-column" id="never-column">
        <input type="image" src="https://www.firstpalette.com/images/craft-mainpic-square/papersun-main2.jpg">
        <h2>Sun</h2>
    </div>
</div>

-->
