<?php
class PostController {

    public function category() {
        view::renderDashbord("post/category.php");
    }

    public function dashbord() {
        view::renderDashbord('post/dashbord.php');
    }

    public function deleteCategory($id){
        require "system/db.php";
        $query = $pdo->query("DELETE FROM cms_categories WHERE cat_id='$id'");
        $result = $query->fetch();
        header("Location: /post/category");
    }

    public function deletePost($id){
        require "system/db.php";
        $query = $pdo->query("DELETE FROM cms_post WHERE post_id='$id'");
        $result = $query->fetch();
        header("Location: /post/viewPost");
    }

    public function addCategory(){
        if($_POST['category'] != null){
            require "system/db.php";
            $category = $_POST['category'];
            $query = $pdo->query("INSERT INTO cms_categories (cat_title) values ('$category')");
            $query->fetch();
            header("Location: /post/category");
        }else{
            header("Location: /post/category");
        }
    }

    public function addPost(){
        view::renderDashbord("post/newPost.php");
    }

    public function editCategory($id){
        echo $postId = $id;
        header("Location: /post/");
    }

    public function viewPost() {
        view::renderDashbord('post/allPost.php');
    }

    public function comment($id=null) {
        $data['id'] = $id;
        view::renderDashbord("post/comment.php", $data);
    }

}
