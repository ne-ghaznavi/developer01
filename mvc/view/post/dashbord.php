<?php
require "system/db.php";
$isGeust = !isset($_SESSION['email']);

if($isGeust){
    echo "Please Login <a href='/user/login'>Login</a>";
    exit;
}

if($_SESSION['email'] != "admin@gmail.com"){
    echo "Please Login11 <a href='/user/login'>Login</a>";
    exit;
}

//Post Query
$post_query = $pdo->query("SELECT * FROM dev_post");
$post_query->execute();
$post_count = $post_query->rowCount();

//User query
$user_query = $pdo->query("SELECT * FROM dev_user");
$user_query->execute();
$user_count = $user_query->rowCount();

//comment query
//$comment_query = $pdo->query("SELECT * FROM dev_comment");
//$comment_query->execute();
//$comment_count = $comment_query->rowCount();

//categories query
$categories_query = $pdo->query("SELECT * FROM dev_category");
$categories_query->execute();
$categories_count = $categories_query->rowCount();

?>

<div>
    <div class="row">
        <!-- post -->
        <div class="col-sm-6 col-lg-3 mt-3">
            <div class="card text-white">
                <div class="card-body bg-secondary" style="font-size: 22px">
                    <strong>Post</strong>
                    <span class="float-end"><?= $post_count ?></span>
                </div>
                <div class="card-footer bg-primary">
                    <a class="text-white" href="/post/viewPost">View Detail</a>
                </div>
            </div>
        </div>

        <!-- user -->
        <div class="col-sm-6 col-lg-3 mt-3">
            <div class="card text-white">
                <div class="card-body bg-secondary" style="font-size: 22px">
                    <strong>User</strong>
                    <span class="float-end"><?= $user_count ?></span>
                </div>
                <div class="card-footer bg-primary">
                    <a class="text-white" href="#">View Detail</a>
                </div>
            </div>
        </div>

        <!-- comment -->
        <div class="col-sm-6 col-lg-3 mt-3">
            <div class="card text-white">
                <div class="card-body bg-secondary" style="font-size: 22px">
                    <strong>Comment</strong>
                    <span class="float-end"><?= $comment_count ?></span>
                </div>
                <div class="card-footer bg-primary">
                    <a class="text-white" href="#">View Detail</a>
                </div>
            </div>
        </div>

        <!-- category -->
        <div class="col-sm-6 col-lg-3 mt-3">
            <div class="card text-white">
                <div class="card-body bg-secondary" style="font-size: 22px">
                    <strong>Category</strong>
                    <span class="float-end"><?= $categories_count ?></span>
                </div>
                <div class="card-footer bg-primary">
                    <a class="text-white" href="#">View Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>

