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
                    <label>Des</label>
                    <textarea style="height: 100px;" name="des" value="<?php echo $user['des'] ?>"
                           class="form-control <?php echo $errors['des'] ? 'is-invalid' : '' ?>">
                       
                    </textarea>
                   <div class="invalid-feedback">
                        <?php echo  $errors['des'] ?>
                    </div>
                   
                </div>
                   <div class="form-group">
                    <label>ingre</label>
                    <textarea style="height: 100px;" name="ingre" value="<?php echo $user['ingre'] ?>"
                           class="form-control <?php echo $errors['ingre'] ? 'is-invalid' : '' ?>">
                       
                    </textarea>
                   <div class="invalid-feedback">
                        <?php echo  $errors['ingre'] ?>
                    </div>
                   
                </div>
                   <div class="form-group">
                    <label>direct</label>
                    <textarea style="height: 100px;" name="direct" value="<?php echo $user['direct'] ?>"
                           class="form-control <?php echo $errors['direct'] ? 'is-invalid' : '' ?>">
                       
                    </textarea>
                   <div class="invalid-feedback">
                        <?php echo  $errors['direct'] ?>
                    </div>
                   
                </div>
             
                <div class="form-group">
                    <label>Image</label>
                    <input name="picture" type="file" class="form-control-file">
                </div>
     
 
<button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
