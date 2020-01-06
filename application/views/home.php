<header class="bg-primary py-5 mb-5">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-12">
                <?php if (!$logged) { ?>
                <h1 class="display-4 text-white mt-5 mb-2">Welcome to Comment Desk</h1>
                <p class="lead mb-5 text-white-50">This skeleton application is based on the CodeIgniter 3 framework and can be used as a CodeIgniter 3 Starter Application.</p>
                <?php } else { ?>
                <div class="card-deck text-center">
                    <div class="card bg-light col-md-3 p-0 shadow ml-md-auto">
                        <div class="card-body">
                            <h1 class="text-muted"><i class="fas fa-users"></i> <span class="text-primary"><?php echo $total->users; ?></span></h1>
                        </div>
                        <div class="card-footer bg-light  text-muted">Users</div>
                    </div>
                    <div class="card bg-light col-sm-6 col-md-3 p-0 shadow">
                        <div class="card-body">
                            <h1 class="text-muted"><i class="fas fa-sticky-note"></i> <span class="text-success"><?php echo $total->posts; ?></span></h1>
                        </div>
                        <div class="card-footer bg-light text-muted">Posts</div>
                    </div>
                    <div class="card bg-light col-sm-6 col-md-3 p-0 shadow mr-md-auto">
                        <div class="card-body">
                            <h1 class="text-muted"><i class="fas fa-comments"></i> <span class="text-warning"><?php echo $total->comments; ?></span></h1>
                        </div>
                        <div class="card-footer text-muted">Comments</div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</header>
<section class="my-5">
        <div class="container">
            <h2>Recent Posts</h2>
            <hr class="mb-4">
            <div class="card-columns">
                <?php foreach ($posts as $post) { ?>
                    <div class="card shadow mb-4">
                        <div class="card-body text-dark">
                            <h5 class="card-title"><a href="content/post?id=<?php echo $post->id; ?>"><?php echo $post->title; ?></a></h5>
                            <p class="card-text"><?php echo substr($post->content, 0 , 125); ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted font-italic"><?php echo $post->date_added; ?></small>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    <div class="container">
        <h2>Last Comments</h2>
        <hr class="mb-4">
        <div class="card-columns">
            <?php foreach ($comments as $comment) { ?>
                <div class="card shadow mb-4">
                    <div class="card-body text-dark">
                        <h5 class="card-title">@<?php echo $comment->author; ?></h5>
                        <p class="card-text"><i><?php echo $comment->text; ?></i></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
