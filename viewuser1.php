<?php
include 'partials1/header.php';
require __DIR__ . '/users1/users.php';

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
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>View User: <b><?php echo $user['name'] ?></b></h3>
        </div>
        <div class="card-body">
            <a class="btn btn-secondary" href="tableuser.php">Back</a>
             <a class="btn btn-secondary" href="updateuser.php?id=<?php echo $user['id'] ?>">Update</a>
         
        </div>
        <table class="table">
            <tbody>
                <tr>
                    <th>Image</th>
                    <td>
                    <?php if (isset($user['extension'])): ?>
                        <img style="width: 60px" src="<?php echo "users1/images/${user['id']}.${user['extension']}" ?>" alt="">
                    <?php endif; ?>
                </td>
            </tr>
                 
            <tr>
                <th>Name:</th>
                <td><?php echo $user['name'] ?></td>
            </tr>
            <tr>
                <th>Username:</th>
                <td><?php echo $user['username'] ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?php echo $user['email'] ?></td>
            </tr>
            <tr>
                <th>Age</th>
                <td><?php echo $user['age'] ?></td>
            </tr>
            <tr>
                <th>Height</th>
                <td><?php echo $user['height'] ?></td>
            </tr>
            <tr>
                <th>Weight</th>
                <td><?php echo $user['weight'] ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo $user['gender'] ?></td>
            </tr>
            <tr> <th>BMR</th>
                             <td>  <?php 
           
           $age=$user ['age'];
            $weight=$user ['weight'];
            $height = $user ['height'];
            $calories="0.0215183";
            $gender=$user ['gender'];
        
                switch ($gender){
                    case 'Female':
                        $gender= 655 + (9.6 * $weight ) + (1.8 * $height) - (4.7 * $age);
                        echo   "<p>$gender </p>";
                        

                        break;
                        case 'Male':
                            $gender=66 + (13.7 *$weight) + (5 * $height) - (6.8 * $age);
                            echo  "<p>$gender </p>";
                            
                            
    // references of calorie calculator: http://www.bodybuildbid.com/articles/weightloss/calorie-calculator.html
                }
?></td> 
            </tr>
       
            </tbody>
        </table>
    </div>
</div>


<?php include 'partials1/footer.php' ?>
