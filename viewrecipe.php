<?php
include 'layouts/header.php';
require __DIR__ . '/recipes/recipe.php';

if (!isset($_GET['id'])) {
    include "partials1/not_found.php";
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include "partials1/not_found.php";
    exit;
}

?>
<div class="content-wrapper" style="min-height: 365px; padding-left: 15px;">
    <div class="card">
        <div class="card-header">
            <h3>View User: <b><?php echo $user['name'] ?></b></h3>
        </div>
        <div class="card-body">
            <a class="btn btn-secondary" href="updaterecipe.php?id=<?php echo $user['id'] ?>">Update</a>
            <form style="display: inline-block" method="POST" action="deleterecipe.php">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
        <table class="table">
            <tbody>
               <tr>
                <th>Image:</th>
              
                     <td style="width: 20%;">
                    <?php if (isset($user['extension'])): ?>
                        <img style="width: 150px; height: 150px;" src="<?php echo "recipes/images/${user['id']}.${user['extension']}" ?>" alt="">
                    <?php endif; ?>
                </td>
              
            </tr> 
            <tr>
                <th>Name:</th>
                <td><textarea  style="width: 950px; height: 50px; border: none;  " disabled="disabled" ><?php echo $user['name'] ?></textarea></td>
            </tr>
            <tr>
                <th>Des:</th>
                <td><textarea  style="width: 950px; height: 150px; border: none;  " disabled="disabled"><?php echo $user['des'] ?></textarea></td>
            </tr>
             <tr>
                <th>Ingredients:</th>
                <td><textarea  style="width: 1000px; height: 350px; border: none;  " disabled="disabled"><?php echo $user['ingre'] ?></textarea></td>
            </tr>
             <tr>
                <th>Direction:</th>
                <td><textarea  style="width: 1000px; height: 350px; border: none;  " disabled="disabled"><?php echo $user['direct'] ?></textarea></td>
            </tr>
           
            </tbody>
        </table>
    </div>
</div>


<?php include 'layouts/footer.php' ?>
