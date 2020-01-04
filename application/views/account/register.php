<div class="container">
    <div class="row">

        <?php if($error) { ?>
            <div class="alert alert-danger alert-dismissible" role="alert"><?php echo $error ?></div>
        <?php } ?>

        <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card card-signin flex-row my-5">
                <div class="card-img-left d-none d-md-flex">
                    <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Register</h5>
                    <form class="form-signin" action="account/register" method="post">
                        <div class="form-label-group">
                            <input name="username" type="text" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
                            <label for="inputUserame">Username</label>
                        </div>
                        <div class="form-label-group">
                            <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                            <label for="inputEmail">Email address</label>
                        </div>
                        <hr>
                        <div class="form-label-group">
                            <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            <label for="inputPassword">Password</label>
                        </div>
                        <div class="form-label-group">
                            <input name="confirm" type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                            <label for="inputConfirmPassword">Confirm password</label>
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
