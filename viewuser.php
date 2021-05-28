<?php
  include 'layouts/header.php';
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
<div class="content-wrapper" style="min-height: 365px; padding-left: 15px;">
    <div class="card">
        <div class="card-header">
            <h3>View User: <b><?php echo $user['name'] ?></b></h3>
        </div>
        <div class="card-body">
            <a class="btn btn-secondary" href="updateuser.php?id=<?php echo $user['id'] ?>">Update</a>
            <form style="display: inline-block" method="POST" action="deleteuser.php">
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
                <th>Username:</th>
                <td><?php echo $user['username'] ?></td>
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
            <tr>
                <th>Physical activity level</th>
                <td><?php echo $user['tdee'] ?></td>
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
       
 <tr> <th>TDEE</th>
         <td> BMR= <?php 
              
                    $gender=$user ['gender'];
                      $tdee=$user ['tdee'];
                       $age=$user ['age'];
                    $weight=$user ['weight'];
                    $height = $user ['height'];
                    $calories="0.0215183";
                 
                switch ($gender) {
                            case 'Female':
                                $gender= 655 + (9.6 * $weight ) + (1.8 * $height) - (4.7 * $age);
                                echo   "<p>$gender </p>";
                                

                                break;
                                case 'Male':
                                    $gender=66 + (13.7 *$weight) + (5 * $height) - (6.8 * $age);
                                    echo  "<p>$gender </p>";
                                    
                                    
            
                        } ?>
     TDEE=  <?php 
                        switch ($tdee){
                            case 'Sedentary people':
                                $tdee=  ($gender * 1.2) ;
                                echo   "<p>$tdee </p>";
                                

                                break;
                                  case'People can do sports about 2-3 sessions / week':
                                $tdee=  $gender* 1.5 ;
                                echo   "<p>$tdee </p>";
                                

                                break;
                                  case 'People with high frequency of movement, 4-5 sessions / week':
                                $tdee=  $gender* 1.7 ;
                                echo   "<p>$tdee </p>";
                                

                                break;
                                case 'High intensity workout (all week)':
                                    $tdee= $gender* 1.9;
                                    echo  "<p>$tdee </p>";
                                    
                                    
            // references of calorie calculator: http://www.bodybuildbid.com/articles/weightloss/calorie-calculator.html
                        }
        ?> </td> </tr>
            </tbody>
        </table>
    </div>
</div>


<?php   require'layouts/footer.php'?>
