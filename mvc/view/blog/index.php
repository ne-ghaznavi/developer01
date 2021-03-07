<div class="container pt-3">
    <div class="row">
        <div class="col-md-8">
            <?php
            require "system/db.php";

            $select_post = $pdo->query("SELECT * FROM dev_post");

            while ($result_select_post = $select_post->fetch()){?>
                <div class="card mb-4">
                    <a href="/blog/post/<?= $result_select_post['post_id']?>"><img class="card-img-top" src="../../../image/post/<?= $result_select_post['post_img']?>" alt="Card image cap"></a>
                    <div class="card-body">
                        <h2 class="card-title"><?= $result_select_post['post_title'] ?></h2>
                        <p class="card-text"><?= $result_select_post['post_content'] ?></p>
                        <a href="/blog/post/<?= $result_select_post['post_id']?>" class="btn btn-primary">Read More →</a>
                    </div>
                    <div class="card-footer text-muted">
                        <span class="float-start">Posted on <?= $result_select_post['post_data'] ?></span>
                        by <a href="#"><?= $result_select_post['post_author'] ?></a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="col-md-4">
            <!-- Search Widget -->
            <div class="card">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                    <div class="input-group">
                        <form action="" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for..." name="search">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">Go!</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">Categories</h5>
                <div class="card-body">
                    <div class="row">
                        <?php
                            require "system/db.php";
                            $select_category = $pdo->query("SELECT * FROM dev_category");
                            while ($result_select_category = $select_category->fetch()){?>
                                <li class="list-unstyled col-6 border-end mb-1"><a class="nav-link" href="#"><?= $result_select_category['cat_title']?></a></li>
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