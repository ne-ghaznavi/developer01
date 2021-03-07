
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <title>Developer01</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    <link rel="icon" href="../../../images/favicon.png">-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="container">
    <header class="">
       <ul class="navmenu ">
           <li><a href="#">خانه</a></li>
           <li><a href="/user/login">ورود</a></li>
           <li><a href="/blog/home">وبلاگ</a></li>
           <li><a href="#">تماس با ما</a></li>
           <?php
           if(isset($_SESSION['email'])){?>
               <li><a href="/user/profile">حساب کاربری</a></li>
               <?php } ?>
       </ul>
    </header>
</div>
</body>
</html>