  
<?php
require 'fitness/fitness.php';

$users = getUsers();
include 'layouts/header.php';
?>


<div class="content-wrapper" style="min-height: 365px; padding-left: 15px;">
  
 <p>
        <a class="btn btn-success" href="createfitness.php">Create new Fitness</a>
    </p>
    <table class="table">
        <thead>
        <tr>
            <th >Name Fitness</th>
            <th >Calo</th>
                 <th >Type</th>
            <th >Time</th>
             <th >Action</th>
    
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
               

                   
                <td style=""><?php echo $user['name'] ?></td>
                <td style=""><?php echo $user['calo'] ?></td>
       

   <td style=""><?php echo $user['type'] ?></td>

        <td style=""><?php echo $user['time'] ?></td>
                <td>
                    <a href="viewfitness.php?id= <?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
                    <a href="updatefitness.php?id=<?php echo $user['id'] ?>"
                       class="btn btn-sm btn-outline-secondary">Update</a>
                    <form method="POST" action="deletefitness.php">
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




