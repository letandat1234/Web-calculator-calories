  
<?php
require 'history/history.php';

$users = getUsers();
include 'partials/header.php';
?>


<div class="container">
     <p>
        <a class="btn btn-success" href="creathistory.php">Save</a>
    </p>
   
    <table class="table">
        <thead>
        <tr>
         
            <th >morning</th>
              <th >lunch</th>
                <th >evening</th>
                <th>fitness</th>
        <th >total</th>
                         <th >    date     </th>
                      
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
          
<td>   <p  type="date"><?php echo $user['date'] ?></p></td>
                
             
                <td ><?php echo $user['calo1'] ?></td>
                <td ><?php echo $user['calo2'] ?></td>
           <td ><?php echo $user['calo3'] ?></td>
                <td ><?php echo $user['calo4'] ?></td>

<td> <?php echo $user['calo2'] + $user['calo1'] + $user['calo3'] ?>
    
            
</td>
 <td ><?php echo $user['calo2'] + $user['calo1'] + $user['calo3'] -  $user['calo4']  ?> </td>
                <td>
                    <a href="viewhistory.php?id= <?php echo $user['id'] ?>"  class="btn btn-sm btn-outline-info">View</a>
                    
                    <form method="POST" action="deletehistory.php">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>

</div>

<?php include 'partials/footer.php' ?>




