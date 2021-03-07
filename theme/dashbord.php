<?php
if($_SESSION['email'] != 'admin@gmail.com'){
    header("Location: /blog/home");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
<!--    <script src="https://kit.fontawesome.com/a076d05399.js"></script>-->
</head>
<body>
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Admin Panel</a>
    <button class="navbar-toggler d-md-none collapsed m-2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100  " type="text" placeholder="search">
    <div class="dropdown" style="width: 280px">
        <a class="btn bg-dark text-muted" href="/blog/home">View Site</a>
        <a class="btn bg-dark text-muted dropdown-toggle" href="#" id="dropdown" data-bs-toggle="dropdown"><i class="fas fa-user align-middle"></i> user</a>

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="dropdown">
            <li class=""><a class="dropdown-item" href="#"><i class="fas fa-user align-middle"></i> profilet</a></li>
            <li class=""><a class="dropdown-item" href="/user/logout"><i class="fas fa-sign-out-alt"></i> Sign out</a></li>
        </ul>
    </div>
</header>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse position-absolute bottom-0 top-0 mt-md-4 mt-10" style="z-index: 200" id="sidebarMenu">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link text-white" href="/post/dashbord"><i class="fas fa-house-user align-text-top"></i> Dashbord</a></li>
                    <li class="nav-item">
                        <a class="nav-link text-white dropdown-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#post"><i class="fas fa-arrows-alt-v align-text-top"></i> Post</a>
                        <ul class="collapse" id="post">
                            <li><a href="/post/viewPost"  class="nav-link text-white"><i class="fas fa-blog align-text-top"></i> View all post</a></li>
                            <li><a href="/post/addPost" class="nav-link text-white"><i class="fas fa-blog align-text-top"></i> Add new post</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="/post/category"><i class="far fa-list-alt"></i> Categories</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/post/comment"><i class="far fa-comment-dots"></i> Comment</a></li>
                    <li class="nav-item">
                        <a class="nav-link text-white dropdown-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#user"><i class="fas fa-users align-text-top"></i> Users</a>
                        <ul class="collapse" id="user">
                            <li><a class="nav-link text-white" href="users.php?opt=add_user"><i class="fas fa-user align-text-top"></i>Add User</a></li>
                            <li><a class="nav-link text-white" href="./users.php"><i class="fas fa-user align-text-top"></i>View All Users</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="/user/profile"><i class="fas fa-user align-text-top"></i> Profile</a></li>
                </ul>
            </div>
        </nav>
        <main class="col-md-9 py-2 ms-md-auto col-lg-10 px-md-4">
            <?= $content ?>
        </main>
    </div>
</div>

<script src="/js/bootstrap.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>