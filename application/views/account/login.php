<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <?php if($error) { ?>
                        <div class="alert alert-danger alert-dismissible" role="alert"><?php echo $error ?></div>
                    <?php } ?>
                    <h5 class="card-title text-center">Sign In</h5>
                    <?php echo form_open('account/login'); ?>
                        <div class="form-label-group">
                            <input name="email" type="email" id="email" class="form-control <?php echo validation_errors() ? (form_error('email') ? "is-invalid" : "is-valid") : ''; ?>" value="<?php echo set_value('email'); ?>" required autofocus>
                            <label for="email">Email address</label>
                            <div class="invalid-feedback"><?php echo form_error('email'); ?></div>
                        </div>
                        <div class="form-label-group">
                            <input name="password" type="password" id="password" class="form-control <?php echo validation_errors() ? (form_error('password') ? "is-invalid" : "is-valid") : ''; ?>"  value="<?php echo set_value('confirm'); ?>" required>
                            <label for="password">Password</label>
                            <div class="invalid-feedback"><?php echo form_error('password'); ?></div>
                        </div>
                        <hr class="my-4">
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                        <a class="d-block text-center mt-2 small" href="account/register">Create an Account</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
