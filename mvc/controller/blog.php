<?php
class BlogController{
    public function __construct(){
    }

    public function home(){
        View::renderBlog("blog/index.php");
    }

    public function post($id=null){
        $data['id'] = $id;
        view::renderBlog("blog/post.php", $data);
    }
}