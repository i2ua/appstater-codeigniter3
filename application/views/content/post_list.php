<?php echo $header; ?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Post Content Column -->
        <div class="col-md-8">
            <!-- Title -->
            <h1 class="mt-4"><?php echo $title; ?></h1>
            <hr>
            <?php foreach ($posts as $post) { ?>
                <!-- Blog Post -->
                <div class="card mb-4">
                    <!--                <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">-->
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $post->title; ?></h2>
                        <p class="card-text"><?php echo substr($post->content, 0 , 255); ?></p>
                        <a href="content/post?id=<?php echo $post->id; ?>" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
<!--                        Posted on January 1, 2017 by-->
                        Posted on <?php echo $post->date_added; ?> by
                        <a href="#"><?php echo $post->author; ?></a>
                    </div>
                </div>
            <?php } ?>
            <hr>
            <!-- Pagination -->
            <?php echo $pagination; ?>
        </div>
        <!-- Sidebar Widgets Column -->
        <?php echo $sidebar; ?>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<?php echo $footer; ?>
