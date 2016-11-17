<?php
/**
 * Created by PhpStorm.
 * User: Pe
 * Date: 4/12/14
 * Time: 12:37
 */

?>
<form class="article" method="POST" action="lodging.php" enctype="multipart/form-data" onsubmit="return valida(this)">
    <div class="div-lodging1">
        <h4>Address</h4>
        <input type="text" name="address" placeholder="Address"/>
        <h4>Town</h4>
        <select name="subzone2">
            <?php
            include 'utilsPHP/actions/getAllSubzone2.php';
            foreach($subZones2 as $element){
                echo "<option value='".$element->subzone2Id."'>".$element->subzone2Name."</option>";
            }
            ?>
        </select>
        <h4>Google Maps</h4>
        <!-- API google maps para seleccionar ubicacion del alojamiento  -->

        <div id="googleMap" style="height:380px;"></div>
        <input type="hidden" name="gmapsCoords" id="gmapsCoords"/>

        <h4>Description</h4>
        <textarea class="textAreaMio" name="description" cols="500" row="5" placeholder="Description"></textarea>
        <h4>Bed type</h4>
        <input type="text" name="bedType" placeholder="Bed Type"/>
        <h4>Size (m2)</h4>
        <input type="text" name="size" placeholder="Size"/>
        <h4>Capacity (people)</h4>
        <select name="capacity">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5 or more</option>
        </select>
    </div>

    <div class="div-lodging2">
        <div class="div-lodging2left">
            <h4>Smoker</h4>
            <input type="checkbox" name="smoker" value="1"/>
            <h4>Pets</h4>
            <input type="checkbox" name="pets" value="1"/>
            <h4>Gender preference</h4>
            <input type="radio" name="gender" value="male"/>
            Male
            <input type="radio" name="gender" value="female"/>
            Female
            <input type="radio" name="gender" value="none" checked/>
            None
        </div>
        <div class="div-lodging2right">
            <h4>Heating</h4>
            <input type="checkbox" name="heating" value="1"/>
            <h4>Sockets</h4>
            <input type="checkbox" name="sockets" value="1"/>
            <h4>Breakfast</h4>
            <input type="checkbox" name="breakfast" value="1"/>
            <h4>Dinner</h4>
            <input type="checkbox" name="dinner" value="1"/>
        </div>
    </div>

    <div class="div-lodging3">
        <input type="file" name="photos[]" id="photos" class="multi" maxlength="5" multiple="" />
    </div>

    <div class="div-lodging4">
        <h4>Pay per night</h4>
        <input type="text" name="ppn" placeholder="Pay per night"/>
        <span class='<?php echo "fa fa-euro"; ?>'></span>
    </div>

    <br/>
    <input type="submit" name="addLodging" value="Add Lodging" class="btn btn-primary btn-large">
</form>