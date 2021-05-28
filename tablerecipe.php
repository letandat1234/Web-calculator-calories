  
<?php
require 'recipes/recipe.php';

$users = getUsers();
include 'layouts/header.php';
?>


<div class="content-wrapper" style="min-height: 365px; padding-left: 15px;">
    <p>
        <a class="btn btn-success" href="createrecipe.php">Create new User</a>
    </p>

    <table class="table">
        <thead>
        <tr>
            <th colspan="1">Image</th>
            <th colspan="1">Name</th>
            <th colspan="1">Describe</th>

        
                         <th>  Action       </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td style="width: 20%;">
                    <?php if (isset($user['extension'])): ?>
                        <img style="width: 150px; height: 150px;" src="<?php echo "recipes/images/${user['id']}.${user['extension']}" ?>" alt="">
                    <?php endif; ?>
                </td>

                   
                <td style="width: 30%"><?php echo $user['name'] ?></td>
                <td style="width: 48%"><?php echo $user['des'] ?></td>
            

                <td>
                    <a href="viewrecipe.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
                    <a href="updaterecipe.php?id=<?php echo $user['id'] ?>"
                       class="btn btn-sm btn-outline-secondary">Update</a>
                    <form method="POST" action="deleterecipe.php">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>

</div>

<?php include 'layouts/footer.php' ?>



