        <?php
        require 'users1/users.php';

        $users = getUsers();?>

      <?php include ("layouts/header.php"); ?>


        <div  class="content-wrapper" style="min-height: 365px; padding-left: 15px; padding-right: 15px;">
           

            <table class="table" border="1px">
                <thead>
                <tr>
                  
                    <th>Name</th>
                    
                     <th>Age</th>
                     <th>Height</th>
                      <th>Weight</th>
                      <th>Gender</th>
                       <th>PAL</th>

                       <th>BMR  </th>
                         <th colspan="1">TDEE  </th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                   

                           
                        <td><?php echo $user['name'] ?></td>
                    
                   
                        
                         <td><?php echo $user['age'] ?></td>
                         <td><?php echo $user['weight'] ?></td>
                         <td><?php echo $user['height'] ?></td>
                         <td><?php echo $user['gender'] ?></td>
                         <td><?php echo $user['tdee']?></td>
                          
                                   

                       <td> BMR= <?php 
                   
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
        ?> </td> 
                    

                        <td>
                            <a href="viewuser.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
                            <a href="updateuser.php?id=<?php echo $user['id'] ?>"
                               class="btn btn-sm btn-outline-secondary">Update</a>
                            <form method="POST" action="deleteuser.php">
                                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach;; ?>
                </tbody>
            </table>
        </div>

  

<?php require('layouts/footer.php'); ?>
