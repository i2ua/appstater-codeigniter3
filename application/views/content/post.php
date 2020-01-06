<?php echo $header; ?>
<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

<!--            --><?php //if ($error) { ?>
<!--                <div class="alert alert-danger alert-dismissible">-->
<!--                    --><?php //echo $error; ?>
<!--                    <button type="button" class="close" data-dismiss="alert">&times;</button>-->
<!--                </div>-->
<!--            --><?php //} ?>

            <!-- Title -->
            <h1 class="mt-4"><?php echo $title; ?></h1>
            <!-- Author -->
            <p class="lead">by <a href="#"><?php echo $author; ?></a></p>
            <hr>
            <!-- Date/Time -->
            <p>Posted on <?php echo $date_added; ?></p><!--<p>Posted on January 1, 2019 at 12:00 PM</p>-->
            <hr>
            <!-- Preview Image -->
            <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">
            <hr>
            <!-- Post Content -->
            <?php  echo $content; ?>
            <hr>
            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a class="page-link" href="#">&larr; Older</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">Newer &rarr;</a>
                </li>
            </ul>


            <!-- Comments Form -->
            <div class="card my-4">
                <h5 class="card-header">Leave a Comment:</h5>
                <div class="card-body">
                    <form action="<?php // echo $action; ?>" method="post">
                        <div class="form-group">
                            <textarea name="text" class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>





            <!-- Single Comment -->
            <?php foreach (array_reverse($comments) as $comment) { ?>
            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0"><?php  echo $comment->author; ?> <?php  echo $comment->date_added; ?></h5>
                    <?php  echo $comment->text; ?>
                </div>
            </div>
            <?php } ?>







            <!-- Comment with nested comments -->
            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0">Commenter Name</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                    <div class="media mt-4">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">Commenter Name</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>

                    <div class="media mt-4">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">Commenter Name</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>

                </div>
            </div>




        </div>

        <!-- Sidebar Widgets Column -->
        <?php echo $sidebar; ?>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
<?php echo $footer; ?>