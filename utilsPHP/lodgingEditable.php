<?php
/**
 * Created by PhpStorm.
 * User: Pe
 * Date: 4/12/14
 * Time: 12:37
 */
include 'utilsPHP/actions/getLodging.php';

?>
<form class="article" method="POST" action="lodging.php" enctype="multipart/form-data"
      xmlns="http://www.w3.org/1999/html">
    <div class="div-lodging1">
        <h4>Address</h4>
        <input type="text" name="address" placeholder="Address" value="<?php echo $lodging->lodgingAddress ?>"/>
        <h4>Town</h4>
        <select name="subzone2">
            <?php
            include 'utilsPHP/actions/getAllSubzone2.php';
            foreach($subZones2 as $element){
                if($element->subzone2Id==$lodging->subZone2Id)
                    echo "<option selected value='".$element->subzone2Id."'>".$element->subzone2Name."</option>";
                else
                    echo "<option value='".$element->subzone2Id."'>".$element->subzone2Name."</option>";
            }
            ?>
        </select>
        <h4>Google Maps</h4>
        <!-- API google maps para seleccionar ubicacion del alojamiento  -->
        <div id="googleMap" style="height:380px;"></div>
        <input type="hidden" name="gmapsCoords" id="gmapsCoords" value="<?php echo $lodging->lodgingGMaps ?>"/>

        <h4>Description</h4>
        <textarea class="textAreaMio" name="description" cols="500" row="5" placeholder="Description"><?php echo $lodging->lodgingDescription ?></textarea>
        <h4>Bed type</h4>
        <input type="text" name="bedType" placeholder="Bed Type" value="<?php echo $lodging->lodgingBedType ?>"/>
        <h4>Size (m2)</h4>
        <input type="text" name="size" placeholder="Size" value="<?php echo $lodging->lodgingSize ?>"/>
        <h4>Capacity (people)</h4>
        <select name="capacity">
            <option value="1" <?php if ($lodging->lodgingCapacity==1) echo 'selected'; ?>>1</option>
            <option value="2" <?php if ($lodging->lodgingCapacity==2) echo 'selected'; ?>>2</option>
            <option value="3" <?php if ($lodging->lodgingCapacity==3) echo 'selected'; ?>>3</option>
            <option value="4" <?php if ($lodging->lodgingCapacity==4) echo 'selected'; ?>>4</option>
            <option value="5" <?php if ($lodging->lodgingCapacity==5) echo 'selected'; ?>>5 or more</option>
        </select>
    </div>

    <div class="div-lodging2">
        <div class="div-lodging2left">
            <h4>Smoker</h4>
            <input type="checkbox" name="smoker" value="1" <?php if($lodging->lodgingSmoker=='1')echo 'checked' ?>/>
            <h4>Pets</h4>
            <input type="checkbox" name="pets" value="1" <?php if($lodging->lodgingPets=='1')echo 'checked' ?>/>
            <h4>Gender preference</h4>
            <input type="radio" name="gender" value="male" <?php if($lodging->lodgingGenderPreference=='male')echo 'checked' ?>/>
            Male
            <input type="radio" name="gender" value="female" <?php if($lodging->lodgingGenderPreference=='female')echo 'checked' ?>/>
            Female
            <input type="radio" name="gender" value="none" <?php if($lodging->lodgingGenderPreference=='none')echo 'checked' ?>/>
            None
        </div>
        <div class="div-lodging2right">
            <h4>Heating</h4>
            <input type="checkbox" name="heating" value="1" <?php if($lodging->lodgingHeating=='1')echo 'checked' ?>/>
            <h4>Sockets</h4>
            <input type="checkbox" name="sockets" value="1" <?php if($lodging->lodgingSockets=='1')echo 'checked' ?>/>
            <h4>Breakfast</h4>
            <input type="checkbox" name="breakfast" value="1" <?php if($lodging->lodgingBreakfast=='1')echo 'checked' ?>/>
            <h4>Dinner</h4>
            <input type="checkbox" name="dinner" value="1" <?php if($lodging->lodgingDinner=='1')echo 'checked' ?>/>
        </div>
    </div>

    <!--<div class="div-lodging3">
        <input type="file" name="photos[]" id="photos" class="multi" maxlength="5" multiple="" />
    </div>-->

    <div class="div-lodging4">

        <h4>Pay per night</h4>
        <input type="text" name="ppn" placeholder="Pay per night" value="<?php echo $lodging->lodgingPPN ?>"/>
        <span class='<?php echo "fa fa-euro"; ?>'></span>
        <h4>Available</h4>
        <input type="checkbox" name="free" value="1" <?php if($lodging->lodgingFree=='1')echo 'checked' ?>/>
    </div>

    <br/>
    <input type="hidden" name="lodgingId" id="lodgingId" value="<?php echo $lodging->lodgingId ?>"/>
    <input type="submit" name="editLodging" value="Update Lodging" class="btn btn-primary btn-large">
</form>