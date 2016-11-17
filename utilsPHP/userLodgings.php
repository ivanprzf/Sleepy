<?php
/**
 * Created by PhpStorm.
 * User: Pe
 * Date: 3/12/14
 * Time: 10:39
 */
include 'utilsPHP/actions/getUserLodgings.php';
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
                <input type="submit" name="updateLodging" value="Edit" class="btn btn-primary btn-large"/>
                <input type="button" name="enterLodging" value="View" class="btn btn-primary btn-large" onclick="document.location ='lodging.php?lodgingId=<?php echo $lodging->lodgingId ?>'"/>
                <form method="post" action="lodging.php">
                    <input type="hidden" name="lodgingId" value="<?php echo $lodging->lodgingId; ?>"/>
                    <input type="submit" name="deleteLodging" value="Delete" class="btn btn-danger btn-large"/>
                </form>
            </form>
        </td>
    </tr>
<?php
}
?>
</table>
<form action="lodging.php" method="post">
    <input type="submit" name="newLodging" value="New Lodging" class="btn btn-primary btn-large">
</form>






