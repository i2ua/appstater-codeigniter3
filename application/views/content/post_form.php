<?php echo $header; ?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
            <!-- Title -->
            <h1 class="mt-4">New Post</h1>
            <hr>
            <!-- Post Form -->
            <?php echo form_open('content/post/add'); ?>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" type="text" id="title" class="form-control input-lg <?php echo validation_errors() ? (form_error('title') ? "is-invalid" : "is-valid") : ''; ?>" value="<?php echo set_value('title'); ?>" placeholder="Enter your title.." required autofocus>
                    <div class="invalid-feedback"><?php echo form_error('title'); ?></div>
                </div>
                <div class="form-group">
                    <label for="content">Post Content</label>
                    <textarea id="content" class="summernote form-control <?php echo validation_errors() ? (form_error('content') ? "is-invalid" : "is-valid") : ''; ?>" name="content" rows="10" placeholder="Enter your text.." required><?php echo set_value('content'); ?></textarea>
                    <div class="invalid-feedback"><?php echo form_error('content'); ?></div>
                </div>
                <hr>
                <div class="pull-right">
                    <button id="button" type="submit" class="btn btn-primary" title="Save">Save</button>
                </div>
            </form>
            <hr>
        </div>

        <!-- Sidebar Widgets Column -->
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

            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">Categories</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">Web Design</a>
                                </li>
                                <li>
                                    <a href="#">HTML</a>
                                </li>
                                <li>
                                    <a href="#">Freebies</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">JavaScript</a>
                                </li>
                                <li>
                                    <a href="#">CSS</a>
                                </li>
                                <li>
                                    <a href="#">Tutorials</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">Side Widget</h5>
                <div class="card-body">
                    You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<?php echo $footer; ?>
<script type="text/javascript">
        $('.summernote').summernote({
            placeholder: 'Entry post content...',
            height: 350,
            minHeight: null,
            maxHeight: null
        });
</script>
