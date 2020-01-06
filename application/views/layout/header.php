<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo base_url(); ?>">
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark p-3 px-md-4 mb-3 bg-dark shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="fas fa-comments"></i> Comment Desk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="content/post/list">Posts</a></li>
                <li class="nav-item"><a class="nav-link" href="content/post/add">New Post</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-user-circle"></i> Hello, <?php echo $username; ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                        <?php if (!$logged) { ?>
                            <a class="dropdown-item" href="account/login"><i class="fas fa-sign-in-alt"></i> Login</a>
                            <a class="dropdown-item" href="account/register"><i class="fas fa-user-plus"></i> Register</a>
                        <?php } else { ?>
                            <a class="dropdown-item" href="account/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        <?php } ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
