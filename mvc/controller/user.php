<?php

class UserController {
    public function __construct(){
    }
    
    public function profile(){
        View::render("/user/profile.php");
    }

    public function home(){
        View::renderHome("/page/home.php");
    }

    public function logout(){
        session_destroy();
        header("Location: /user/login");
    }

    public function login(){
        if(isset($_POST['email'])){
            $this->loginCheck();
        }else{
            $this->loginForm();
        }
    }

    private function loginCheck(){
        require "system/db.php";

        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = $pdo->query("SELECT * FROM dev_user WHERE email='$email'");
        $result = $query->fetch();

        if($result == null){
            echo "you are not register";
        }

        if($password == $result['password']){
            $_SESSION['email'] = $email;
            $_SESSION['user_id'] = $result["user_id"];
            header("Location: /user/profile");
        }else{
            echo "Your password not match";
        }

    }

    private function loginForm(){
        View::render("/user/login.php");
    }

    public function register(){
        if(isset($_POST['email'])){
            $this->registerCheck();
        }else{
            $this->registerForm();
        }
    }

    private function registerCheck(){
        require "system/db.php";

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $job = $_POST['job'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        $query_select = $pdo->query("SELECT * FROM dev_user WHERE email='$email'");
        $result_select = $query_select->fetch();

        if($result_select != null){
            echo "you are already registered";
            exit;
        }

        if(strlen($password)<3 || strlen($confirmPassword)<3){
            echo "you password not strong";
            exit;
        }

         if($password != $confirmPassword){
             echo "you password not matched";
             exit;
         }

        $query_insert = $pdo->query("INSERT INTO dev_user (firstname, lastname, email, password,phone, mobile, address, job) 
                                          VALUES ('$fname', '$lname', '$email', '$password','$phone', '$mobile', '$address', '$job')");
        header("Location: /user/login");

    }

    private function registerForm(){
        View::render("/user/register.php");
    }
}
?>
