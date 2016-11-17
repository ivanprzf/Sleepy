<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 10/12/14
 * Time: 20:34
 */

include 'utilsPHP/actions/getAllSubzone2.php';

?>
<form method="post" action="search.php">
    <select name="subzone2">
        <?php
        include 'utilsPHP/actions/getAllSubzone2.php';
        foreach($subZones2 as $element){
            echo "<option value='".$element->subzone2Id."'>".$element->subzone2Name."</option>";
        }
        ?>
    </select>
    <br/>
    <input type="submit" name="search" class="btn btn-primary"/>
</form>
