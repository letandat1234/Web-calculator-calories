<?php
include 'layouts/header.php';
require __DIR__ . '/menu/menu.php';

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
            <a class="btn btn-secondary" href="updatemenu.php?id=<?php echo $user['id'] ?>">Update</a>
            <form style="display: inline-block" method="POST" action="deletemenu.php">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
        <table class="table">
            <tbody>
          
            <tr>
                <th>Name:</th>
                <td><?php echo $user['name'] ?></td>
            </tr>
            <tr>
                <th>Time Duration :</th>
                <td><?php echo $user['time'] ?></td>
            </tr>
             <tr>
                <th>Type:</th>
                <td><?php echo $user['type'] ?></td>
            </tr>
             <tr>
                <th>Infomation:</th>
                <td><textarea  style="width: 700px; height: 750px; border: none;  " disabled="disabled"><?php echo $user['info'] ?></textarea></td>
            </tr>
            
           
            </tbody>
        </table>
    </div>
</div>


<?php include 'layouts/footer.php' ?>
