<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 9/12/14
 * Time: 20:43
 */
include 'utilsPHP/actions/get6RandomLodgings.php';
include 'utilsPHP/actions/getAllSubzone2.php';

?>

<div class="row-fluid">
    <ul class="thumbnails">
        <?php
        for($i=0;$i<3;$i++){
        ?>
            <li class="span4">
                <div class="thumbnail">
                    <img src="img/<?php foreach($subZones2 as $element){if($element->subzone2Id==$randomLodgingsList[$i]->subZone2Id) echo $element->subzone2Photo;} ?>" alt="city pic" height="270px">
                    <div class="caption">
                        <h3><?php echo $randomLodgingsList[$i]->lodgingAddress." <br/>("; foreach($subZones2 as $element){if($element->subzone2Id==$randomLodgingsList[$i]->subZone2Id) echo $element->subzone2Name.")";} ?></h3>
                        <p>
                            <?php echo $randomLodgingsList[$i]->lodgingDescription; ?>
                        </p>
                    </div>
                    <div class="widget-footer">
                        <p>
                            <a href="lodging.php?lodgingId=<?php echo $randomLodgingsList[$i]->lodgingId; ?>" class="btn btn-primary">View</a>&nbsp; <?php echo "Views: ". $randomLodgingsList[$i]->lodgingViews; ?>
                        </p>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>

<div class="row-fluid">
    <ul class="thumbnails">
        <?php
        for($i=3;$i<6;$i++){
            ?>
            <li class="span4">
                <div class="thumbnail">
                    <img src="img/<?php foreach($subZones2 as $element){if($element->subzone2Id==$randomLodgingsList[$i]->subZone2Id) echo $element->subzone2Photo;} ?>" alt="city pic">
                    <div class="caption">
                        <h3><?php echo $randomLodgingsList[$i]->lodgingAddress." <br/>("; foreach($subZones2 as $element){if($element->subzone2Id==$randomLodgingsList[$i]->subZone2Id) echo $element->subzone2Name.")";} ?></h3>
                        <p>
                            <?php echo $randomLodgingsList[$i]->lodgingDescription; ?>
                        </p>
                    </div>
                    <div class="widget-footer">
                        <p>
                            <a href="lodging.php?lodgingId=<?php echo $randomLodgingsList[$i]->lodgingId; ?>" class="btn btn-primary">View</a>&nbsp; <?php echo "Views: ". $randomLodgingsList[$i]->lodgingViews; ?>
                        </p>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>