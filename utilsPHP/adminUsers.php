<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 11/12/14
 * Time: 12:43
 */

include 'utilsPHP/actions/getAllUsers.php';
?>

<table class='table table-striped'><tr><th>Email</th><th>First Name</th><th>Last Name</th><th>Actions</th></tr>
    <?php
    foreach ($userList as $user){
        ?>
        <tr>
            <td><?php
                if(strlen($user->userEmail)>30)
                    echo substr($user->userEmail, 0, 30).'...';
                else
                    echo $user->userEmail; ?></td>
            <td><?php echo $user->userFirstName ?></td>
            <td><?php echo $user->userLastName ?></td>
            <td>
                <form method="post" action="profile.php">
                    <input type="hidden" name="userId" value="<?php echo $user->userId; ?>"/>
                    <input type="submit" name="viewUser" value="View" class="btn btn-primary btn-large"/>
                    <form method="post" action="profile.php">
                        <input type="hidden" name="userId" value="<?php echo $user->userId; ?>"/>
                        <input type="submit" name="editUser" value="Edit" class="btn btn-primary btn-large"/>
                        <form method="post" action="profile.php">
                            <input type="hidden" name="userId" value="<?php echo $user->userId; ?>"/>
                            <input type="submit" name="delete" value="Delete" class="btn btn-danger btn-large"/>
                        </form>
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






