
<div  class="content-wrapper" style="min-height: 365px; padding-left: 15px;" >
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
                    <input name="name" value="<?php echo $user['name'] ?>"
                           class="form-control <?php echo $errors['name'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['name'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input name="username" value="<?php echo $user['username'] ?>"
                           class="form-control <?php echo $errors['username'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['username'] ?>
                    </div>
                </div>
        
               
            
              
                <div class="form-group">
                    <label>age</label>
                    <input name="age" value="<?php echo $user['age'] ?>"
                           class="form-control  <?php echo $errors['age'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['age'] ?>
                    </div>
                </div>
                   <div class="form-group">
                    <label>height</label>
                    <input name="height" value="<?php echo $user['height'] ?>"
                           class="form-control  <?php echo $errors['height'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['height'] ?>
                    </div>
                </div>
                   <div class="form-group">
                    <label>weight</label>
                    <input name="weight" value="<?php echo $user['weight'] ?>"
                           class="form-control  <?php echo $errors['weight'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['weight'] ?>
                    </div>
                </div>

                 <label>Gender:</label>
        <Select name="gender" value="<?php echo $user['gender'] ?>" class="form-control  <?php echo $errors['gender'] ? 'is-invalid' : '' ?>" ><br>
        <option>Male</option>
        <option>Female</option>
        </select><br><br>
<label>Physical Activity Level:</label>
        <Select name="tdee" value="<?php echo $user['tdee'] ?>" class="form-control  <?php echo $errors['tdee'] ? 'is-invalid' : '' ?>" ><br>
        <option >Sedentary people</option>
        <option >People can do sports about 2-3 sessions / week</option>
        <option >People with high frequency of movement, 4-5 sessions / week</option>
          <option >High intensity workout (all week)</option>
        </select><br><br>
 

                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
