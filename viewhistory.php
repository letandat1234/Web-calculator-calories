<?php
include 'partials/header.php';
require __DIR__ . '/history/history.php';

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
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Date: <b><?php echo $user['date'] ?></b></h3>
        </div>
        <div class="card-body">
          
            <form style="display: inline-block" method="POST" action="deletehistory.php">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
        <table class="table">
            <tbody>
              
            <tr>
                <th>Name:</th>
                <td><?php echo $user['date'] ?></td>
            </tr>
            <tr>
                <th>Morning :</th>
                <td><?php echo $user['calo1'] ?></td>
            </tr>
            <tr>
                <th>Lunch:</th>
                <td><?php echo $user['calo2'] ?></td>
            </tr>
             <tr>
                <th>Evening:</th>
                <td><?php echo $user['calo3'] ?></td>
            </tr>
           
             <tr>
                <th>Total calo food in day:</th>
                            <td> <?php echo $user['calo2'] + $user['calo1'] + $user['calo3'] ?>
    
            
</td>
            </tr>

 <tr>
                <th>Fitness:</th>
                <td>  <?php echo $user['calo4'] ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


<?php include 'partials/footer.php' ?>
