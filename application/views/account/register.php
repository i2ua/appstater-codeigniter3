<div class="container">
    <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card card-signin flex-row my-5">
                <div class="card-img-left d-none d-md-flex"></div>
                <div class="card-body">
                    <?php if($error) { ?>
                        <div class="alert alert-danger alert-dismissible" role="alert"><?php echo $error ?></div>
                    <?php } ?>
                    <h5 class="card-title text-center">Register</h5>
                        <?php echo form_open('account/register'); ?>
                        <div class="form-label-group">
                            <input name="username" type="text" id="username" class="form-control <?php echo validation_errors() ? (form_error('username') ? "is-invalid" : "is-valid") : ''; ?>" value="<?php echo set_value('username'); ?>" required autofocus>
                            <label for="username">Username</label>
                            <div class="invalid-feedback"><?php echo form_error('username'); ?></div>
                        </div>
                        <div class="form-label-group">
                            <input name="email" type="email" id="email" class="form-control <?php echo validation_errors() ? (form_error('email') ? "is-invalid" : "is-valid") : ''; ?>" value="<?php echo set_value('email'); ?>" required>
                            <label for="email">Email address</label>
                            <div class="invalid-feedback"><?php echo form_error('email'); ?></div>
                        </div>
                        <hr>
                        <div class="form-label-group">
                            <input name="password" type="password" id="password" class="form-control <?php echo validation_errors() ? (form_error('password') ? "is-invalid" : "is-valid") : ''; ?>" value="<?php echo set_value('password'); ?>" required>
                            <label for="password">Password</label>
                            <div class="invalid-feedback"><?php echo form_error('password'); ?></div>
                        </div>
                        <div class="form-label-group">
                            <input name="confirm" type="password" id="confirm" class="form-control <?php echo validation_errors() ? (form_error('confirm') ? "is-invalid" : "is-valid") : ''; ?>" value="<?php echo set_value('confirm'); ?>" required>
                            <label for="confirm">Confirm password</label>
                            <div class="invalid-feedback"><?php echo form_error('confirm'); ?></div>

                        </div>
                        <hr class="my-4">
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                        <a class="d-block text-center mt-2 small" href="account/login">Sign In</a>
                       </form>
                </div>
            </div>
        </div>
    </div>
</div>
