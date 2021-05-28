
<?php
require 'users/users.php';

$users = getUsers();

include 'layouts/header.php';
?>


<div class="content-wrapper" style="min-height: 365px; padding-left: 15px;">
    <p>
        <a class="btn btn-success" href="create.php">Create new Food</a>
    </p>
    <section class="content">
 <div class="container-fluid">
    <table class="table" >
        <thead>
        <tr>
            <th>Type</th>
            <th>Name</th>
            <th>Calo</th>
            <th>Water</th>
            <th>Protein</th>
            <th>Fat</th>
            <th>Carb</th>
            <th>Df</th>
               <th colspan="1">Action</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
              
                <td><?php echo $user['type'] ?></td>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['calo'] ?></td>
                <td><?php echo $user['water'] ?></td>
                  <td><?php echo $user['protein'] ?></td>
                <td><?php echo $user['fat'] ?></td>
                <td><?php echo $user['carb'] ?></td>
                <td><?php echo $user['df'] ?></td>
             
                <td>
                    <a href="view.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
                    <a href="update.php?id=<?php echo $user['id'] ?>"
                       class="btn btn-sm btn-outline-secondary">Update</a>
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
    </div>
    </section>
</div>
 
<?php include 'layouts/footer.php' ?>

