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
                    <label>Type</label>
                    <input name="type" value="<?php echo $user['type'] ?>"
                           class="form-control <?php echo $errors['type'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['type'] ?>
                    </div>
                </div>
                  <div class="form-group">
                    <label>name</label>
                    <input name="name" value="<?php echo $user['name'] ?>"
                           class="form-control <?php echo $errors['name'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['name'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>calo</label>
                    <input name="calo" type="float" value="<?php echo $user['calo'] ?>"
                           class="form-control <?php echo $errors['calo'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['calo'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>water</label>
                    <input name="water" type="float"  value="<?php echo $user['water'] ?>"
                           class="form-control  <?php echo $errors['water'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['water'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>protein</label>
                    <input name="protein" type="float"  value="<?php echo $user['protein'] ?>"
                           class="form-control  <?php echo $errors['protein'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['protein'] ?>
                    </div>
                </div>
                      <div class="form-group">
                    <label>fat</label>
                    <input name="fat"type="float" value="<?php echo $user['fat'] ?>"
                           class="form-control  <?php echo $errors['fat'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['fat'] ?>
                    </div>
                </div>

                <div class="form-group">
                    <label>carb</label>
                    <input name="carb" type="float"  value="<?php echo $user['carb'] ?>"
                           class="form-control  <?php echo $errors['carb'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['carb'] ?>
                    </div>
                </div>
                  <div class="form-group">
                    <label>df</label>
                    <input name="df" type="float"  value="<?php echo $user['df'] ?>"
                           class="form-control  <?php echo $errors['df'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['df'] ?>
                    </div>
                </div>



                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
