<h1 id="main-page-line"style="text-align:center">PlantHero</h1>

<?php if(isset($records))
    foreach($records as $row){
        echo "
				<tr>
				    <td>User_active: </td>
					<td>$row->user_active</td>
				</tr>
				<tr>
				    <td>timestamp: </td>
					<td>$row->timestamp</td>
				</tr>
				
				";
    } ?>


<div class="Images">

    <img id="PlantHero_logo" src="assets/img/web/logo.png" alt="PlantHero logo">
        <span id="tooltiptext_logo">
        PlantHero is an interactive tool that makes 
        it simple and easy to find the perfect waterwise 
        plant for you! Waterwise plants are sturdy, 
        resilient plants that require only minimal 
        watering in order to survive. 
        By planting waterwise plants, you are helping 
        to fight the Australian drought crisis and can also reduce your water bill at the same time!
    </span>
</div>

<div id="find_div" class="button">
    <form action="find_my_plant">
        <input type="submit" value="Find my plant" id="find_plant">
        <span id="find_span">Click 'Find my plant' to complete an interactive activity which will suggest the perfect waterwise plant for you.</span>
    </form>
    
</div>
<br>

<div id="search_div" class="button">
    <form action="search">
        <input type="submit" value="Search by description" id="search_plant">
        <span id="search_span">Click 'Search by description' to find a waterwise plant by name or description</span> 
    </form>
</div>
