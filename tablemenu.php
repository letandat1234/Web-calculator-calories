  
<?php
require 'menu/menu.php';

$users = getUsers();
include 'layouts/header.php';
?>


<div class="content-wrapper" style="min-height: 365px; padding-left: 15px;">
    <p>
        <a class="btn btn-success" href="createmenu.php">Create Suggestion Menu</a>
    </p>

    <table class="table">
        <thead>
        <tr>
           
            <th >Name</th>
            <th >Time Duration</th>
           
         <th >Type</th>
       
        <th>Action    </th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
               

                   
                <td ><?php echo $user['name'] ?></td>
                <td ><?php echo $user['time'] ?></td>
               <td ><?php echo $user['type'] ?></td>


                <td>
                    <a href="viewmenu.php?id= <?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
                    <a href="updatemenu.php?id=<?php echo $user['id'] ?>"
                       class="btn btn-sm btn-outline-secondary">Update</a>
                    <form method="POST" action="deletemenu.php">
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




