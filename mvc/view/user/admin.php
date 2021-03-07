<?php
$isGeust = !isset($_SESSION['email']);

if($isGeust){
    echo "Please Login <a href='/user/login'>Login</a>";
    exit;
}

if($_SESSION['email'] != "admin@gamil.com"){
    echo "Please Login <a href='/user/login'>Login</a>";
    exit;
}
echo 'admin page';