<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <title>Blog</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
<header class="bg-dark">
    <div class="container">
        <div class="navbar navbar-dark navbar-expand-md ">
            <a href="/" class="navbar-brand"><strong>Develoepr01</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="/user/admin" class="nav-link">Admin</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<main class="container"><?= $content ?></main>

<footer class="bg-dark">
    <div class="container text-center text-white py-5">
        <p>Copyright © Nemat Ghaznavi 2021</p>
    </div>
</footer>

<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>