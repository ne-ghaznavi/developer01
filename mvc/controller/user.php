<?php
class UserController {
    public function __construct(){
    }

    public function login(){
        if(isset($_POST['email'])){
            $this->loginCheck();
        }else{
            $this->loginForm();
        }
    }

    private function loginCheck(){}

    private function loginForm(){
        View::render("/user/login.php");
    }
}
?>
