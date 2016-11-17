<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 10/12/14
 * Time: 20:41
 */


include 'utilsPHP/actions/getLodgingsBySubzone2Id.php';

?>

<table class='table table-striped'><tr><th>Address</th><th>Pay per night</th><th>Available</th><th>Actions</th></tr>
    <?php
    foreach ($lodgingsList as $lodging){
        ?>
        <tr>
            <td><?php
                if(strlen($lodging->lodgingAddress)>30)
                    echo substr($lodging->lodgingAddress, 0, 30).'...';
                else
                    echo $lodging->lodgingAddress;

                ?></td>
            <td><?php echo $lodging->lodgingPPN ?> <span class='<?php echo "fa fa-euro"; ?>'></span></td>
            <td><span class='<?php if($lodging->lodgingFree==1) echo "fa fa-check"; else echo "fa fa-close";  ?>'></span></td>
            <td>
                <form method="post" action="lodging.php">
                    <input type="hidden" name="lodgingId" value="<?php echo $lodging->lodgingId; ?>"/>
                    <input type="button" name="enterLodging" value="View" class="btn btn-primary btn-large" onclick="document.location ='lodging.php?lodgingId=<?php echo $lodging->lodgingId ?>'"/>
                </form>
            </td>
        </tr>
    <?php
    }
    ?>
</table>