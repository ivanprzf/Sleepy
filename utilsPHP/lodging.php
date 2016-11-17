<?php
/**
 * Created by PhpStorm.
 * User: Pe
 * Date: 3/12/14
 * Time: 13:57
 */

include 'utilsPHP/actions/getLodging.php';
include 'utilsPHP/actions/getLodgingPhotos.php';
?>

<div class="article">
    <div class="div-lodging1">
        <h4>Address</h4>
        <?php echo $lodging->lodgingAddress; ?>
        <h4>City</h4>
        <?php
        include 'utilsPHP/actions/getAllSubzone2.php';
        foreach($subZones2 as $element){
            if($element->subzone2Id==$lodging->subZone2Id)
                echo $element->subzone2Name;
        }
        ?>
        <h4>Google Maps</h4>
        <!-- API google maps para seleccionar ubicacion del alojamiento  -->
        <input type="hidden" id="gmapsCoords" value="<?php echo $lodging->lodgingGMaps; ?>"/>
        <div id="googleMapReadOnly" style="height:380px;"></div>
        <h4>Description</h4>
        <div class="well"><?php echo $lodging->lodgingDescription; ?></div>
        <h4>Bed type</h4>
        <?php echo $lodging->lodgingBedType; ?>
        <h4>Size</h4>
        <?php echo $lodging->lodgingSize; ?> m2
        <h4>Capacity</h4>
        <?php if($lodging->lodgingCapacity<5) echo $lodging->lodgingCapacity; else echo "More than 5" ?> people
    </div>

    <div class="div-lodging2">
        <div class="div-lodging2left">
            <h4>Smoker</h4>
            <span class='<?php if($lodging->lodgingSmoker==1) echo "fa fa-thumbs-up"; else echo "fa fa-thumbs-down";  ?>'></span>
            <h4>Pets</h4>
            <span class='<?php if($lodging->lodgingPets==1) echo "fa fa-thumbs-up"; else echo "fa fa-thumbs-down";  ?>'></span>
            <h4>Gender preference</h4>
            <span class='<?php if($lodging->lodgingGenderPreference=='male') echo "fa fa-male";
                                elseif($lodging->lodgingGenderPreference=='female') echo "fa fa-female";
                                elseif($lodging->lodgingGenderPreference=='none') echo "fa fa-users";  ?>'></span>
        </div>
        <div class="div-lodging2right">
            <h4>Heating</h4>
            <span class='<?php if($lodging->lodgingHeating==1) echo "fa fa-thumbs-up"; else echo "fa fa-thumbs-down";  ?>'></span>
            <h4>Sockets</h4>
            <span class='<?php if($lodging->lodgingSockets==1) echo "fa fa-thumbs-up"; else echo "fa fa-thumbs-down";  ?>'></span>
            <h4>Breakfast</h4>
            <span class='<?php if($lodging->lodgingBreakfast==1) echo "fa fa-thumbs-up"; else echo "fa fa-thumbs-down";  ?>'></span>
            <h4>Dinner</h4>
            <span class='<?php if($lodging->lodgingDinner==1) echo "fa fa-thumbs-up"; else echo "fa fa-thumbs-down";  ?>'></span>
        </div>
    </div>

    <div class="div-lodging3">
        <h4>Average rating</h4>
            Proximamente
            <?php //echo $lodging->lodgingAddress ?>

        <h4>Views</h4>

            <?php echo $lodging->lodgingViews ?>

    </div>

    <div class="div-lodging4">
        <h4>Pay per night</h4>

            <?php echo $lodging->lodgingPPN ?> <span class='<?php echo "fa fa-euro"; ?>'></span>

        <h4>Available</h4>

            <span class='<?php if($lodging->lodgingFree==1) echo "fa fa-check"; else echo "fa fa-close";  ?>'></span>

    </div>

    <div>
        <!-- Start: slider -->
        <div class="slider">
            <div class="container-fluid">
                <div id="heroSlider" class="carousel slide">
                    <div class="carousel-inner">
                        <?php
                        if(sizeof($photosList)>0)
                        {
                             echo "
                                <div class='item active'>
                                    <div class='hero-unit'>
                                        <div class='row-fluid'>
                                             <div class='span5 offset1'>
                                                 <img src='uploadedImages/".$photosList[0]->photoURL."' class='thumbnail img-lodging img-polaroid'/>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            ";
                            for($i=1;$i<sizeof($photosList);$i++){
                                echo "
                                    <div class='item'>
                                        <div class='hero-unit'>
                                            <div class='row-fluid'>
                                                 <div class='span5 offset1'>
                                                     <img src='uploadedImages/".$photosList[$i]->photoURL."' class='thumbnail img-lodging img-polaroid'/>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
                            }
                        }
                        ?>

                    </div>
                    <a class="left carousel-control" href="#heroSlider" data-slide="prev"><i class="fa fa-arrow-circle-left"></i></a>
                    <a class="right carousel-control" href="#heroSlider" data-slide="next"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- End: slider -->
    </div>

    <br/>
</div>