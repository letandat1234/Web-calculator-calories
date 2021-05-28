<?php
include 'layouts/header.php';
require __DIR__ . '/users/users.php';

if (!isset($_GET['id'])) {
    include "partials/not_found.php";
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include "partials/not_found.php";
    exit;
}

?>
<div class="content-wrapper" style="min-height: 365px; padding-left: 15px;">
    <div class="card">
        <div class="card-header">
            <h3>View User: <b><?php echo $user['name'] ?></b></h3>
        </div>
        <div class="card-body">
            <a class="btn btn-secondary" href="update.php?id=<?php echo $user['id'] ?>">Update</a>
            <form style="display: inline-block" method="POST" action="delete.php">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
        <table class="table">
            <tbody>
            <tr>
                 <tr>
                <th>Type:</th>
                <td><?php echo $user['type'] ?></td>
            </tr>
            <tr>
                <th>Name:</th>
                <td><?php echo $user['name'] ?></td>
            </tr>
             <tr>
                <th>Calo:</th>
                <td><?php echo $user['calo'] ?></td>
            </tr>
             <tr>
                <th>Water:</th>
                <td><?php echo $user['water'] ?></td>
            </tr>
             <tr>
                <th>Protein:</th>
                <td><?php echo $user['protein'] ?></td>
            </tr>
            <tr>
                <th>Fat:</th>
                <td><?php echo $user['fat'] ?></td>
            </tr>
            <tr>
                <th>Carb:</th>
                <td><?php echo $user['carb'] ?></td>
            </tr>
            <tr>
                <th>Df:</th>
                <td><?php echo $user['df'] ?></td>
            </tr>
          
            </tbody>
        </table>
    </div>
</div>


<?php include 'layouts/footer.php' ?>
