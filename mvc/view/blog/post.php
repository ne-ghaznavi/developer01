<?php
if(isset($_POST['btn_send_comment'])){
    require "system/db.php";
    $author = $_POST['author'];
    $email = $_POST['email'];
    $content = $_POST['content'];

    $com_query =$pdo->query("INSERT INTO  dev_comment (comment_author, comment_email, comment_content, comment_status, comment_data, comment_post_id) VALUES ('$author', '$email', '$content', 'unapprove', now(), $id)") ;
}
?>

<div class="container pt-3" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <div class="col-md-8">
            <?php
            require "system/db.php";
            $result = $pdo->query("SELECT * FROM dev_post WHERE post_id ='$id' ");
            while ($row = $result->fetch() ){
                ?>
                <div class="card mb-4">
                    <img class="card-img-top" src="../../../image/post/<?= $row['post_img']?>" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title"><?= $row['post_title']?></h2>
                        <p class="card-text"><?= $row['post_content']?></p>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on <?= $row['post_data']?>
                        by <a href="#"><?= $row['post_author']?></a>
                    </div>
                </div>
            <?php } ?>
<!--//            $comment_query = $pdo->query("SELECT * FROM cms_comment WHERE comment_post_id='$id' AND comment_status='approve'");-->
<!--//            while ($comment_result = $comment_query->fetch()){-->

<!--                <div class="row mx-auto p-1 mt-2 border bg-light">-->
<!--                    <img style="height: 50px; width: 50px; " class="col-1 bg-secondary rounded-circle">-->
<!--                    <div class="col-11">-->
<!--                        <strong class="text-primary">--><?//= $comment_result['comment_author']?><!--</strong> <span class="text-muted">--><?//= $comment_result['comment_data']?><!--</span>-->
<!--                        <p>--><?//= $comment_result['comment_content'] ?><!--</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            --><?php //} ?>
            <div class="border px-2 my-3">
                <form action="#" method="post">
                    <p class="my-2">Add Comment</p>
                    <input class="form-control my-2" type="text" placeholder="author" name="author">
                    <input class="form-control my-2" type="email" placeholder="email" name="email">
                    <textarea class="form-control my-2" type="text" placeholder="content" name="content"></textarea>
                    <button type="submit" class="btn btn-success my-2" name="btn_send_comment">send</button>
                </form>
            </div>
        </div>
        <div class="col-md-4">

            <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-append">
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
                        <?php
                        $result = $pdo->query("SELECT * FROM dev_category");
                        while ($row = $result->fetch() ){
                            ?>

                            <li class="list-unstyled col-6"><a class="nav-link" href="#"><?= $row['cat_title']?></a></li>
                        <?php } ?>

                    </div>
                </div>
            </div>

            <!-- Login Widget -->
            <div class="card my-4">
                <h5 class="card-header">Login</h5>
                <form action="/user/login" method="post" class="px-2 py-1">
                    <input class="form-control mb-1"type="text" placeholder="email" name="email">
                    <input class="form-control mb-1"type="password" placeholder="password" name="password">
                    <button type="submit" class="btn btn-success mt-2" name="btn_login">login</button>
                </form>
            </div>

        </div>
    </div>
</div>

