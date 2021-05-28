<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php if ($user['id']): ?>
                    Update user <b><?php echo $user['name'] ?></b>
                <?php else: ?>
                    Create new User
                <?php endif ?>
            </h3>
        </div>
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data"
                  action="">
                <div class="form-group">
                    <label>Name</label>
                    <textarea style="height: 100px;" name="name" value="<?php echo $user['name'] ?>"
                           class="form-control <?php echo $errors['name'] ? 'is-invalid' : '' ?>">
                       
                    </textarea>
                   <div class="invalid-feedback">
                        <?php echo  $errors['name'] ?>
                    </div>
                   
                </div>
               
           
                   <div class="form-group">
                    <label>Type</label>
                    <textarea style="height: 100px;" name="type" value="<?php echo $user['type'] ?>"
                           class="form-control <?php echo $errors['type'] ? 'is-invalid' : '' ?>">
                       
                    </textarea>
                   <div class="invalid-feedback">
                        <?php echo  $errors['type'] ?>
                    </div>
                   
                </div>
                   <div class="form-group">
                    <label>Time Duration </label>
                    <textarea style="height: 100px;" name="time" value="<?php echo $user['time'] ?>"
                           class="form-control <?php echo $errors['time'] ? 'is-invalid' : '' ?>">
                       
                    </textarea>
                   <div class="invalid-feedback">
                        <?php echo  $errors['time'] ?>
                    </div>
                   
                </div>
                   <div class="form-group">
                    <label> Info</label>
                    <textarea style="height: 100px;" name="info" value="<?php echo $user['info'] ?>"
                           class="form-control <?php echo $errors['info'] ? 'is-invalid' : '' ?>">
                       
                    </textarea>
                   <div class="invalid-feedback">
                        <?php echo  $errors['info'] ?>
                    </div>
                   
                </div>
             
            
     
 
<button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
