<div class="col-md-4">
    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
        </div>
    </div>
    <!-- Account Widget -->
    <div class="card my-4">
        <h5 class="card-header">Account</h5>
        <div class="card-body">
            <?php if (!$logged) { ?>
                <a class="btn btn-primary btn-block btn-lg text-white" href="account/login">Login</a>
                <a class="btn btn-success btn-block btn-lg text-white" href="account/register">Register</a>
            <?php } else { ?>
                <a class="btn btn-primary btn-block btn-lg text-white" href="account/logout">Logout</a>
            <?php } ?>
        </div>
    </div>
    <?php if ($logged) { ?>
    <!-- Total Widget -->
    <div class="card my-4">
        <h5 class="card-header">Total</h5>
        <div class="card-body">
            <h6 class="text-muted mb-3 mt-1"><i class="fas fa-users"></i> Users: <span class="text-primary"><?php echo $total->users; ?></span></h6>
            <h6 class="text-muted mb-3"><i class="fas fa-sticky-note"></i> Posts: <span class="text-success"><?php echo $total->posts; ?></span></h6>
            <h6 class="text-muted"><i class="fas fa-comments"></i> Comments: <span class="text-warning"><?php echo $total->comments; ?></span></h6>
        </div>
    </div>
    <?php } ?>
</div>
