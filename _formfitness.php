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
                    <label>Name Fitness</label>
                    <input name="name" value="<?php echo $user['name'] ?>"
                           class="form-control <?php echo $errors['name'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['name'] ?>
                    </div>
                </div>
            <div class="form-group">
                    <label>Calories</label>
                    <input name="calo" value="<?php echo $user['calo'] ?>"
                           class="form-control <?php echo $errors['calo'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['calo'] ?>
                    </div>
                </div>
                     <div class="form-group">
                    <label>Type</label>
                    <input name="type" value="<?php echo $user['type'] ?>"
                           class="form-control <?php echo $errors['type'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['type'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Time</label>
                    <input name="time" value="<?php echo $user['time'] ?>"
                           class="form-control <?php echo $errors['time'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['time'] ?>
                    </div>
                </div>
                   
     
 
<button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
